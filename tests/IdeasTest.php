<?php
namespace HELLO\Tests;

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp;

class Ideas extends \PHPUnit_Framework_TestCase
{
    protected $client;

    public function setUp()
    {

    }

    public function testIdeas() {
        $this->assertTrue(true);
    }
}
