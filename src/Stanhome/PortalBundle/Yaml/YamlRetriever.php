<?php

namespace Stanhome\PortalBundle\Yaml;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Yaml\Yaml;

class YamlRetriever {
    private $kernelRootDir;

    public function __construct(Container $container) {
        $this->kernelRootDir = $container->getParameter('kernel.root_dir');
    }

    public function getValueFromApp($fileName, $path, $defaultValue = null) {
        $parametersFile = sprintf("%s/config/%s", $this->kernelRootDir, $fileName);
        $parsed = Yaml::parse(file_get_contents($parametersFile));
        $arrayPath = explode(".", $path);

        return $this->getRecursiveValueFromArray($parsed, $arrayPath, $defaultValue);
    }

    private function getRecursiveValueFromArray(array $array, array $arrayPath, $defaultValue) {
        if (empty($arrayPath) || !array_key_exists($arrayPath[0], $array))
            return $defaultValue;

        $key = array_shift($arrayPath);

        if (empty($arrayPath))
            return $array[$key];

        return $this->getRecursiveValueFromArray($array[$key], $arrayPath, $defaultValue);
    }
}