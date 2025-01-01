<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class UniqueItemsTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "uniqueItems": true
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertTrue(
            condition: $JsonSchema4->uniqueItems,
        );
    }

    #[Test] public function null(): void
    {
        $json = <<<JSON
        {

        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertFalse(
            condition: $JsonSchema4->uniqueItems,
        );
    }
}