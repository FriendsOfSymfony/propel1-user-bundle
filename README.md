FOSPropel1UserBundle
====================

The FOSPropel1UserBundle provides support for Propel 1.x in FOSUserBundle.

[![Build Status](https://travis-ci.org/FriendsOfSymfony/propel1-user-bundle.svg?branch=master)](https://travis-ci.org/FriendsOfSymfony/propel1-user-bundle) [![Total Downloads](https://poser.pugx.org/friendsofsymfony/propel1-user-bundle/downloads.svg)](https://packagist.org/packages/friendsofsymfony/propel1-user-bundle) [![Latest Stable Version](https://poser.pugx.org/friendsofsymfony/propel1-user-bundle/v/stable.svg)](https://packagist.org/packages/friendsofsymfony/propel1-user-bundle)


Installation
------------

Install the bundle through composer:

```bash
$ composer require friendsofsymfony/propel1-user-bundle "~1.0@dev"
```

Then enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new FOS\UserBundle\FOSUserBundle(),
        new FOS\Propel1UserBundle\FOSPropel1UserBundle(),
        // ...
    );
}
```

Usage
-----

This bundle will automatically configure FOSUserBundle to use
`FOS\Propel1UserBundle\Model\User` as its user class when enabled.
When configuring FOSUserBundle, skip the configuration of the `db_driver`
and `service.user_manager` settings, as well as of the `user_class` (unless
you want to change the user class).

License
-------

This bundle is under the MIT license. See the complete license [in the bundle](LICENSE)

Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/FriendsOfSymfony/propel1-user-bundle/issues).

When reporting a bug, it may be a good idea to reproduce it in a basic project
built using the [Symfony Standard Edition](https://github.com/symfony/symfony-standard)
to allow developers of the bundle to reproduce the issue by simply cloning it
and following some steps.
