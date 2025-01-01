<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class ItemsTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "items": {
              "id" :  1
            }
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertInstanceOf(
            expected: JsonSchema4::class,
            actual: $JsonSchema4->items,
        );

        self::assertEquals(
            expected: 1,
            actual: $JsonSchema4->items->id,
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
            actual: $JsonSchema4->items,
        );
    }
}