<?php

namespace Imjoehaines\FlowderYaml\Test\Integration;

use PHPUnit\Framework\TestCase;
use Imjoehaines\FlowderYaml\YamlLoader;

final class YamlLoaderTest extends TestCase
{
    public function testItReturnsParsedYamlFromTheGivenFilePath()
    {
        $loader = new YamlLoader();
        $data = $loader->load(__DIR__ . '/../data/one.yml');

        $actual = iterator_to_array($data);
        $expected = [
            'one' => [
                [
                    'column_1' => 'value 1',
                    'column_2' => 2,
                    'column_3' => 'three',
                ],
                [
                    'column_1' => 'value 4',
                    'column_2' => 5,
                    'column_3' => 'six',
                ]
            ],
        ];

        $this->assertSame($expected, $actual);
    }
}
