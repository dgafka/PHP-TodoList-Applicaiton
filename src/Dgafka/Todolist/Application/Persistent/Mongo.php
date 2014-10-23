<?php

namespace Dgafka\Todolist\Application\Persistent;


use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\YamlDriver;
use Symfony\Component\Config\FileLocator;

class Mongo {

	public $dm;

	public function __construct() {
		$mongoClient = new \MongoClient();
		$connection = new Connection($mongoClient);
		$config = new Configuration();

		$proxyDir  = __DIR__ . '/proxy';
		$hydrators = __DIR__ . '/hydrators';

		$config->setProxyDir($proxyDir);
		$config->setProxyNamespace('Proxies');
		$config->setHydratorDir($hydrators);
		$config->setHydratorNamespace('Hydrators');
		$config->setDefaultDB('doctrine_odm');

		$yamlDriver = new YamlDriver(array(
			__DIR__ . '/../config/doctrine'
		));
		$config->setMetadataDriverImpl($yamlDriver);

		$this->dm = DocumentManager::create($connection, $config);
	}

} 