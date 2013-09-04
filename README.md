Wordpress Packages
==================

Simple package delcarations to use themes, plugins, libraries and WordPress itself with [Composer]. This repo is just a sample for demonstrating WordPress integration with Compass, and will be useless when an oficial package repository for WordPress plugins and themes exists.

[Composer]: http://getcomposer.org/

#### WPackagist.org

[wpackagist.org] is a composer repo that mirrors WordPress plugin repository, so it should be the prefered method for adding plugins.

[wpackagist.org]:http://wpackagist.org/

## How to use

First of all, you have to register this repo and wpackagist in `composer.json`

````json


    "repositories" : [
        {
            "type": "composer",
            "url" : "https://raw.github.com/cesarhdz/wordpress-packages/master/"
        },
        {
            "type":"composer",
            "url":"http://wpackagist.org"
        }
    ]

````

And then, in the require section add the package you want as follows


````json


    "require": {
        "php": ">=5.3",
        "wpackagist/wp-markdown" : "*"
    }

````

That's it, now you can run 

    $ composer install --prefer-dist

And you get the following files installed

    + vendor
        + composer
            + installers
            ...
            autoload.php
    + wp-content
        + plugins
            + wp-markdown


### Composer Installers


All packages require [composer/installers], so we get plugins installed in their right folder, adicionally you can change the folder using:

~~~~json

    "extra": {
        "installer-paths": {
            "your/custom/path/{$name}/": ["type:wordpress-plugin"]
        }
    }

~~~~

[composer/installers]: https://github.com/composer/installers




