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

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertInstanceOf(
            expected: JsonSchema4::class,
            actual: $Info->additionalProperties,
        );

        self::assertEquals(
            expected: 'title',
            actual: $Info->additionalProperties->title,
        );
    }

    #[Test] public function bool(): void
    {
        $json = <<<JSON
        {
          "additionalProperties": false
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertFalse(
            condition: $Info->additionalProperties,
        );
    }

    #[Test] public function null(): void
    {
        $json = <<<JSON
        {

        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertNull(
            actual: $Info->additionalProperties,
        );
    }
}