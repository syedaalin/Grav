# Services Blueprint Documentation

## Identity
- **System Name**: `services`
- **Purpose**: Present a collection of service offerings with icons, titles, descriptions, and optional links.

## Behaviors
- Allows ordering of service items.
- Supports optional icon selection for each service.
- Configurable layout via column count.

## Blueprint Fields (YAML reference)
```yaml
title: Services
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
            header.services:
              type: list
              label: Services
              fields:
                .icon:
                  type: select
                  label: Icon
                  options:
                    cog: Cog
                    star: Star
                    heart: Heart
                .title:
                  type: text
                  label: Title
                .description:
                  type: textarea
                  label: Description
                .link:
                  type: text
                  label: URL
```
