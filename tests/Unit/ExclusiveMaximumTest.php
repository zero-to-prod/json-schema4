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

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertTrue(
            condition: $Info->exclusiveMaximum,
        );
    }

    #[Test] public function null(): void
    {
        $json = <<<JSON
        {

        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertFalse(
            condition: $Info->exclusiveMaximum,
        );
    }
}