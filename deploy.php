<?php

namespace Deployer;

require_once(__DIR__ . '/vendor/sourcebroker/deployer-loader/autoload.php');
new \SourceBroker\DeployerExtendedTypo3\Loader();

set('repository', 'https://github.com/Haus-Marienmunster/Site.git');
set('web_path', 'public/');
set('composer_channel', 2);
set('shared_files', ['.env', get('web_path') . 'typo3conf/AdditionalConfiguration.php']);

host('live')
    ->hostname('ferien-in-holte.de')
    ->set('branch', 'main')
    ->set('public_urls', ['https:/ferien-in-holte.de/'])
    ->set('deploy_path', '/var/www/vhosts/ferien-in-holte.de/site')
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
