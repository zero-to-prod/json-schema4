<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class AnyOfTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "anyOf": [
            {"title": "title"}
          ]
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertInstanceOf(
            expected: JsonSchema4::class,
            actual: $JsonSchema4->anyOf[0],
        );

        self::assertEquals(
            expected: 'title',
            actual: $JsonSchema4->anyOf[0]->title,
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
            actual: $JsonSchema4->anyOf,
        );
    }
}