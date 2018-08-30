Symfony Standard Edition
========================

**WARNING**: This distribution does not support Symfony 4. See the
[Installing & Setting up the Symfony Framework][15] page to find a replacement
that fits you best.

Welcome to the Symfony Standard Edition - a fully-functional Symfony
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.

What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev env) - Adds code generation
    capabilities

  * [**WebServerBundle**][14] (in dev env) - Adds commands for running applications
    using the PHP built-in web server

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  https://symfony.com/doc/3.4/setup.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.4/doctrine.html
[8]:  https://symfony.com/doc/3.4/templating.html
[9]:  https://symfony.com/doc/3.4/security.html
[10]: https://symfony.com/doc/3.4/email.html
[11]: https://symfony.com/doc/3.4/logging.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
[14]: https://symfony.com/doc/current/setup/built_in_web_server.html
[15]: https://symfony.com/doc/current/setup.html


The purpose of this project
--------------
Create a library for the episode of the black mirror series.
Based on API provided by Adneom and the php framework symfony 3 (not 4 - :-( )
Requierments : (https://quentinkb.github.io/#contact)

Setup
--------------
{
    "code": 200,
    "message": "Bravo, voici les informations nécessaires pour la suite du test.",
    "user": {
        "firstName": "Nicolas",
        "lastName": "Bruyère",
        "id": 137
    },
    "resources": {
        "subject": {
            "url": "https://quentinkb.github.io"
        },
        "api": {
            "url": "http://adneomapisubject.herokuapp.com",
            "path": "/blackmirror",
            "headers": [
                {
                    "key": "X-Auth-Token",
                    "value": "TokenADNTest2018"
                }
            ],
            "method": "GET"
        }
    }
}

Nice to have
--------------
Postman : https://www.getpostman.com/

First step for a local env if it's already an existing local project
--------------
git remote add origin git@github.com:catchatpas/blackmirror.git

setup your local php server
--------------
After the installation you can follow the next tutorial to launch a local server. To avoid any tedious Xamp installation
https://symfony.com/doc/3.4/setup/built_in_web_server.html

for boostrap
--------------
Prerequise: 
- Having brew already installed
use yarn add bootstrap --dev 
https://yarnpkg.com/en/docs/