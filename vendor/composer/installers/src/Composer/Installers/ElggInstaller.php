<?php

namespace unofficial\frill\sso\Composer\Installers;

class ElggInstaller extends BaseInstaller
{
    protected $locations = array('plugin' => 'mod/{$name}/');
}
