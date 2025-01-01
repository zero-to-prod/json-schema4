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

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertInstanceOf(
            expected: JsonSchema4::class,
            actual: $JsonSchema4->additionalItems,
        );

        self::assertEquals(
            expected: 'title',
            actual: $JsonSchema4->additionalItems->title,
        );
    }

    #[Test] public function bool(): void
    {
        $json = <<<JSON
        {
          "additionalItems": false
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertFalse(
            condition: $JsonSchema4->additionalItems,
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
            actual: $JsonSchema4->additionalItems,
        );
    }
}