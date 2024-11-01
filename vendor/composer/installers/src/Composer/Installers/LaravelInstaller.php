<?php

namespace unofficial\frill\sso\Composer\Installers;

class LaravelInstaller extends BaseInstaller
{
    protected $locations = array('library' => 'libraries/{$name}/');
}
