<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class ExclusiveMaximumTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "exclusiveMaximum": true
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertTrue(
            condition: $JsonSchema4->exclusiveMaximum,
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
            condition: $JsonSchema4->exclusiveMaximum,
        );
    }
}