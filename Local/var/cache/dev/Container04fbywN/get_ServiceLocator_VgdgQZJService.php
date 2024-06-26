<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VgdgQZJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vgdgQZJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vgdgQZJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'region' => ['privates', '.errored..service_locator.vgdgQZJ.App\\Entity\\Region', NULL, 'Cannot autowire service ".service_locator.vgdgQZJ": it references class "App\\Entity\\Region" but no such service exists.'],
            'regionRepository' => ['privates', 'App\\Repository\\RegionRepository', 'getRegionRepositoryService', true],
        ], [
            'region' => 'App\\Entity\\Region',
            'regionRepository' => 'App\\Repository\\RegionRepository',
        ]);
    }
}
