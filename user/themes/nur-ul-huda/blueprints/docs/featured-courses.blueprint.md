# Featured Courses Blueprint Documentation

## Identity
- **System Name**: `featured-courses`
- **Purpose**: Displays a grid of featured courses with images, titles, and brief descriptions.

## Behaviors
- Allows selection of multiple course items.
- Supports optional link to course detail pages.
- Configurable layout columns via blueprint fields.

## Blueprint Fields (YAML reference)
```yaml
title: Featured Courses
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
            header.featured_courses:
              type: list
              label: Courses
              fields:
                .title:
                  type: text
                  label: Title
                .image:
                  type: filepicker
                  folder: "self@"
                  label: Image
                  accept:
                    - image/*
                .description:
                  type: textarea
                  label: Description
                .link:
                  type: text
                  label: URL
```
