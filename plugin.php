<?php

namespace Kanboard\Plugin\MyPlugin;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/Css/skin.css"));
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
        return 'Author';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/BarboraPiatkova/kanboard-MyPlugin';
    }
}
