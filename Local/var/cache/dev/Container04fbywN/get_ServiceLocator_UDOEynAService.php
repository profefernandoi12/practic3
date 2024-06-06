<?php

namespace Container04fbywN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UDOEynAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uDOEynA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uDOEynA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'revistaRepository' => ['privates', 'App\\Repository\\RevistaRepository', 'getRevistaRepositoryService', true],
            'revistum' => ['privates', '.errored..service_locator.uDOEynA.App\\Entity\\Revista', NULL, 'Cannot autowire service ".service_locator.uDOEynA": it references class "App\\Entity\\Revista" but no such service exists.'],
        ], [
            'revistaRepository' => 'App\\Repository\\RevistaRepository',
            'revistum' => 'App\\Entity\\Revista',
        ]);
    }
}
