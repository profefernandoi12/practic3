<?php

namespace Container9zYj1Zb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4XvCDTUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4XvCDTU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4XvCDTU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'provinciaRepository' => ['privates', 'App\\Repository\\ProvinciaRepository', 'getProvinciaRepositoryService', true],
            'provincium' => ['privates', '.errored..service_locator.4XvCDTU.App\\Entity\\Provincia', NULL, 'Cannot autowire service ".service_locator.4XvCDTU": it references class "App\\Entity\\Provincia" but no such service exists.'],
        ], [
            'provinciaRepository' => 'App\\Repository\\ProvinciaRepository',
            'provincium' => 'App\\Entity\\Provincia',
        ]);
    }
}
