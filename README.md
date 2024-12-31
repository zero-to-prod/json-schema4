# Zerotoprod\JsonSchema4

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/json-schema4)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/json-schema4/test.yml?label=tests)](https://github.com/zero-to-prod/json-schema4/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/json-schema4?color=blue)](https://packagist.org/packages/zero-to-prod/json-schema4/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/json-schema4?color=f28d1a)](https://packagist.org/packages/zero-to-prod/json-schema4)
[![License](https://img.shields.io/packagist/l/zero-to-prod/json-schema4?color=red)](https://github.com/zero-to-prod/json-schema4/blob/main/LICENSE.md)

A DataModel for the Json Schema Draft 4 Specification

## Usage

```php
use Zerotoprod\JsonSchema4\JsonSchema4;

$JsonSchema4 = JsonSchema4::from(json_decode($json, true));

$JsonSchema4->schema;
```

## Testing

```shell
./vendor/bin/phpunit
```