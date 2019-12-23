<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8466cd401734fc5b7f8b413ae5a110bd
{
    public static $files = array (
        '979dffec6fa5205cabd2c2cd1e9e6b3a' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Psr7/functions.php',
        '6783aef8c489bbc166eee2536fe605d5' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/functions.php',
        '5a6c01c6b890a6f9e22f6a75f33535c3' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/matched_indices.php',
        'cb0217d87bec02191ba2d2597c16f1a7' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/pattern_alphabet.php',
        '07e8a1a5effbc28d6b452bec2948bb65' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/regex_search.php',
        'd28900056f66e13fa4e269caa8a4cd1c' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/score.php',
        '7679d68ce06dec48d343f560108145d2' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/search.php',
        'ae18f0d7f1399203de0fc444e860fdd9' => __DIR__ . '/..' . '/loilo/fuse/src/Helpers/deep_value.php',
        '59ff57762b50378bb54688b7561c609b' => __DIR__ . '/..' . '/loilo/fuse/src/Helpers/is_list.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
        'K' => 
        array (
            'Kirby\\Search\\' => 13,
            'Kirby\\' => 6,
        ),
        'F' => 
        array (
            'Fuse\\' => 5,
        ),
        'A' => 
        array (
            'Algolia\\AlgoliaSearch\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Kirby\\Search\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'Fuse\\' => 
        array (
            0 => __DIR__ . '/..' . '/loilo/fuse/src',
        ),
        'Algolia\\AlgoliaSearch\\' => 
        array (
            0 => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src',
        ),
    );

    public static $classMap = array (
        'Algolia\\AlgoliaSearch\\AccountClient' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/AccountClient.php',
        'Algolia\\AlgoliaSearch\\Algolia' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Algolia.php',
        'Algolia\\AlgoliaSearch\\AnalyticsClient' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/AnalyticsClient.php',
        'Algolia\\AlgoliaSearch\\Cache\\FileCacheDriver' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Cache/FileCacheDriver.php',
        'Algolia\\AlgoliaSearch\\Cache\\NullCacheDriver' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Cache/NullCacheDriver.php',
        'Algolia\\AlgoliaSearch\\Config\\AbstractConfig' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Config/AbstractConfig.php',
        'Algolia\\AlgoliaSearch\\Config\\AnalyticsConfig' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Config/AnalyticsConfig.php',
        'Algolia\\AlgoliaSearch\\Config\\InsightsConfig' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Config/InsightsConfig.php',
        'Algolia\\AlgoliaSearch\\Config\\PlacesConfig' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Config/PlacesConfig.php',
        'Algolia\\AlgoliaSearch\\Config\\SearchConfig' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Config/SearchConfig.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\AlgoliaException' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/AlgoliaException.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\BadRequestException' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/BadRequestException.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\CannotWaitException' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/CannotWaitException.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\MissingObjectId' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/MissingObjectId.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\NotFoundException' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/NotFoundException.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\ObjectNotFoundException' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/ObjectNotFoundException.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\RequestException' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/RequestException.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\RetriableException' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/RetriableException.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\UnreachableException' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/UnreachableException.php',
        'Algolia\\AlgoliaSearch\\Exceptions\\ValidUntilNotFoundException' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Exceptions/ValidUntilNotFoundException.php',
        'Algolia\\AlgoliaSearch\\Http\\Guzzle6HttpClient' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Guzzle6HttpClient.php',
        'Algolia\\AlgoliaSearch\\Http\\HttpClientInterface' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/HttpClientInterface.php',
        'Algolia\\AlgoliaSearch\\Http\\Php53HttpClient' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Php53HttpClient.php',
        'Algolia\\AlgoliaSearch\\Http\\Psr7\\BufferStream' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Psr7/BufferStream.php',
        'Algolia\\AlgoliaSearch\\Http\\Psr7\\PumpStream' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Psr7/PumpStream.php',
        'Algolia\\AlgoliaSearch\\Http\\Psr7\\Request' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Psr7/Request.php',
        'Algolia\\AlgoliaSearch\\Http\\Psr7\\Response' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Psr7/Response.php',
        'Algolia\\AlgoliaSearch\\Http\\Psr7\\Stream' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Psr7/Stream.php',
        'Algolia\\AlgoliaSearch\\Http\\Psr7\\Uri' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Psr7/Uri.php',
        'Algolia\\AlgoliaSearch\\Http\\Psr7\\UriResolver' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Http/Psr7/UriResolver.php',
        'Algolia\\AlgoliaSearch\\InsightsClient' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/InsightsClient.php',
        'Algolia\\AlgoliaSearch\\Insights\\UserInsightsClient' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Insights/UserInsightsClient.php',
        'Algolia\\AlgoliaSearch\\Iterators\\AbstractAlgoliaIterator' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Iterators/AbstractAlgoliaIterator.php',
        'Algolia\\AlgoliaSearch\\Iterators\\ObjectIterator' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Iterators/ObjectIterator.php',
        'Algolia\\AlgoliaSearch\\Iterators\\RuleIterator' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Iterators/RuleIterator.php',
        'Algolia\\AlgoliaSearch\\Iterators\\SynonymIterator' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Iterators/SynonymIterator.php',
        'Algolia\\AlgoliaSearch\\Log\\DebugLogger' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Log/DebugLogger.php',
        'Algolia\\AlgoliaSearch\\PlacesClient' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/PlacesClient.php',
        'Algolia\\AlgoliaSearch\\RequestOptions\\RequestOptions' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/RequestOptions/RequestOptions.php',
        'Algolia\\AlgoliaSearch\\RequestOptions\\RequestOptionsFactory' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/RequestOptions/RequestOptionsFactory.php',
        'Algolia\\AlgoliaSearch\\Response\\AbstractResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/AbstractResponse.php',
        'Algolia\\AlgoliaSearch\\Response\\AddApiKeyResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/AddApiKeyResponse.php',
        'Algolia\\AlgoliaSearch\\Response\\BatchIndexingResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/BatchIndexingResponse.php',
        'Algolia\\AlgoliaSearch\\Response\\DeleteApiKeyResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/DeleteApiKeyResponse.php',
        'Algolia\\AlgoliaSearch\\Response\\IndexingResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/IndexingResponse.php',
        'Algolia\\AlgoliaSearch\\Response\\MultiResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/MultiResponse.php',
        'Algolia\\AlgoliaSearch\\Response\\MultipleIndexBatchIndexingResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/MultipleIndexBatchIndexingResponse.php',
        'Algolia\\AlgoliaSearch\\Response\\NullResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/NullResponse.php',
        'Algolia\\AlgoliaSearch\\Response\\RestoreApiKeyResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/RestoreApiKeyResponse.php',
        'Algolia\\AlgoliaSearch\\Response\\UpdateApiKeyResponse' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Response/UpdateApiKeyResponse.php',
        'Algolia\\AlgoliaSearch\\RetryStrategy\\ApiWrapper' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/RetryStrategy/ApiWrapper.php',
        'Algolia\\AlgoliaSearch\\RetryStrategy\\ApiWrapperInterface' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/RetryStrategy/ApiWrapperInterface.php',
        'Algolia\\AlgoliaSearch\\RetryStrategy\\ClusterHosts' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/RetryStrategy/ClusterHosts.php',
        'Algolia\\AlgoliaSearch\\RetryStrategy\\Host' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/RetryStrategy/Host.php',
        'Algolia\\AlgoliaSearch\\RetryStrategy\\HostCollection' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/RetryStrategy/HostCollection.php',
        'Algolia\\AlgoliaSearch\\SearchClient' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/SearchClient.php',
        'Algolia\\AlgoliaSearch\\SearchIndex' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/SearchIndex.php',
        'Algolia\\AlgoliaSearch\\Support\\Helpers' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Support/Helpers.php',
        'Algolia\\AlgoliaSearch\\Support\\UserAgent' => __DIR__ . '/..' . '/algolia/algoliasearch-client-php/src/Support/UserAgent.php',
        'Fuse\\Bitap\\Bitap' => __DIR__ . '/..' . '/loilo/fuse/src/Bitap/Bitap.php',
        'Fuse\\Fuse' => __DIR__ . '/..' . '/loilo/fuse/src/Fuse.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'Kirby\\Search\\Index\\hasActions' => __DIR__ . '/../..' . '/src/models/Index/hasActions.php',
        'Kirby\\Search\\Index\\hasRules' => __DIR__ . '/../..' . '/src/models/Index/hasRules.php',
        'Kirby\\Search\\Index\\hasSchema' => __DIR__ . '/../..' . '/src/models/Index/hasSchema.php',
        'Kirby\\Search\\Provider' => __DIR__ . '/../..' . '/src/models/Provider.php',
        'Kirby\\Search\\Providers\\Algolia' => __DIR__ . '/../..' . '/src/models/Providers/Algolia.php',
        'Kirby\\Search\\Providers\\Fuse' => __DIR__ . '/../..' . '/src/models/Providers/Fuse.php',
        'Kirby\\Search\\Results' => __DIR__ . '/../..' . '/src/models/Results.php',
        'Kirby\\Search\\Search' => __DIR__ . '/../..' . '/src/models/Search.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'Psr\\SimpleCache\\CacheException' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheException.php',
        'Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheInterface.php',
        'Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/simple-cache/src/InvalidArgumentException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8466cd401734fc5b7f8b413ae5a110bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8466cd401734fc5b7f8b413ae5a110bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8466cd401734fc5b7f8b413ae5a110bd::$classMap;

        }, null, ClassLoader::class);
    }
}
