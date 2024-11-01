<?php

namespace unofficial\frill\sso\Composer\Installers;

class CiviCrmInstaller extends BaseInstaller
{
    protected $locations = array('ext' => 'ext/{$name}/');
}
