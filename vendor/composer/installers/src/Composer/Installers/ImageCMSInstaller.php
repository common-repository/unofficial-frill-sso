<?php

namespace unofficial\frill\sso\Composer\Installers;

class ImageCMSInstaller extends BaseInstaller
{
    protected $locations = array('template' => 'templates/{$name}/', 'module' => 'application/modules/{$name}/', 'library' => 'application/libraries/{$name}/');
}
