<?php

namespace unofficial\frill\sso\Composer\Installers;

class StarbugInstaller extends BaseInstaller
{
    protected $locations = array('module' => 'modules/{$name}/', 'theme' => 'themes/{$name}/', 'custom-module' => 'app/modules/{$name}/', 'custom-theme' => 'app/themes/{$name}/');
}
