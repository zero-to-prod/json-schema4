<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class IdTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "id": "http://json-schema.org/schema"
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'http://json-schema.org/schema',
            actual: $JsonSchema4->id,
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
            actual: $JsonSchema4->id,
        );
    }
}