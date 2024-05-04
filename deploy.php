<?php

namespace Deployer;

require_once(__DIR__ . '/vendor/sourcebroker/deployer-loader/autoload.php');
new \SourceBroker\DeployerExtendedTypo3\Loader();

set('repository', 'https://github.com/Haus-Marienmunster/Site.git');
set('web_path', 'public/');
set('composer_channel', 2);
set('bin/composer', '/composer.phar');

host('local')
    ->setHostname('local')
    ->set('deploy_path', getcwd())
    ->set('public_urls', ['https://ferien-in-holte.ddev.site'])
    ->set('db_databases', [
        'database_default' => [
            (new \SourceBroker\DeployerExtendedDatabase\Driver\EnvDriver())->getDatabaseConfig()
        ]
    ]);


//host('live')
//    ->setHostname('ferien-in-holte.de')
//    ->set('branch', 'main')
//    ->setRemoteUser('ferien-in-holte.de_h5gwmhj7o3f')
//    ->set('public_urls', ['https://ferien-in-holte.de/'])
//    ->set('deploy_path', '/var/www/vhosts/ferien-in-holte.de/site/')
//    ->set('db_databases', [
//        'database_default' => [
//            (new \SourceBroker\DeployerExtendedDatabase\Driver\EnvDriver())->getDatabaseConfig()
//        ]
//    ]);

host('live')
    ->setHostname('202.61.233.51')
    ->set('branch', 'main')
    ->setRemoteUser('hosting194366')
    ->set('http_user', 'hosting194366')
    ->set('writable_mode', 'chmod')
    ->set('public_urls', ['https://ferien-in-holte.de/'])
    ->set('deploy_path', '/ferien-in-holte.de')
    ->set('db_databases', [
        'database_default' => [
            (new \SourceBroker\DeployerExtendedDatabase\Driver\EnvDriver())->getDatabaseConfig()
        ]
    ]);

