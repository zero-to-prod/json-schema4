<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class AdditionalPropertiesTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "additionalProperties": {
            "title": "title"
          }
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertInstanceOf(
            expected: JsonSchema4::class,
            actual: $JsonSchema4->additionalProperties,
        );

        self::assertEquals(
            expected: 'title',
            actual: $JsonSchema4->additionalProperties->title,
        );
    }

    #[Test] public function bool(): void
    {
        $json = <<<JSON
        {
          "additionalProperties": false
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertFalse(
            condition: $JsonSchema4->additionalProperties,
        );
    }

    #[Test] public function null(): void
    {
        $json = <<<JSON
        {

        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertNull(
            actual: $JsonSchema4->additionalProperties,
        );
    }
}