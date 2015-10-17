<?php
namespace ClientTest\Controller;

use ClientTest\TestCase;

class IndexControllerTest extends TestCase
{
    public function testGetList()
    {
        $this->dispatch('/');
        $this->assertResponseStatusCode(200);
    }
}