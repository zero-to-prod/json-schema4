<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class MaxPropertiesTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "maxProperties": 1
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 1,
            actual: $Info->maxProperties,
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
            expected: 0,
            actual: $Info->maxProperties,
        );
    }
}