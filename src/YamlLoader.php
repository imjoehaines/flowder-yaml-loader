<?php

namespace Imjoehaines\FlowderYaml;

use Symfony\Component\Yaml\Yaml;
use Imjoehaines\Flowder\Loader\LoaderInterface;

final class YamlLoader implements LoaderInterface
{
    /**
     * Loads the given Yaml file
     *
     * @param string $file
     * @return iterable
     */
    public function load($file)
    {
        $table = pathinfo($file, PATHINFO_FILENAME);

        $yaml = file_get_contents($file);

        $data = Yaml::parse($yaml);

        yield $table => array_values($data);
    }
}
