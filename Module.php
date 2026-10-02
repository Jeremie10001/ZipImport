<?php
namespace ZipImport;

use Omeka\Module\AbstractModule;
use Laminas\ModuleManager\ModuleManager;

class Module extends AbstractModule
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
