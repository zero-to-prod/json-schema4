<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class PropertiesTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "properties": {
            "name": {
                "id": "id"
            }
          }
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'id',
            actual: $JsonSchema4->properties['name']->id,
        );
    }

    #[Test] public function null(): void
    {
        $json = <<<JSON
        {

        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: [],
            actual: $JsonSchema4->properties,
        );
    }
}