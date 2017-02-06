<?php

namespace DomiGestion\PortalBundle\Yaml;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Yaml\Yaml;

/**
 * Class YamlRetriever
 * @package DomiGestion\PortalBundle\Yaml
 */
class YamlRetriever
{
    private $kernelRootDir;

    /**
     * YamlRetriever constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->kernelRootDir = $container->getParameter('kernel.root_dir');
    }

    /**
     * @param $fileName
     * @param $path
     * @param null $defaultValue
     * @return mixed
     */
    public function getValueFromApp($fileName, $path, $defaultValue = null)
    {
        $parametersFile = sprintf("%s/config/%s", $this->kernelRootDir, $fileName);
        $parsed = Yaml::parse(file_get_contents($parametersFile));
        $arrayPath = explode(".", $path);

        return $this->getRecursiveValueFromArray($parsed, $arrayPath, $defaultValue);
    }

    /**
     * @param array $array
     * @param array $arrayPath
     * @param $defaultValue
     * @return mixed
     */
    private function getRecursiveValueFromArray(array $array, array $arrayPath, $defaultValue)
    {
        if (empty($arrayPath) || !array_key_exists($arrayPath[0], $array))
            return $defaultValue;

        $key = array_shift($arrayPath);

        if (empty($arrayPath))
            return $array[$key];

        return $this->getRecursiveValueFromArray($array[$key], $arrayPath, $defaultValue);
    }
}
