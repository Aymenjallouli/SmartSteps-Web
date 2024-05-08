<?php

namespace ContainerQjTOVJH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BM1GbfyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BM1Gbfy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BM1Gbfy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cour' => ['privates', '.errored..service_locator.BM1Gbfy.App\\Entity\\Cour', NULL, 'Cannot autowire service ".service_locator.BM1Gbfy": it references class "App\\Entity\\Cour" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'cour' => 'App\\Entity\\Cour',
            'entityManager' => '?',
        ]);
    }
}
