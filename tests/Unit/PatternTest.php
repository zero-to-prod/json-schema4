<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class PatternTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "pattern": "pattern"
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'pattern',
            actual: $Info->pattern,
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
            actual: $Info->pattern,
        );
    }
}