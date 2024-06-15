<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JV5XtMlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jV5XtMl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jV5XtMl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'personaRepository' => ['privates', 'App\\Repository\\PersonaRepository', 'getPersonaRepositoryService', true],
        ], [
            'personaRepository' => 'App\\Repository\\PersonaRepository',
        ]);
    }
}