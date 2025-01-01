<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class NotTest extends TestCase
{

    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "not": {"title": "title"}
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertInstanceOf(
            expected: JsonSchema4::class,
            actual: $JsonSchema4->not,
        );

        self::assertEquals(
            expected: 'title',
            actual: $JsonSchema4->not->title,
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
            actual: $JsonSchema4->not,
        );
    }
}