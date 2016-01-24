# DataCollectorBundle Example

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/512be750-efeb-4e4c-b711-6457e10fbe0b/mini.png)](https://insight.sensiolabs.com/projects/512be750-efeb-4e4c-b711-6457e10fbe0b)

A simple example Symfony Bundle for creating additional DataCollectors and adding them to Symfony's Profiler.

This Bundle adds a new DataCollector for client ip info to the Symfony Profiler menu, panel and toolbar to show how the Profiler can
be extended in Symfony. Feel free to use this as template for your own Profiler extension.

### Installation

Add the following package to your `composer.json`

```json
"require-dev": {
    "senseexception/datacollector-bundle": "1.1.0"
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
        //...
        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            //...
            $bundles[] = new SenseException\Bundle\DataCollectorBundle\DataCollectorBundle();
        }
        //...

        return $bundles;
    }
    //...
}
```
