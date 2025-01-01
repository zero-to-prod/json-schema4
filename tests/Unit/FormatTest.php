<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class FormatTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "format": "format"
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'format',
            actual: $JsonSchema4->format,
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
            actual: $JsonSchema4->format,
        );
    }
}