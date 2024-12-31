<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class AdditionalItemsTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "additionalItems": {
            "title": "title"
          }
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertInstanceOf(
            expected: JsonSchema4::class,
            actual: $Info->additionalItems,
        );

        self::assertEquals(
            expected: 'title',
            actual: $Info->additionalItems->title,
        );
    }

    #[Test] public function bool(): void
    {
        $json = <<<JSON
        {
          "additionalItems": false
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertFalse(
            condition: $Info->additionalItems,
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
            actual: $Info->additionalItems,
        );
    }
}