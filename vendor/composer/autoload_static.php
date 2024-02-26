<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf49b9b6409ee9bb672fca9bc8ff92838
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '662a729f963d39afe703c9d9b7ab4a8c' => __DIR__ . '/..' . '/symfony/polyfill-php83/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php83\\' => 23,
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php83\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php83',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'App\\Controllers\\ProductController' => __DIR__ . '/../..' . '/app/Controllers/ProductController.php',
        'App\\Models\\Book' => __DIR__ . '/../..' . '/app/Models/Book.php',
        'App\\Models\\Disc' => __DIR__ . '/../..' . '/app/Models/Disc.php',
        'App\\Models\\Furniture' => __DIR__ . '/../..' . '/app/Models/Furniture.php',
        'App\\Models\\Product' => __DIR__ . '/../..' . '/app/Models/Product.php',
        'App\\Router' => __DIR__ . '/../..' . '/app/Router.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DateError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateError.php',
        'DateException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateException.php',
        'DateInvalidOperationException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateInvalidOperationException.php',
        'DateInvalidTimeZoneException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateInvalidTimeZoneException.php',
        'DateMalformedIntervalStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedIntervalStringException.php',
        'DateMalformedPeriodStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedPeriodStringException.php',
        'DateMalformedStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedStringException.php',
        'DateObjectError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateObjectError.php',
        'DateRangeError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateRangeError.php',
        'Override' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/Override.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'SQLite3Exception' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/SQLite3Exception.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeader' => __DIR__ . '/..' . '/symfony/http-foundation/AcceptHeader.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeaderItem' => __DIR__ . '/..' . '/symfony/http-foundation/AcceptHeaderItem.php',
        'Symfony\\Component\\HttpFoundation\\BinaryFileResponse' => __DIR__ . '/..' . '/symfony/http-foundation/BinaryFileResponse.php',
        'Symfony\\Component\\HttpFoundation\\ChainRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/ChainRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\Cookie' => __DIR__ . '/..' . '/symfony/http-foundation/Cookie.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\BadRequestException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/BadRequestException.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/ConflictingHeadersException.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\JsonException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/JsonException.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/RequestExceptionInterface.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\SessionNotFoundException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/SessionNotFoundException.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/SuspiciousOperationException.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/UnexpectedValueException.php',
        'Symfony\\Component\\HttpFoundation\\FileBag' => __DIR__ . '/..' . '/symfony/http-foundation/FileBag.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/AccessDeniedException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\CannotWriteFileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/CannotWriteFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\ExtensionFileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/ExtensionFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/FileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/FileNotFoundException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FormSizeFileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/FormSizeFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\IniSizeFileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/IniSizeFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\NoFileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/NoFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\NoTmpDirFileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/NoTmpDirFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\PartialFileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/PartialFileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UnexpectedTypeException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/UnexpectedTypeException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UploadException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/UploadException.php',
        'Symfony\\Component\\HttpFoundation\\File\\File' => __DIR__ . '/..' . '/symfony/http-foundation/File/File.php',
        'Symfony\\Component\\HttpFoundation\\File\\Stream' => __DIR__ . '/..' . '/symfony/http-foundation/File/Stream.php',
        'Symfony\\Component\\HttpFoundation\\File\\UploadedFile' => __DIR__ . '/..' . '/symfony/http-foundation/File/UploadedFile.php',
        'Symfony\\Component\\HttpFoundation\\HeaderBag' => __DIR__ . '/..' . '/symfony/http-foundation/HeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\HeaderUtils' => __DIR__ . '/..' . '/symfony/http-foundation/HeaderUtils.php',
        'Symfony\\Component\\HttpFoundation\\InputBag' => __DIR__ . '/..' . '/symfony/http-foundation/InputBag.php',
        'Symfony\\Component\\HttpFoundation\\IpUtils' => __DIR__ . '/..' . '/symfony/http-foundation/IpUtils.php',
        'Symfony\\Component\\HttpFoundation\\JsonResponse' => __DIR__ . '/..' . '/symfony/http-foundation/JsonResponse.php',
        'Symfony\\Component\\HttpFoundation\\ParameterBag' => __DIR__ . '/..' . '/symfony/http-foundation/ParameterBag.php',
        'Symfony\\Component\\HttpFoundation\\RateLimiter\\AbstractRequestRateLimiter' => __DIR__ . '/..' . '/symfony/http-foundation/RateLimiter/AbstractRequestRateLimiter.php',
        'Symfony\\Component\\HttpFoundation\\RateLimiter\\PeekableRequestRateLimiterInterface' => __DIR__ . '/..' . '/symfony/http-foundation/RateLimiter/PeekableRequestRateLimiterInterface.php',
        'Symfony\\Component\\HttpFoundation\\RateLimiter\\RequestRateLimiterInterface' => __DIR__ . '/..' . '/symfony/http-foundation/RateLimiter/RequestRateLimiterInterface.php',
        'Symfony\\Component\\HttpFoundation\\RedirectResponse' => __DIR__ . '/..' . '/symfony/http-foundation/RedirectResponse.php',
        'Symfony\\Component\\HttpFoundation\\Request' => __DIR__ . '/..' . '/symfony/http-foundation/Request.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcherInterface' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcherInterface.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher\\AttributesRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher/AttributesRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher\\ExpressionRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher/ExpressionRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher\\HostRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher/HostRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher\\IpsRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher/IpsRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher\\IsJsonRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher/IsJsonRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher\\MethodRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher/MethodRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher\\PathRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher/PathRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher\\PortRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher/PortRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher\\SchemeRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher/SchemeRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestStack' => __DIR__ . '/..' . '/symfony/http-foundation/RequestStack.php',
        'Symfony\\Component\\HttpFoundation\\Response' => __DIR__ . '/..' . '/symfony/http-foundation/Response.php',
        'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag' => __DIR__ . '/..' . '/symfony/http-foundation/ResponseHeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\ServerBag' => __DIR__ . '/..' . '/symfony/http-foundation/ServerBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/AttributeBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\FlashBagAwareSessionInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/FlashBagAwareSessionInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/FlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/FlashBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Session' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Session.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionBagProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionBagProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionFactory' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionFactory.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionFactoryInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionFactoryInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionUtils' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionUtils.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\IdentityMarshaller' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/IdentityMarshaller.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MarshallingSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MarshallingSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcachedSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MigratingSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MongoDbSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NullSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/PdoSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\RedisSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\SessionHandlerFactory' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/SessionHandlerFactory.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\StrictSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MetadataBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorageFactory' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MockFileSessionStorageFactory.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/NativeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorageFactory' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/NativeSessionStorageFactory.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorageFactory' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorageFactory.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageFactoryInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/SessionStorageFactoryInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/SessionStorageInterface.php',
        'Symfony\\Component\\HttpFoundation\\StreamedJsonResponse' => __DIR__ . '/..' . '/symfony/http-foundation/StreamedJsonResponse.php',
        'Symfony\\Component\\HttpFoundation\\StreamedResponse' => __DIR__ . '/..' . '/symfony/http-foundation/StreamedResponse.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\RequestAttributeValueSame' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/RequestAttributeValueSame.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseCookieValueSame' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseCookieValueSame.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseFormatSame' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseFormatSame.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasCookie' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseHasCookie.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHasHeader' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseHasHeader.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHeaderLocationSame' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseHeaderLocationSame.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseHeaderSame' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseHeaderSame.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsRedirected' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseIsRedirected.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsSuccessful' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseIsSuccessful.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseIsUnprocessable' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseIsUnprocessable.php',
        'Symfony\\Component\\HttpFoundation\\Test\\Constraint\\ResponseStatusCodeSame' => __DIR__ . '/..' . '/symfony/http-foundation/Test/Constraint/ResponseStatusCodeSame.php',
        'Symfony\\Component\\HttpFoundation\\UriSigner' => __DIR__ . '/..' . '/symfony/http-foundation/UriSigner.php',
        'Symfony\\Component\\HttpFoundation\\UrlHelper' => __DIR__ . '/..' . '/symfony/http-foundation/UrlHelper.php',
        'Symfony\\Component\\Routing\\Alias' => __DIR__ . '/..' . '/symfony/routing/Alias.php',
        'Symfony\\Component\\Routing\\Annotation\\Route' => __DIR__ . '/..' . '/symfony/routing/Annotation/Route.php',
        'Symfony\\Component\\Routing\\Attribute\\Route' => __DIR__ . '/..' . '/symfony/routing/Attribute/Route.php',
        'Symfony\\Component\\Routing\\CompiledRoute' => __DIR__ . '/..' . '/symfony/routing/CompiledRoute.php',
        'Symfony\\Component\\Routing\\DependencyInjection\\AddExpressionLanguageProvidersPass' => __DIR__ . '/..' . '/symfony/routing/DependencyInjection/AddExpressionLanguageProvidersPass.php',
        'Symfony\\Component\\Routing\\DependencyInjection\\RoutingResolverPass' => __DIR__ . '/..' . '/symfony/routing/DependencyInjection/RoutingResolverPass.php',
        'Symfony\\Component\\Routing\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/routing/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Routing\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/routing/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Routing\\Exception\\InvalidParameterException' => __DIR__ . '/..' . '/symfony/routing/Exception/InvalidParameterException.php',
        'Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException' => __DIR__ . '/..' . '/symfony/routing/Exception/MethodNotAllowedException.php',
        'Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException' => __DIR__ . '/..' . '/symfony/routing/Exception/MissingMandatoryParametersException.php',
        'Symfony\\Component\\Routing\\Exception\\NoConfigurationException' => __DIR__ . '/..' . '/symfony/routing/Exception/NoConfigurationException.php',
        'Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException' => __DIR__ . '/..' . '/symfony/routing/Exception/ResourceNotFoundException.php',
        'Symfony\\Component\\Routing\\Exception\\RouteCircularReferenceException' => __DIR__ . '/..' . '/symfony/routing/Exception/RouteCircularReferenceException.php',
        'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException' => __DIR__ . '/..' . '/symfony/routing/Exception/RouteNotFoundException.php',
        'Symfony\\Component\\Routing\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/routing/Exception/RuntimeException.php',
        'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator' => __DIR__ . '/..' . '/symfony/routing/Generator/CompiledUrlGenerator.php',
        'Symfony\\Component\\Routing\\Generator\\ConfigurableRequirementsInterface' => __DIR__ . '/..' . '/symfony/routing/Generator/ConfigurableRequirementsInterface.php',
        'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper' => __DIR__ . '/..' . '/symfony/routing/Generator/Dumper/CompiledUrlGeneratorDumper.php',
        'Symfony\\Component\\Routing\\Generator\\Dumper\\GeneratorDumper' => __DIR__ . '/..' . '/symfony/routing/Generator/Dumper/GeneratorDumper.php',
        'Symfony\\Component\\Routing\\Generator\\Dumper\\GeneratorDumperInterface' => __DIR__ . '/..' . '/symfony/routing/Generator/Dumper/GeneratorDumperInterface.php',
        'Symfony\\Component\\Routing\\Generator\\UrlGenerator' => __DIR__ . '/..' . '/symfony/routing/Generator/UrlGenerator.php',
        'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => __DIR__ . '/..' . '/symfony/routing/Generator/UrlGeneratorInterface.php',
        'Symfony\\Component\\Routing\\Loader\\AttributeClassLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/AttributeClassLoader.php',
        'Symfony\\Component\\Routing\\Loader\\AttributeDirectoryLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/AttributeDirectoryLoader.php',
        'Symfony\\Component\\Routing\\Loader\\AttributeFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/AttributeFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\ClosureLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/ClosureLoader.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\AliasConfigurator' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/AliasConfigurator.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\CollectionConfigurator' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/CollectionConfigurator.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\ImportConfigurator' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/ImportConfigurator.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\RouteConfigurator' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/RouteConfigurator.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/RoutingConfigurator.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\AddTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/AddTrait.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\HostTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/HostTrait.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\LocalizedRouteTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/LocalizedRouteTrait.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\PrefixTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/PrefixTrait.php',
        'Symfony\\Component\\Routing\\Loader\\Configurator\\Traits\\RouteTrait' => __DIR__ . '/..' . '/symfony/routing/Loader/Configurator/Traits/RouteTrait.php',
        'Symfony\\Component\\Routing\\Loader\\ContainerLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/ContainerLoader.php',
        'Symfony\\Component\\Routing\\Loader\\DirectoryLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/DirectoryLoader.php',
        'Symfony\\Component\\Routing\\Loader\\GlobFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/GlobFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\ObjectLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/ObjectLoader.php',
        'Symfony\\Component\\Routing\\Loader\\PhpFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/PhpFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\Psr4DirectoryLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/Psr4DirectoryLoader.php',
        'Symfony\\Component\\Routing\\Loader\\XmlFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/XmlFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\YamlFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/YamlFileLoader.php',
        'Symfony\\Component\\Routing\\Matcher\\CompiledUrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/CompiledUrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/CompiledUrlMatcherDumper.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherTrait' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/CompiledUrlMatcherTrait.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\MatcherDumper' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/MatcherDumper.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\MatcherDumperInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/MatcherDumperInterface.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\StaticPrefixCollection' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/StaticPrefixCollection.php',
        'Symfony\\Component\\Routing\\Matcher\\ExpressionLanguageProvider' => __DIR__ . '/..' . '/symfony/routing/Matcher/ExpressionLanguageProvider.php',
        'Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/RedirectableUrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/RedirectableUrlMatcherInterface.php',
        'Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/RequestMatcherInterface.php',
        'Symfony\\Component\\Routing\\Matcher\\TraceableUrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/TraceableUrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\UrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/UrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/UrlMatcherInterface.php',
        'Symfony\\Component\\Routing\\RequestContext' => __DIR__ . '/..' . '/symfony/routing/RequestContext.php',
        'Symfony\\Component\\Routing\\RequestContextAwareInterface' => __DIR__ . '/..' . '/symfony/routing/RequestContextAwareInterface.php',
        'Symfony\\Component\\Routing\\Requirement\\EnumRequirement' => __DIR__ . '/..' . '/symfony/routing/Requirement/EnumRequirement.php',
        'Symfony\\Component\\Routing\\Requirement\\Requirement' => __DIR__ . '/..' . '/symfony/routing/Requirement/Requirement.php',
        'Symfony\\Component\\Routing\\Route' => __DIR__ . '/..' . '/symfony/routing/Route.php',
        'Symfony\\Component\\Routing\\RouteCollection' => __DIR__ . '/..' . '/symfony/routing/RouteCollection.php',
        'Symfony\\Component\\Routing\\RouteCompiler' => __DIR__ . '/..' . '/symfony/routing/RouteCompiler.php',
        'Symfony\\Component\\Routing\\RouteCompilerInterface' => __DIR__ . '/..' . '/symfony/routing/RouteCompilerInterface.php',
        'Symfony\\Component\\Routing\\Router' => __DIR__ . '/..' . '/symfony/routing/Router.php',
        'Symfony\\Component\\Routing\\RouterInterface' => __DIR__ . '/..' . '/symfony/routing/RouterInterface.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'Symfony\\Polyfill\\Php83\\Php83' => __DIR__ . '/..' . '/symfony/polyfill-php83/Php83.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf49b9b6409ee9bb672fca9bc8ff92838::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf49b9b6409ee9bb672fca9bc8ff92838::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf49b9b6409ee9bb672fca9bc8ff92838::$classMap;

        }, null, ClassLoader::class);
    }
}
