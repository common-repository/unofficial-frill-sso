<?php

namespace unofficial\frill\sso\Composer\Installers;

class WolfCMSInstaller extends BaseInstaller
{
    protected $locations = array('plugin' => 'wolf/plugins/{$name}/');
}
