Wordpress Packages
==================

Simple package delcarations to use themes, plugins, libraries and WordPress itself with [Composer]. This repo is just a sample for demonstrating WordPress integration with Compass, and will be useless when an oficial package repository for WordPress plugins and themes exists.


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


[Composer]: http://getcomposer.org/


