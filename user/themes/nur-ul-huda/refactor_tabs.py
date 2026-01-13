import re

file_path = '/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints.yaml'

with open(file_path, 'r') as f:
    lines = f.readlines()

# Define tabs to move to secondary row
tabs_to_move = [
    'glass_tab',
    'components_tab',
    'islamic_features_tab',
    'integrations_advanced_tab',
    'advanced_tab',
    'nur-ul-huda_legacy'
]

primary_lines = []
secondary_content = []

# Regex to identify tab start: 8 spaces followed by tab_name:
tab_start_pattern = re.compile(r'^        ([a-zA-Z0-9_\-]+):')

current_tab = None
captured_tab_content = []
skip_mode = False

iterator = iter(lines)
try:
    line = next(iterator)
    while True:
        # Check for tab connection
        match = tab_start_pattern.match(line)
        if match:
            tab_name = match.group(1)
            if tab_name in tabs_to_move:
                # Start capturing this tab
                current_tab = tab_name
                skip_mode = True
                captured_tab_content = [line]
                
                # Consume lines until next same-level or lower-level indentation
                while True:
                    try:
                        next_line = next(iterator)
                    except StopIteration:
                        break
                    
                    # Check indentation of next line
                    # standard tab indentation is 8 spaces.
                    # content inside is 10+ spaces.
                    # if indentation is <= 8 spaces, it might be a sibling or parent.
                    # But empty lines should be included.
                    
                    stripped = next_line.strip()
                    if not stripped:
                        captured_tab_content.append(next_line)
                        continue
                        
                    indent = len(next_line) - len(next_line.lstrip())
                    
                    if indent <= 8:
                        # End of current tab block
                        # We found the start of the next block or end of parent
                        secondary_content.extend(captured_tab_content)
                        captured_tab_content = []
                        line = next_line # Set current line to this new line
                        
                        # Re-evaluate this line in the outer loop
                        # But wait, we are inside inner loop.
                        # We need to break to outer loop, but we need to process this 'line'
                        
                        # Use a flag to indicate we have a 'line' ready
                        break
                    else:
                        captured_tab_content.append(next_line)
                
                # After breaking inner loop:
                if captured_tab_content: # EOF case
                     secondary_content.extend(captured_tab_content)
                     break
                
                # Loop continues with 'line' set to the next block start
                continue

        # Modify main 'tabs' to 'tabs_primary'
        # Line 24 in original is `    tabs:` (4 spaces) => `    tabs_primary:`
        if line.strip() == 'tabs:' and len(line) - len(line.lstrip()) == 4:
            line = line.replace('tabs:', 'tabs_primary:')

        primary_lines.append(line)
        
        try:
            line = next(iterator)
        except StopIteration:
            break
except StopIteration:
    pass

# Construct the new file content
new_content = "".join(primary_lines)

# Append tabs_secondary
# We need to ensure we append it at the right indentation level (4 spaces)
# and matching the 'tabs' structure.

secondary_header = """
    tabs_secondary:
      type: tabs
      active: 1

      fields:
"""

new_content += secondary_header
new_content += "".join(secondary_content)

with open(file_path, 'w') as f:
    f.write(new_content)

print("Refactoring complete.")
