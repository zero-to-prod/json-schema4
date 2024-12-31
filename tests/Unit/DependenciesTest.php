<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;
use Zerotoprod\JsonSchema4\JsonSchema4;

class DependenciesTest extends TestCase
{
    #[Test] public function test(): void
    {
        $json = <<<JSON
        {
          "dependencies": {
            "name": {
                "id": "id"
            }
          }
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'id',
            actual: $Info->dependencies['name']['id'],
        );
    }

    #[Test] public function array(): void
    {
        $json = <<<JSON
        {
          "dependencies": {"id": "id", "foo": "bar"}
        }
        JSON;

        $Info = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'id',
            actual: $Info->dependencies['id'],
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
            actual: $Info->dependencies,
        );
    }
}