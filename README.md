# DataCollectorBundle

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/512be750-efeb-4e4c-b711-6457e10fbe0b/mini.png)](https://insight.sensiolabs.com/projects/512be750-efeb-4e4c-b711-6457e10fbe0b)

A simple example Symfony 2 Bundle for creating additional DataCollectors and adding them to Symfony's Profiler.

### Installation

Add the following package to your `composer.json`

```json
"require": {
    "senseexception/datacollector-bundle": "dev-master"
}
```

and add the bundle to your AppKernel.php

```php
// app/AppKernel.php
//...
class AppKernel extends Kernel
{
    //...
    public function registerBundles()
    {
        $bundles = array(
            ...
            new SenseException\Bundle\DataCollectorBundle\DataCollectorBundle(),
        );
        //...

        return $bundles;
    }
    //...
}
```
