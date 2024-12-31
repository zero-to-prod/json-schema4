<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class OneOfTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "oneOf": [
            {"title": "title"}
          ]
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertInstanceOf(
            expected: JsonSchema4::class,
            actual: $Info->oneOf[0],
        );

        self::assertEquals(
            expected: 'title',
            actual: $Info->oneOf[0]->title,
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
            actual: $Info->oneOf,
        );
    }
}