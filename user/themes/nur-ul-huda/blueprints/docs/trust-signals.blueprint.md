# Trust Signals Blueprint Documentation

## Identity
- **System Name**: `trust-signals`
- **Purpose**: Display a set of trust or credibility icons/logos (e.g., partner logos, certifications) to build user confidence.

## Behaviors
- Allows adding multiple logo items with optional link URLs.
- Supports optional alt text for accessibility.
- Configurable layout (grid columns) via blueprint fields.

## Blueprint Fields (YAML reference)
```yaml
title: Trust Signals
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
            header.trust_items:
              type: list
              label: Trust Items
              fields:
                .logo:
                  type: filepicker
                  label: Logo Image
                  folder: "self@"
                  accept:
                    - image/*
                .url:
                  type: text
                  label: Link URL
                .alt:
                  type: text
                  label: Alt Text
```
