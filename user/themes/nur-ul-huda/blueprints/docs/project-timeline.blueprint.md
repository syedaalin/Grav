# Project Timeline Blueprint Documentation

## Identity
- **System Name**: `project-timeline`
- **Purpose**: Display a chronological timeline of project milestones or events with optional icons and descriptions.

## Behaviors
- Allows ordering of timeline items.
- Supports optional date, title, description, and icon per item.
- Configurable layout (vertical or horizontal) via blueprint fields.

## Blueprint Fields (YAML reference)
```yaml
title: Project Timeline
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
            header.timeline_items:
              type: list
              label: Timeline Items
              fields:
                .date:
                  type: date
                  label: Date
                .title:
                  type: text
                  label: Title
                .description:
                  type: textarea
                  label: Description
                .icon:
                  type: select
                  label: Icon
                  options:
                    star: Star
                    flag: Flag
                    check: Check
```
