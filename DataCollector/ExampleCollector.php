<?php

namespace SenseException\Bundle\DataCollectorBundle\DataCollector;

use Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class ExampleCollector implements DataCollectorInterface
{
    private $ip;

    public function collect(Request $request, Response $response, Exception $exception = null)
    {
        $this->ip = $request->getClientIp();
    }

    public function getName()
    {
        return 'example';
    }

    public function getId()
    {
        return $this->ip;
    }
}
