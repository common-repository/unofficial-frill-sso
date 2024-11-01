<?php

namespace unofficial\frill\sso\Composer\Installers;

class PPIInstaller extends BaseInstaller
{
    protected $locations = array('module' => 'modules/{$name}/');
}
