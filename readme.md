# Kirby Sortable Plus
Example on how to extend the [sortable](https://github.com/lukaskleinschmidt/kirby-sortable) field.

## Installation
To install the plugin, please put it in the `site/plugins` directory.  
The plugin folder must be named `sortable-plus`.

```
site/plugins/
    sortable-plus/
        sortable-plus.php
        ...
```

## Blueprint

After installing the plugin, you can use the new field type `sortableplus`.  
This blueprint shows all available options and their defaults.

```yml
fields:
  title:
    label: Title
    type: text

  elements:
    label: Elements
    type: sortableplus

    add: true
    copy: true
    paste: true
    limit: false

    actions:
      - edit
      - duplicate
      - delete
      - toggle

    # general entry options
    options:
      limit: false
      edit: true
      duplicate: true
      delete: true
      toggle: true

      # template specific entry options
      someblueprint:
        limit: false
        edit: true
        duplicate: true
        delete: true
        toggle: true
  ...
```
