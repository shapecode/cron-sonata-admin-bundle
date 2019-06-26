Shapecode - Cron Sonata Admin Bundle
=======================

[![paypal](https://img.shields.io/badge/Donate-Paypal-blue.svg)](http://paypal.me/nloges)

[![Latest Stable Version](https://poser.pugx.org/shapecode/cron-sonata-admin-bundle/v/stable)](https://packagist.org/packages/shapecode/cron-sonata-admin-bundle)
[![Total Downloads](https://poser.pugx.org/shapecode/cron-sonata-admin-bundle/downloads)](https://packagist.org/packages/shapecode/cron-sonata-admin-bundle)
[![Monthly Downloads](https://poser.pugx.org/shapecode/cron-sonata-admin-bundle/d/monthly)](https://packagist.org/packages/shapecode/cron-sonata-admin-bundle)
[![Daily Downloads](https://poser.pugx.org/shapecode/cron-sonata-admin-bundle/d/daily)](https://packagist.org/packages/shapecode/cron-sonata-admin-bundle)
[![Latest Unstable Version](https://poser.pugx.org/shapecode/cron-sonata-admin-bundle/v/unstable)](https://packagist.org/packages/shapecode/cron-sonata-admin-bundle)
[![License](https://poser.pugx.org/shapecode/cron-sonata-admin-bundle/license)](https://packagist.org/packages/shapecode/cron-sonata-admin-bundle)

This bundle integrates the `shapecode/cron-bundle` into sonata admin.

Install instructions
--------------------------------

Installing this bundle can be done through these simple steps:

Add the bundle to your project through composer:
```bash
composer require shapecode/cron-sonata-admin-bundle
```

Add the bundle to your application kernel:
```php
<?php

// application/ApplicationKernel.php
public function registerBundles()
{
	// ...
	$bundles = array(
	    // ...
            new Shapecode\Bundle\CronAdminBundle\ShapecodeCronSonataAdminBundle(),
	);
    // ...

    return $bundles;
}
```

Usage
--------------------------------

Just go in the admin area and manage crons. 