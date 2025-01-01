<?php

namespace Zerotoprod\JsonSchema4;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\JsonSchema4\Helpers\DataModel;

/**
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
     */
    public const id = 'id';

    /**
     * This keyword must be set to an absolute URI or a relative reference as defined by RFC 398
     *
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.7.2
     * @see  https://www.rfc-editor.org/info/rfc3986
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
     */
    public const schema = 'schema';

    /**
     * The "$schema" keyword is both used as a JSON Schema version identifier and the
     * location of a resource which is itself a JSON Schema, which describes any
     * schema written for this particular version.
     *
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.6.1
     * @see  https://www.rfc-editor.org/info/rfc3986
     */
    #[Describe(['cast' => [self::class, 'schema']])]
    public ?string $schema;

    /**
     * The "$schema" keyword is both used as a JSON Schema version identifier and the
     * location of a resource which is itself a JSON Schema, which describes any
     * schema written for this particular version.
     *
     * @see  $schema
     * @see  https://www.rfc-editor.org/info/rfc3986
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.6.1
     */
    private static function schema($value, $context)
    {
        return $context['$schema'] ?? null;
    }

    /**
     * This keyword must be set to a string
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.6.1
     * @see  $title
     */
    public const title = 'title';

    /**
     * This keyword must be set to a string
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.6.1
     */
    public ?string $title = null;

    /**
     * This keyword must be set to a string
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.6.1
     * @see  $description
     */
    public const description = 'description';

    /**
     * This keyword must be set to a string
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.6.1
     */
    public ?string $description = null;

    /**
     * This keyword can contain any valid JSON value.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.7.3
     * @see  $default
     */
    public const default = 'default';

    /**
     * This keyword can contain any valid JSON value.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.7.3
     */
    #[Describe(['nullable'])]
    public mixed $default;

    /**
     * This keyword must be set to a positive number greater than 0.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.1
     * @see  $multipleOf
     */
    public const multipleOf = 'multipleOf';

    /**
     * This keyword must be set to a positive number greater than 0.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.1
     */
    public ?float $multipleOf = null;

    /**
     * This keyword must be set to a number.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.2
     * @see  $maximum
     */
    public const maximum = 'maximum';

    /**
     * This keyword must be set to a number.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.2
     */
    public ?float $maximum = null;

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     * @see  $exclusiveMaximum
     */
    public const exclusiveMaximum = 'exclusiveMaximum';

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     */
    public bool $exclusiveMaximum = false;

    /**
     * This keyword must be set to a number.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     * @see  $minimum
     */
    public const minimum = 'minimum';

    /**
     * This keyword must be set to a number.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     */
    public ?float $minimum = null;

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     * @see  $exclusiveMinimum
     */
    public const exclusiveMinimum = 'exclusiveMinimum';

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.1.3
     */
    public bool $exclusiveMinimum = false;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.1
     * @see  $maxLength
     */
    public const maxLength = 'maxLength';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.1
     */
    public ?int $maxLength = null;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.2
     * @see  $minLength
     */
    public const minLength = 'minLength';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.2
     */
    public int $minLength = 0;

    /**
     * This keyword must be set to a string that is a valid regular expression.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.3
     * @see  $pattern
     */
    public const pattern = 'pattern';

    /**
     * This keyword must be set to a string that is a valid regular expression.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.2.3
     */
    public ?string $pattern = null;

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.1
     * @see  $additionalItems
     */
    public const additionalItems = 'additionalItems';

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.1
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
     */
    public const items = 'items';

    /**
     * This keyword can be either a JSON Schema or an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.1
     */
    public mixed $items = [];

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.3
     * @see  $maxItems
     */
    public const maxItems = 'maxItems';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.3
     */
    public ?int $maxItems = null;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.3
     * @see  $minItems
     */
    public const minItems = 'minItems';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.3
     */
    public int $minItems = 0;

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.4
     * @see  $uniqueItems
     */
    public const uniqueItems = 'uniqueItems';

    /**
     * This keyword must be set to a boolean.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.3.4
     */
    public bool $uniqueItems = false;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.1
     * @see  $maxProperties
     */
    public const maxProperties = 'maxProperties';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.1
     */
    public ?int $maxProperties = null;

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.2
     * @see  $minProperties
     */
    public const minProperties = 'minProperties';

    /**
     * This keyword must be set to a non-negative integer.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.2
     */
    public int $minProperties = 0;

    /**
     * This keyword must be set to an array of unique strings.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.3
     * @see  $required
     */
    public const required = 'required';

    /**
     * This keyword must be set to an array of unique strings.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.3
     *
     * @var array<string> $required
     */
    public ?array $required = null;

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4.2
     * @see  $additionalProperties
     */
    public const additionalProperties = 'additionalProperties';

    /**
     * This keyword can be either a boolean or a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4.2
     */
    #[Describe(['cast' => [self::class, 'additionalProperties']])]
    public mixed $additionalProperties;

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
     * @see  $properties
     */
    public const definitions = 'definitions';

    /**
     * This keyword must be set to an object where each value is a valid JSON Schema
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4
     *
     * @var array<string, self> $definitions
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
     */
    public const properties = 'properties';

    /**
     * This keyword must be set to an object where each value is a valid JSON Schema
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4
     *
     * @var array<string, self> $properties
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
     */
    public const patternProperties = 'patternProperties';

    /**
     * This keyword must be set to an object where each value is a valid JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.4
     *
     * @var array<string, self> $patternProperties
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
     */
    public const dependencies = 'dependencies';

    /**
     * This keyword must be set to an object where each value can be either a JSON Schema or an array of strings.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.4.5
     *
     * @var array<string, mixed> $dependencies
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
     */
    public const enum = 'enum';

    /**
     * This keyword must be set to an array of JSON values, all of which must be unique.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.1
     */
    public ?array $enum = null;

    /**
     * This keyword must be set to either a string that corresponds to one of the supported types,
     * or a non-empty array of unique strings that correspond to one of the supported types
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.2
     * @see  $type
     */
    public const type = 'type';

    /**
     * This keyword must be set to either a string that corresponds to one of the supported types,
     * or a non-empty array of unique strings that correspond to one of the supported types
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.2
     * @var string[]|string $type
     */
    #[Describe(['cast' => [self::class, 'type']])]
    public string|array|null $type = null;

    private static function type($value, $context): string|array|null
    {
        if (!isset($context['type'])) {
            return null;
        }

        return is_array($value)
            ? array_map(static fn(string $enum) => $enum, $value)
            : $value;
    }

    /**
     * This keyword must be set to a string representing a format.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.7
     * @see  $format
     */
    public const format = 'format';

    /**
     * This keyword must be set to a string representing a format.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.7
     */
    public ?string $format = null;

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.3
     * @see $allOf
     */
    public const allOf = 'allOf';

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.3
     *
     * @var array<self> $allOf
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
     * @see $anyOf
     *
     * @var array<self> $anyOf
     */
    public const anyOf = 'anyOf';

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.4
     *
     * @var array<self> $anyOf
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
     * @see $oneOf
     *
     * @var array<self> $oneOf
     */
    public const oneOf = 'oneOf';

    /**
     * This keyword must be set to an array of JSON Schemas.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.5
     *
     * @var array<self> $oneOf
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
     * @see $not
     */
    public const not = 'not';

    /**
     * This keyword must be set to a JSON Schema.
     *
     * @link https://json-schema.org/draft-04/draft-fge-json-schema-validation-00#rfc.section.5.5.6
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
     */
    public const ref = 'ref';

    /**
     * This keyword must be set to an absolute URI or a relative reference as defined by
     * RFC 3986, where its fragment (if any) can consist of a JSON Pointer as defined by
     * RFC 6901
     *
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.7
     * @see  https://www.rfc-editor.org/info/rfc3986
     * @see  https://datatracker.ietf.org/doc/html/rfc6901
     */
    #[Describe(['cast' => [self::class, 'ref']])]
    public ?string $ref;

    /**
     * This keyword must be set to an absolute URI or a relative reference as defined by
     * RFC 3986, where its fragment (if any) can consist of a JSON Pointer as defined by
     * RFC 6901
     *
     * @link https://json-schema.org/draft-04/draft-zyp-json-schema-04#rfc.section.7
     * @see  $ref
     * @see  https://www.rfc-editor.org/info/rfc3986
     * @see  https://datatracker.ietf.org/doc/html/rfc6901
     */
    private static function ref($value, $context)
    {
        return $context['$ref'] ?? null;
    }

}