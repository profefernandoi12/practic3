<?php

namespace Container9zYj1Zb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P8WZAn5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P8WZAn5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P8WZAn5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tituloRepository' => ['privates', 'App\\Repository\\TituloRepository', 'getTituloRepositoryService', true],
        ], [
            'tituloRepository' => 'App\\Repository\\TituloRepository',
        ]);
    }
}
