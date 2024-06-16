<?php

namespace Container9zYj1Zb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LF4OuHNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LF4OuHN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LF4OuHN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'instituto' => ['privates', '.errored..service_locator.LF4OuHN.App\\Entity\\Instituto', NULL, 'Cannot autowire service ".service_locator.LF4OuHN": it references class "App\\Entity\\Instituto" but no such service exists.'],
            'institutoRepository' => ['privates', 'App\\Repository\\InstitutoRepository', 'getInstitutoRepositoryService', true],
        ], [
            'instituto' => 'App\\Entity\\Instituto',
            'institutoRepository' => 'App\\Repository\\InstitutoRepository',
        ]);
    }
}
