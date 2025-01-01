<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class PatternPropertiesTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "patternProperties": {
            "name": {
                "id": "id"
            }
          }
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'id',
            actual: $JsonSchema4->patternProperties['name']->id,
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
            actual: $JsonSchema4->patternProperties,
        );
    }
}