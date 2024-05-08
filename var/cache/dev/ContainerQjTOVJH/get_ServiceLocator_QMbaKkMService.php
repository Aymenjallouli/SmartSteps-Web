<?php

namespace ContainerQjTOVJH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QMbaKkMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qMbaKkM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qMbaKkM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'uniteRepository' => ['privates', 'App\\Repository\\UniteRepository', 'getUniteRepositoryService', true],
        ], [
            'uniteRepository' => 'App\\Repository\\UniteRepository',
        ]);
    }
}
