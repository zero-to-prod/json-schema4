<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class MultipleOfTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "multipleOf": 1
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 1,
            actual: $JsonSchema4->multipleOf,
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
            actual: $JsonSchema4->multipleOf,
        );
    }
}