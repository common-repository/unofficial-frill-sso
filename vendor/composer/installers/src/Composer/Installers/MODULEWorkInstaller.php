<?php

namespace unofficial\frill\sso\Composer\Installers;

class MODULEWorkInstaller extends BaseInstaller
{
    protected $locations = array('module' => 'modules/{$name}/');
}
