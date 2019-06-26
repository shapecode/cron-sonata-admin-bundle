<?php

namespace Shapecode\Bundle\CronAdminBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class ShapecodeCronSonataAdminExtension
 *
 * @package Shapecode\Bundle\CronAdminBundle\DependencyInjection
 * @author  Nikita Loges
 */
class ShapecodeCronSonataAdminExtension extends Extension
{

    /**
     * @inheritdoc
     */
    public function load(array $config, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('admin.yml');
    }
}
