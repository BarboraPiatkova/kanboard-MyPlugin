<?php

namespace Kanboard\Plugin\MyPlugin;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        return 'Nothing';
    }
    
    public function getPluginName()
    {
        return 'MyPlugin';
    }

    public function getPluginDescription()
    {
        return t('This plugin does nothing.');
    }

    public function getPluginAuthor()
    {
        return 'Barbora';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/BarboraPiatkova/kanboard-MyPlugin';
    }
}
