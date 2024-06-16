<?php

namespace Container9zYj1Zb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\AlumnoType' => ['privates', 'App\\Form\\AlumnoType', 'getAlumnoTypeService', true],
            'App\\Form\\AsignaturaType' => ['privates', 'App\\Form\\AsignaturaType', 'getAsignaturaTypeService', true],
            'App\\Form\\BuscarType' => ['privates', 'App\\Form\\BuscarType', 'getBuscarTypeService', true],
            'App\\Form\\ComisionType' => ['privates', 'App\\Form\\ComisionType', 'getComisionTypeService', true],
            'App\\Form\\CorrelativaType' => ['privates', 'App\\Form\\CorrelativaType', 'getCorrelativaTypeService', true],
            'App\\Form\\CursadaDocenteType' => ['privates', 'App\\Form\\CursadaDocenteType', 'getCursadaDocenteTypeService', true],
            'App\\Form\\CursadaType' => ['privates', 'App\\Form\\CursadaType', 'getCursadaTypeService', true],
            'App\\Form\\DocenteType' => ['privates', 'App\\Form\\DocenteType', 'getDocenteTypeService', true],
            'App\\Form\\ExamenAlumnoType' => ['privates', 'App\\Form\\ExamenAlumnoType', 'getExamenAlumnoTypeService', true],
            'App\\Form\\ExamenFinalType' => ['privates', 'App\\Form\\ExamenFinalType', 'getExamenFinalTypeService', true],
            'App\\Form\\HabilitanteType' => ['privates', 'App\\Form\\HabilitanteType', 'getHabilitanteTypeService', true],
            'App\\Form\\InstitucionType' => ['privates', 'App\\Form\\InstitucionType', 'getInstitucionTypeService', true],
            'App\\Form\\InstitutoType' => ['privates', 'App\\Form\\InstitutoType', 'getInstitutoTypeService', true],
            'App\\Form\\LocalidadType' => ['privates', 'App\\Form\\LocalidadType', 'getLocalidadTypeService', true],
            'App\\Form\\ModalidadType' => ['privates', 'App\\Form\\ModalidadType', 'getModalidadTypeService', true],
            'App\\Form\\PaisType' => ['privates', 'App\\Form\\PaisType', 'getPaisTypeService', true],
            'App\\Form\\PersonaType' => ['privates', 'App\\Form\\PersonaType', 'getPersonaTypeService', true],
            'App\\Form\\ProvinciaType' => ['privates', 'App\\Form\\ProvinciaType', 'getProvinciaTypeService', true],
            'App\\Form\\RegionType' => ['privates', 'App\\Form\\RegionType', 'getRegionTypeService', true],
            'App\\Form\\RevistaType' => ['privates', 'App\\Form\\RevistaType', 'getRevistaTypeService', true],
            'App\\Form\\TecnicaturaType' => ['privates', 'App\\Form\\TecnicaturaType', 'getTecnicaturaTypeService', true],
            'App\\Form\\TelefonoType' => ['privates', 'App\\Form\\TelefonoType', 'getTelefonoTypeService', true],
            'App\\Form\\TituloType' => ['privates', 'App\\Form\\TituloType', 'getTituloTypeService', true],
            'App\\Form\\TurnoType' => ['privates', 'App\\Form\\TurnoType', 'getTurnoTypeService', true],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', '.container.private.form.type.file', 'get_Container_Private_Form_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\AlumnoType' => '?',
            'App\\Form\\AsignaturaType' => '?',
            'App\\Form\\BuscarType' => '?',
            'App\\Form\\ComisionType' => '?',
            'App\\Form\\CorrelativaType' => '?',
            'App\\Form\\CursadaDocenteType' => '?',
            'App\\Form\\CursadaType' => '?',
            'App\\Form\\DocenteType' => '?',
            'App\\Form\\ExamenAlumnoType' => '?',
            'App\\Form\\ExamenFinalType' => '?',
            'App\\Form\\HabilitanteType' => '?',
            'App\\Form\\InstitucionType' => '?',
            'App\\Form\\InstitutoType' => '?',
            'App\\Form\\LocalidadType' => '?',
            'App\\Form\\ModalidadType' => '?',
            'App\\Form\\PaisType' => '?',
            'App\\Form\\PersonaType' => '?',
            'App\\Form\\ProvinciaType' => '?',
            'App\\Form\\RegionType' => '?',
            'App\\Form\\RevistaType' => '?',
            'App\\Form\\TecnicaturaType' => '?',
            'App\\Form\\TelefonoType' => '?',
            'App\\Form\\TituloType' => '?',
            'App\\Form\\TurnoType' => '?',
            'App\\Form\\UserType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
