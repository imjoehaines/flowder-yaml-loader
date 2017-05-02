# Flowder YAML Loader [![Latest Stable Version](https://poser.pugx.org/imjoehaines/flowder-yaml-loader/v/stable)](https://packagist.org/packages/imjoehaines/flowder-yaml-loader) [![Build Status](https://travis-ci.org/imjoehaines/flowder-yaml-loader.svg?branch=master)](https://travis-ci.org/imjoehaines/flowder-yaml-loader) [![codecov](https://codecov.io/gh/imjoehaines/flowder-yaml-loader/branch/master/graph/badge.svg)](https://codecov.io/gh/imjoehaines/flowder-yaml-loader)

A YAML file loader for [Flowder](https://github.com/imjoehaines/flowder)

## Usage

1. Install Flowder YAML Loader as a development dependency through [Composer](https://getcomposer.org/)

   ```sh
   $ composer install imjoehaines/flowder-yaml-loader --dev
   ```

2. Pass an instance of `Imjoehaines\FlowderYaml\YamlLoader` to Flowder, as detailed in the [Flowder readme](https://github.com/imjoehaines/flowder/blob/master/README.md#usage)

3. Pass the path to a YAML file to `Flowder::loadFixtures`, your YAML file should contain an array of arrays where each "inner" array is a database row. For example

```yaml
row_1:
    column_1: value 1
    column_2: 2
    column_3: three
row_2:
    column_1: value 4
    column_2: 5
    column_3: six
```

Any YAML array syntax supported by [Symfony's Yaml Component](http://symfony.com/doc/current/components/yaml.html), so all of the following examples will result in the exact same data as above

```yaml
-
    column_1: value 1
    column_2: 2
    column_3: three
-
    column_1: value 4
    column_2: 5
    column_3: six
```

```yaml
[
    {
        "column_1": "value 1",
        "column_2": 2,
        "column_3": "three"
    },
    {
        "column_1": "value 4",
        "column_2": 5,
        "column_3": "six"
    }
]
```
