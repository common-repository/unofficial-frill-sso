<?php

namespace unofficial\frill\sso\Composer\Installers;

class KodiCMSInstaller extends BaseInstaller
{
    protected $locations = array('plugin' => 'cms/plugins/{$name}/', 'media' => 'cms/media/vendor/{$name}/');
}
