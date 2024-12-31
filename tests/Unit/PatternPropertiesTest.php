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

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'id',
            actual: $Info->patternProperties['name']->id,
        );
    }

    #[Test] public function null(): void
    {
        $json = <<<JSON
        {

        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: [],
            actual: $Info->patternProperties,
        );
    }
}