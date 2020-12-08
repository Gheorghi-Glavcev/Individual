<?php

namespace ContainerMqht06L;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CtKV7gHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ctKV7gH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ctKV7gH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\StudentController::delete' => ['privates', '.service_locator.7Vnmxn3', 'get_ServiceLocator_7Vnmxn3Service', true],
            'App\\Controller\\StudentController::edit' => ['privates', '.service_locator.7Vnmxn3', 'get_ServiceLocator_7Vnmxn3Service', true],
            'App\\Controller\\StudentController::findAllByName' => ['privates', '.service_locator.DLn3oEX', 'get_ServiceLocator_DLn3oEXService', true],
            'App\\Controller\\StudentController::index' => ['privates', '.service_locator.DLn3oEX', 'get_ServiceLocator_DLn3oEXService', true],
            'App\\Controller\\StudentController::show' => ['privates', '.service_locator.7Vnmxn3', 'get_ServiceLocator_7Vnmxn3Service', true],
            'App\\Controller\\TeacherController::delete' => ['privates', '.service_locator.CrlMJDg', 'get_ServiceLocator_CrlMJDgService', true],
            'App\\Controller\\TeacherController::edit' => ['privates', '.service_locator.CrlMJDg', 'get_ServiceLocator_CrlMJDgService', true],
            'App\\Controller\\TeacherController::findAllByName' => ['privates', '.service_locator.5NcmIaY', 'get_ServiceLocator_5NcmIaYService', true],
            'App\\Controller\\TeacherController::index' => ['privates', '.service_locator.5NcmIaY', 'get_ServiceLocator_5NcmIaYService', true],
            'App\\Controller\\TeacherController::show' => ['privates', '.service_locator.CrlMJDg', 'get_ServiceLocator_CrlMJDgService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\StudentController:delete' => ['privates', '.service_locator.7Vnmxn3', 'get_ServiceLocator_7Vnmxn3Service', true],
            'App\\Controller\\StudentController:edit' => ['privates', '.service_locator.7Vnmxn3', 'get_ServiceLocator_7Vnmxn3Service', true],
            'App\\Controller\\StudentController:findAllByName' => ['privates', '.service_locator.DLn3oEX', 'get_ServiceLocator_DLn3oEXService', true],
            'App\\Controller\\StudentController:index' => ['privates', '.service_locator.DLn3oEX', 'get_ServiceLocator_DLn3oEXService', true],
            'App\\Controller\\StudentController:show' => ['privates', '.service_locator.7Vnmxn3', 'get_ServiceLocator_7Vnmxn3Service', true],
            'App\\Controller\\TeacherController:delete' => ['privates', '.service_locator.CrlMJDg', 'get_ServiceLocator_CrlMJDgService', true],
            'App\\Controller\\TeacherController:edit' => ['privates', '.service_locator.CrlMJDg', 'get_ServiceLocator_CrlMJDgService', true],
            'App\\Controller\\TeacherController:findAllByName' => ['privates', '.service_locator.5NcmIaY', 'get_ServiceLocator_5NcmIaYService', true],
            'App\\Controller\\TeacherController:index' => ['privates', '.service_locator.5NcmIaY', 'get_ServiceLocator_5NcmIaYService', true],
            'App\\Controller\\TeacherController:show' => ['privates', '.service_locator.CrlMJDg', 'get_ServiceLocator_CrlMJDgService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\StudentController::delete' => '?',
            'App\\Controller\\StudentController::edit' => '?',
            'App\\Controller\\StudentController::findAllByName' => '?',
            'App\\Controller\\StudentController::index' => '?',
            'App\\Controller\\StudentController::show' => '?',
            'App\\Controller\\TeacherController::delete' => '?',
            'App\\Controller\\TeacherController::edit' => '?',
            'App\\Controller\\TeacherController::findAllByName' => '?',
            'App\\Controller\\TeacherController::index' => '?',
            'App\\Controller\\TeacherController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\StudentController:delete' => '?',
            'App\\Controller\\StudentController:edit' => '?',
            'App\\Controller\\StudentController:findAllByName' => '?',
            'App\\Controller\\StudentController:index' => '?',
            'App\\Controller\\StudentController:show' => '?',
            'App\\Controller\\TeacherController:delete' => '?',
            'App\\Controller\\TeacherController:edit' => '?',
            'App\\Controller\\TeacherController:findAllByName' => '?',
            'App\\Controller\\TeacherController:index' => '?',
            'App\\Controller\\TeacherController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
