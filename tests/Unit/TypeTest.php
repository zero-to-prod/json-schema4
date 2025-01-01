<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class TypeTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "type": "object"
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'object',
            actual: $JsonSchema4->type,
        );
    }

    #[Test] public function array(): void
    {
        $json = <<<JSON
        {
          "type": ["object"]
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'object',
            actual: $JsonSchema4->type[0],
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
            actual: $JsonSchema4->type,
        );
    }
}