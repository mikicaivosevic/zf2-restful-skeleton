<?php
namespace ClientTest;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class TestCase extends AbstractHttpControllerTestCase
{
    /**
     * @var ServiceLocatorInterface
     */
    private $serviceManager;

    public function setUp()
    {
        parent::setUp();
        $this->setApplicationConfig(include __DIR__ . '/../../../../config/application.config.php');
        $this->serviceManager = $this->getApplication()->getServiceManager();
    }

    /**
     * @return ServiceLocatorInterface
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }
}