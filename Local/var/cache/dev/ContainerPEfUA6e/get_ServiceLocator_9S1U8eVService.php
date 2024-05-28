<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9S1U8eVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9S1U8eV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9S1U8eV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'habilitanteRepository' => ['privates', 'App\\Repository\\HabilitanteRepository', 'getHabilitanteRepositoryService', true],
        ], [
            'habilitanteRepository' => 'App\\Repository\\HabilitanteRepository',
        ]);
    }
}