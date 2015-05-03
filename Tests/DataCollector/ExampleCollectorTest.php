<?php

namespace SenseException\Bundle\DataCollectorBundle\Tests\DataCollector;

use PHPUnit_Framework_TestCase;
use SenseException\Bundle\DataCollectorBundle\DataCollector\ExampleCollector;
use Exception;

class ExampleCollectorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface
     */
    private $collector;

    protected function setUp()
    {
        parent::setUp();
        $this->collector = new ExampleCollector();
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Request
     */
    private function getRequest()
    {
        $request = $this->getMock('\\Symfony\\Component\\HttpFoundation\\Request');
        $request->expects($this->once())
            ->method('getClientIp')
            ->will($this->returnValue('127.0.0.1'));

        return $request;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function getResponse()
    {
        return $this->getMock('\\Symfony\\Component\\HttpFoundation\\Response');
    }

    public function testCollect()
    {
        $this->collector->collect($this->getRequest(), $this->getResponse());
    }

    public function testCollectException()
    {
        $this->collector->collect($this->getRequest(), $this->getResponse(), new Exception('Nothing happens'));
    }
}
