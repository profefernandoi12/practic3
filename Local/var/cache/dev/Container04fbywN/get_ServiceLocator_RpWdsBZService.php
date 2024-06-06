<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RpWdsBZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RpWdsBZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RpWdsBZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'alumnoRepository' => ['privates', 'App\\Repository\\AlumnoRepository', 'getAlumnoRepositoryService', true],
        ], [
            'alumnoRepository' => 'App\\Repository\\AlumnoRepository',
        ]);
    }
}
