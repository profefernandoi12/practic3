<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UfjxPvaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ufjxPva' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ufjxPva'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'examenAlumno' => ['privates', '.errored..service_locator.ufjxPva.App\\Entity\\ExamenAlumno', NULL, 'Cannot autowire service ".service_locator.ufjxPva": it references class "App\\Entity\\ExamenAlumno" but no such service exists.'],
        ], [
            'examenAlumno' => 'App\\Entity\\ExamenAlumno',
        ]);
    }
}
