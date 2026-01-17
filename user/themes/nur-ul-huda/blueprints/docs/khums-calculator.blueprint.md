# Khums Calculator Blueprint Documentation

## Identity
- **System Name**: `khums-calculator`
- **Purpose**: Provide an interactive calculator for Islamic Khums (one‑quarter of surplus wealth) with user inputs and result display.

## Behaviors
- Accepts numeric input for surplus amount.
- Calculates 25% of the input and displays the result.
- Optional explanatory text and links to further resources.

## Blueprint Fields (YAML reference)
```yaml
title: Khums Calculator
@extends:
  type: default
  context: blueprints://pages
form:
  fields:
    tabs:
      type: tabs
      active: 1
      fields:
        content:
          type: tab
          title: Content
          fields:
            header.khums_input_label:
              type: text
              label: Input Label
              default: "Surplus Amount"
            header.khums_button_label:
              type: text
              label: Button Label
              default: "Calculate"
            header.khums_explanation:
              type: markdown
              label: Explanation
              help: Optional explanatory text displayed below the calculator.
```
