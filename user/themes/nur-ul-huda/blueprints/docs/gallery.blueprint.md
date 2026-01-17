# Gallery Blueprint Documentation

## Identity
- **System Name**: `gallery`
- **Purpose**: Display an image/video gallery with optional lightbox functionality.

## Behaviors
- Supports a list of media items (images or videos).
- Allows setting captions and optional links.
- Configurable number of columns via blueprint fields.

## Blueprint Fields (YAML reference)
```yaml
title: Gallery
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
            header.gallery_items:
              type: list
              label: Gallery Items
              fields:
                .type:
                  type: select
                  label: Media Type
                  options:
                    image: Image
                    video: Video
                .file:
                  type: filepicker
                  label: File
                  folder: "self@"
                  accept:
                    - image/*
                    - video/*
                .caption:
                  type: text
                  label: Caption
                .link:
                  type: text
                  label: Optional URL
```
