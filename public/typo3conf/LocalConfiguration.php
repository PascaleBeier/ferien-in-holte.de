<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=16384,t=16,p=2$MGtTWlpLRWFFbHJCQWpSeA$ochsH9PVvio37NT9BgTDcn1Gfiduu3H0uBgAcNaASC4',
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:14:"backendFavicon";s:0:"";s:11:"backendLogo";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:19:"loginHighlightColor";s:0:"";s:9:"loginLogo";s:0:"";}',
            'bootstrap_package' => 'a:8:{s:20:"disableCssProcessing";s:1:"0";s:17:"disableFontLoader";s:1:"0";s:24:"disableGoogleFontCaching";s:1:"0";s:27:"disablePageTsBackendLayouts";s:1:"0";s:28:"disablePageTsContentElements";s:1:"0";s:16:"disablePageTsRTE";s:1:"0";s:20:"disablePageTsTCEFORM";s:1:"0";s:20:"disablePageTsTCEMAIN";s:1:"0";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"0";}',
            'staticfilecache' => 'a:22:{s:23:"clearCacheForAllDomains";s:1:"1";s:9:"boostMode";s:1:"0";s:18:"backendDisplayMode";s:7:"current";s:12:"debugHeaders";s:1:"0";s:20:"validHtaccessHeaders";s:45:"Content-Type,Content-Language,Link,X-SFC-Tags";s:20:"disableInDevelopment";s:1:"0";s:25:"renameTablesToOtherPrefix";s:1:"0";s:29:"useReverseUriLengthInPriority";s:1:"1";s:21:"useFallbackMiddleware";s:1:"1";s:14:"hashUriInCache";s:1:"0";s:25:"rawurldecodeCacheFileName";s:1:"0";s:20:"htaccessTemplateName";s:61:"EXT:staticfilecache/Resources/Private/Templates/Htaccess.html";s:22:"overrideCacheDirectory";s:0:"";s:23:"enableGeneratorManifest";s:1:"0";s:20:"enableGeneratorPlain";s:1:"0";s:19:"enableGeneratorGzip";s:1:"1";s:21:"enableGeneratorBrotli";s:1:"0";s:47:"sendCacheControlHeaderRedirectAfterCacheTimeout";s:1:"0";s:15:"cacheTagsEnable";s:1:"0";s:19:"sendHttp2PushEnable";s:1:"0";s:27:"sendHttp2PushFileExtensions";s:6:"css,js";s:22:"sendHttp2PushFileLimit";s:2:"10";}',
        ],
    ],
    'EXTCONF' => [
        'helhum-typo3-console' => [
            'initialUpgradeDone' => '9.5',
        ],
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'bootstrap_package' => [
            'disableCssProcessing' => '0',
            'disableFontLoader' => '0',
            'disableGoogleFontCaching' => '0',
            'disablePageTsBackendLayouts' => '0',
            'disablePageTsContentElements' => '0',
            'disablePageTsRTE' => '0',
            'disablePageTsTCEFORM' => '0',
            'disablePageTsTCEMAIN' => '0',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '0',
        ],
        'staticfilecache' => [
            'backendDisplayMode' => 'current',
            'boostMode' => '0',
            'cacheTagsEnable' => '0',
            'clearCacheForAllDomains' => '1',
            'debugHeaders' => '0',
            'disableInDevelopment' => '0',
            'enableGeneratorBrotli' => '0',
            'enableGeneratorGzip' => '1',
            'enableGeneratorManifest' => '0',
            'enableGeneratorPlain' => '0',
            'hashUriInCache' => '0',
            'htaccessTemplateName' => 'EXT:staticfilecache/Resources/Private/Templates/Htaccess.html',
            'overrideCacheDirectory' => '',
            'rawurldecodeCacheFileName' => '0',
            'renameTablesToOtherPrefix' => '0',
            'sendCacheControlHeaderRedirectAfterCacheTimeout' => '0',
            'sendHttp2PushEnable' => '0',
            'sendHttp2PushFileExtensions' => 'css,js',
            'sendHttp2PushFileLimit' => '10',
            'useFallbackMiddleware' => '1',
            'useReverseUriLengthInPriority' => '1',
            'validHtaccessHeaders' => 'Content-Type,Content-Language,Link,X-SFC-Tags',
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => 'd072a1a723eb2c7ee3dc69eab1fa362a2e4cadd95a6339a67fa97d1a3d3ca5fec004ca13055f36f2c193e0e9a017dac0',
        'exceptionalErrors' => 4096,
        'features' => [
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'Haus Marienmünster',
        'systemLogLevel' => 2,
        'systemMaintainers' => [
            1,
        ],
    ],
];
