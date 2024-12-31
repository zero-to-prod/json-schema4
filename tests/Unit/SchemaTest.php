<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class SchemaTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "\$schema": "http://json-schema.org/schema#"
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'http://json-schema.org/schema#',
            actual: $Info->schema,
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
            actual: $Info->schema,
        );
    }
}