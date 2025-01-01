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

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'id',
            actual: $JsonSchema4->dependencies['name']['id'],
        );
    }

    #[Test] public function array(): void
    {
        $json = <<<JSON
        {
          "dependencies": {"id": "id", "foo": "bar"}
        }
        JSON;

        $JsonSchema4 = JsonSchema4::from(json_decode($json, true));

        self::assertEquals(
            expected: 'id',
            actual: $JsonSchema4->dependencies['id'],
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
            actual: $JsonSchema4->dependencies,
        );
    }
}