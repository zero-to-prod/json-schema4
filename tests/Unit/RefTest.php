<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class RefTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "\$ref": "#/properties/foo"
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: '#/properties/foo',
            actual: $JsonSchema4->ref,
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
            actual: $JsonSchema4->ref,
        );
    }
}