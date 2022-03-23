<?php

namespace Deployer;

require_once(__DIR__ . '/vendor/sourcebroker/deployer-loader/autoload.php');
new \SourceBroker\DeployerExtendedTypo3\Loader();

set('repository', 'git@gitlab.com:unica-design/hotel.typo3.git');
set('web_path', 'public/');
set('composer_channel', 2);

host('live')
    ->hostname('holte')
    ->set('http_user', 'holte')
    ->set('branch', 'main')
    ->set('public_urls', ['https://www.ferien-in-holte.de'])
    ->set('deploy_path', '/var/www/virtual/holte/site')
    ->set('ssh_type', 'native')
    ->set('db_databases', [
        'database_default' => [
            (new \SourceBroker\DeployerExtendedDatabase\Driver\EnvDriver())->getDatabaseConfig()
        ]
    ]);

host('local')
    ->hostname('local')
    ->set('deploy_path', getcwd())
    ->set('public_urls', ['https://ferien-in-holte.ddev.site'])
    ->set('db_databases', [
        'database_default' => [
            (new \SourceBroker\DeployerExtendedDatabase\Driver\EnvDriver())->getDatabaseConfig()
        ]
    ]);