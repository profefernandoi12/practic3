<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TomXXAEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tomXXAE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tomXXAE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'institucion' => ['privates', '.errored..service_locator.tomXXAE.App\\Entity\\Institucion', NULL, 'Cannot autowire service ".service_locator.tomXXAE": it references class "App\\Entity\\Institucion" but no such service exists.'],
            'institucionRepository' => ['privates', 'App\\Repository\\InstitucionRepository', 'getInstitucionRepositoryService', true],
        ], [
            'institucion' => 'App\\Entity\\Institucion',
            'institucionRepository' => 'App\\Repository\\InstitucionRepository',
        ]);
    }
}