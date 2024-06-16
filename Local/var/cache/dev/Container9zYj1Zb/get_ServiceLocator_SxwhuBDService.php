<?php

namespace Container9zYj1Zb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SxwhuBDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SxwhuBD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SxwhuBD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'localidad' => ['privates', '.errored..service_locator.SxwhuBD.App\\Entity\\Localidad', NULL, 'Cannot autowire service ".service_locator.SxwhuBD": it references class "App\\Entity\\Localidad" but no such service exists.'],
            'localidadRepository' => ['privates', 'App\\Repository\\LocalidadRepository', 'getLocalidadRepositoryService', true],
        ], [
            'localidad' => 'App\\Entity\\Localidad',
            'localidadRepository' => 'App\\Repository\\LocalidadRepository',
        ]);
    }
}
