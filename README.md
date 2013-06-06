Wordpress Packages
==================

Simple package delcarations to use themes, plugins, libraries and WordPress itself with [Composer]. This repo is just a sample for demonstrating WordPress integration with Compass, and will be useless when an oficial package repository for WordPress plugins and themes exists.

[Composer]: http://getcomposer.org/


## How to use

First of all, you have to register this repo first in your `composer.json`

````json


    "repositories" : [
        {
            "type": "composer",
            "url" : "https://raw.github.com/cesarhdz/wordpress-packages/master/wp-plugins/"
        }
    ]

````

And then, in the require section add the package you want as follows


````json


    "require": {
        "php": ">=5.3",
        "wp-plugin/wp-markdown" : "*"
    }

````

The you can run `$ composer install|update` and you get the following files installed:

    + vendor
        + composer
            + installers
            ...
            autoload.php
    + wp-content
        + plugins
            + wp-markdown



Since all packages require [composer/installers], we get plugins installed in their right folder, adicionally you can change the folder using:

~~~~json

    "extra": {
        "installer-paths": {
            "your/custom/path/{$name}/": ["type:wordpress-plugin"]
        }
    }

~~~~

[composer/installers]: https://github.com/composer/installers




