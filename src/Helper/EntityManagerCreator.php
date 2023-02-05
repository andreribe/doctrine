<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

#[\Attribute]
class EntityManagerCreator
{
    public static function createEntityManager(): EntityManager
    {

        $isDevMode = true;

        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__."/.."], 
            $isDevMode
        );

        // database configuration parameters
        $conn = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../db.sqlite',
        ];

        // obtaining the entity manager
        return EntityManager::create($conn, $config);
    }    
}