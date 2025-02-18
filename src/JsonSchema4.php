<?php

namespace Zerotoprod\JsonSchema4;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\JsonSchema4\Helpers\DataModel;

/**
 * A DataModel for the Json Schema Draft 4 Specification
 *
 * JSON Schema defines the media type "application/schema+json",
 * a JSON based format for defining the structure of JSON data.
 * JSON Schema provides a contract for what JSON data is
 * required for a given application and how to interact
 * with it.
 *
 * JSON Schema is intended to define validation, documentation,
 * hyperlink navigation, and interaction control of JSON data.
 *
 * @link https://json-schema.org/specification-links#draft-4
 * @link https://github.com/zero-to-prod/json-schema4
 */
class JsonSchema4
{
    use DataModel;

    /**
     * This keyword must be set to an absolute URI or a relative reference as defined by RFC 3986
     *
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.7.2
     * @see  $id
     * @see  https://www.rfc-editor.org/info/rfc3986
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const id = 'id';

    /**
     * This keyword must be set to an absolute URI or a relative reference as defined by RFC 398
     *
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.7.2
     * @see  https://www.rfc-editor.org/info/rfc3986
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?string $id = null;

    /**
     * The "$schema" keyword is both used as a JSON Schema version identifier and the
     * location of a resource which is itself a JSON Schema, which describes any
     * schema written for this particular version.
     *
     * @see  $schema
     * @see  https://www.rfc-editor.org/info/rfc3986
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.6.1
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const schema = 'schema';

    /**
     * The "$schema" keyword is both used as a JSON Schema version identifier and the
     * location of a resource which is itself a JSON Schema, which describes any
     * schema written for this particular version.
     *
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.6.1
     * @see  https://www.rfc-editor.org/info/rfc3986
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe(['from' => '$schema'])]
    public ?string $schema = null;

    /**
     * This keyword must be set to a string
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.6.1
     * @see  $title
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const title = 'title';

    /**
     * This keyword must be set to a string
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.6.1
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?string $title = null;

    /**
     * This keyword must be set to a string
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.6.1
     * @see  $description
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const description = 'description';

    /**
     * This keyword must be set to a string
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.6.1
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?string $description = null;

    /**
     * This keyword can contain any valid JSON value.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.7.3
     * @see  $default
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const default = 'default';

    /**
     * This keyword can contain any valid JSON value.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.7.3
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public mixed $default = null;

    /**
     * This keyword must be set to a positive number greater than 0.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.1
     * @see  $multipleOf
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const multipleOf = 'multipleOf';

    /**
     * This keyword must be set to a positive number greater than 0.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.1
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?float $multipleOf = null;

    /**
     * This keyword must be set to a number.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.2
     * @see  $maximum
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const maximum = 'maximum';

    /**
     * This keyword must be set to a number.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.2
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?float $maximum = null;

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     * @see  $exclusiveMaximum
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const exclusiveMaximum = 'exclusiveMaximum';

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public bool $exclusiveMaximum = false;

    /**
     * This keyword must be set to a number.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     * @see  $minimum
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const minimum = 'minimum';

    /**
     * This keyword must be set to a number.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?float $minimum = null;

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     * @see  $exclusiveMinimum
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const exclusiveMinimum = 'exclusiveMinimum';

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public bool $exclusiveMinimum = false;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.1
     * @see  $maxLength
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const maxLength = 'maxLength';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.1
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?int $maxLength = null;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.2
     * @see  $minLength
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const minLength = 'minLength';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.2
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public int $minLength = 0;

    /**
     * This keyword must be set to a string that is a valid regular expression.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.3
     * @see  $pattern
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const pattern = 'pattern';

    /**
     * This keyword must be set to a string that is a valid regular expression.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.3
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?string $pattern = null;

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.1
     * @see  $additionalItems
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const additionalItems = 'additionalItems';

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.1
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe(['cast' => [self::class, 'additionalItems']])]
    public bool|self|null $additionalItems = null;

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.1
     * @see  $additionalItems
     */
    private static function additionalItems($value, $context): bool|self|null
    {
        if (!isset($context['additionalItems'])) {
            return null;
        }

        return is_bool($value) ? $value : self::from($value);
    }

    /**
     * This keyword can be either a JSON Schema or an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.2
     * @see  $items
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const items = 'items';

    /**
     * This keyword can be either a JSON Schema or an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.1
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public null|self $items = null;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.3
     * @see  $maxItems
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const maxItems = 'maxItems';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.3
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?int $maxItems = null;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.3
     * @see  $minItems
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const minItems = 'minItems';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.3
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public int $minItems = 0;

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.4
     * @see  $uniqueItems
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const uniqueItems = 'uniqueItems';

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.4
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public bool $uniqueItems = false;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.1
     * @see  $maxProperties
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const maxProperties = 'maxProperties';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.1
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?int $maxProperties = null;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.2
     * @see  $minProperties
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const minProperties = 'minProperties';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.2
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public int $minProperties = 0;

    /**
     * This keyword must be set to an array of unique strings.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.3
     * @see  $required
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const required = 'required';

    /**
     * This keyword must be set to an array of unique strings.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.3
     *
     * @var string[] $required
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?array $required = null;

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4.2
     * @see  $additionalProperties
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const additionalProperties = 'additionalProperties';

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4.2
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe(['cast' => [self::class, 'additionalProperties']])]
    public bool|self|null $additionalProperties;

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4.2
     * @see  $additionalProperties
     */
    private static function additionalProperties($value, $context): bool|self|null
    {
        if (!isset($context['additionalProperties'])) {
            return null;
        }

        return is_bool($value) ? $value : self::from($value);
    }

    /**
     * This keyword must be set to an object where each value is a valid JSON Schema
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4
     * @see  $definitions
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const definitions = 'definitions';

    /**
     * This keyword must be set to an object where each value is a valid JSON Schema
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4
     *
     * @var array<string, self> $definitions
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe([
        'cast' => [self::class, 'mapOf'],
        'type' => self::class,
    ])]
    public array $definitions = [];

    /**
     * This keyword must be set to an object where each value is a valid JSON Schema
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4
     * @see  $properties
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const properties = 'properties';

    /**
     * This keyword must be set to an object where each value is a valid JSON Schema
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4
     *
     * @var array<string, self> $properties
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe([
        'cast' => [self::class, 'mapOf'],
        'type' => self::class,
    ])]
    public array $properties = [];

    /**
     * This keyword must be set to an object where each value is a valid JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4
     * @see  $patternProperties
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const patternProperties = 'patternProperties';

    /**
     * This keyword must be set to an object where each value is a valid JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4
     *
     * @var array<string, self> $patternProperties
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe([
        'cast' => [self::class, 'mapOf'],
        'type' => self::class,
    ])]
    public array $patternProperties = [];

    /**
     * This keyword must be set to an object where each value can be either a JSON Schema or an array of strings.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.5
     * @see  $dependencies
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const dependencies = 'dependencies';

    /**
     * This keyword must be set to an object where each value can be either a JSON Schema or an array of strings.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.5
     *
     * @var array<string, mixed> $dependencies
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe(['cast' => [self::class, 'dependencies']])]
    public null|array $dependencies = null;

    /**
     * This keyword must be set to an object where each value can be either a JSON Schema or an array of strings.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.6
     * @see  $dependencies
     */
    private static function dependencies($value, $context): null|array
    {
        return isset($context['dependencies'])
            ? $value
            : null;
    }

    /**
     * This keyword must be set to an array of JSON values, all of which must be unique.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.1
     * @see  $enum
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const enum = 'enum';

    /**
     * This keyword must be set to an array of JSON values, all of which must be unique.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.1
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?array $enum = null;

    /**
     * This keyword must be set to either a string that corresponds to one of the supported types,
     * or a non-empty array of unique strings that correspond to one of the supported types
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.2
     * @see  $type
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const type = 'type';

    /**
     * This keyword must be set to either a string that corresponds to one of the supported types,
     * or a non-empty array of unique strings that correspond to one of the supported types
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.2
     * @var string[]|string|null $type
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public string|array|null $type = null;

    /**
     * This keyword must be set to a string representing a format.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.7
     * @see  $format
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const format = 'format';

    /**
     * This keyword must be set to a string representing a format.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.7
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public ?string $format = null;

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.3
     * @see  $allOf
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const allOf = 'allOf';

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.3
     *
     * @var self[] $allOf
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe([
        'cast' => [self::class, 'mapOf'],
        'type' => self::class
    ])]
    public ?array $allOf = null;

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.4
     * @see  $anyOf
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const anyOf = 'anyOf';

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.4
     *
     * @var self[] $anyOf
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe([
        'cast' => [self::class, 'mapOf'],
        'type' => self::class,
    ])]
    public ?array $anyOf = null;

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.5
     * @see  $oneOf
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const oneOf = 'oneOf';

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.5
     *
     * @var self[] $oneOf
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe([
        'cast' => [self::class, 'mapOf'],
        'type' => self::class,
    ])]
    public ?array $oneOf = null;

    /**
     * This keyword must be set to a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.6
     * @see  $not
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const not = 'not';

    /**
     * This keyword must be set to a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.6
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public null|JsonSchema4 $not = null;

    /**
     * This keyword must be set to an absolute URI or a relative reference as defined by
     * RFC 3986, where its fragment (if any) can consist of a JSON Pointer as defined by
     * RFC 6901
     *
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.7
     * @see  $ref
     * @see  https://www.rfc-editor.org/info/rfc3986
     * @see  https://datatracker.ietf.org/doc/html/rfc6901
     * @link https://github.com/zero-to-prod/json-schema4
     */
    public const ref = '$ref';

    /**
     * This keyword must be set to an absolute URI or a relative reference as defined by
     * RFC 3986, where its fragment (if any) can consist of a JSON Pointer as defined by
     * RFC 6901
     *
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.7
     * @see  https://www.rfc-editor.org/info/rfc3986
     * @see  https://datatracker.ietf.org/doc/html/rfc6901
     * @link https://github.com/zero-to-prod/json-schema4
     */
    #[Describe(['from' => self::ref])]
    public ?string $ref = null;
}