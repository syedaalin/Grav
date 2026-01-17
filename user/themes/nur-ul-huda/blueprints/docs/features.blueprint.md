# Features Blueprint Documentation

## Identity
- **System Name**: `features`
- **Purpose**: Show a set of feature blocks with icons, titles, and descriptions.

## Behaviors
- Allows ordering of feature items.
- Supports optional icon selection.
- Configurable layout via column count.

## Blueprint Fields (YAML reference)
```yaml
title: Features
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
            header.features:
              type: list
              label: Features
              fields:
                .icon:
                  type: select
                  label: Icon
                  options:
                    star: Star
                    heart: Heart
                    check: Check
                .title:
                  type: text
                  label: Title
                .description:
                  type: textarea
                  label: Description
```
