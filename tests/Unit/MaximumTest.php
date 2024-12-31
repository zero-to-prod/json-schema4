<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class MaximumTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "maximum": 1.1
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 1.1,
            actual: $Info->maximum,
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
            actual: $Info->maximum,
        );
    }
}