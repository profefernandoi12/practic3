<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S6cVw0tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.S6cVw0t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.S6cVw0t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'persona' => ['privates', '.errored..service_locator.S6cVw0t.App\\Entity\\Persona', NULL, 'Cannot autowire service ".service_locator.S6cVw0t": it references class "App\\Entity\\Persona" but no such service exists.'],
            'personaRepository' => ['privates', 'App\\Repository\\PersonaRepository', 'getPersonaRepositoryService', true],
        ], [
            'persona' => 'App\\Entity\\Persona',
            'personaRepository' => 'App\\Repository\\PersonaRepository',
        ]);
    }
}
