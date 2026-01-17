# Text Blueprint Documentation

## Identity
- **System Name**: `text`
- **Purpose**: Provide a simple rich‑text content block with optional heading and styling options.

## Behaviors
- Allows entering a heading and body content (Markdown).
- Supports optional background color and text alignment via blueprint fields.

## Blueprint Fields (YAML reference)
```yaml
title: Text
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
            header.text_heading:
              type: text
              label: Heading
            header.text_body:
              type: markdown
              label: Body Content
            header.text_align:
              type: select
              label: Text Alignment
              options:
                left: Left
                center: Center
                right: Right
            header.text_bg_color:
              type: colorpicker
              label: Background Color
```
