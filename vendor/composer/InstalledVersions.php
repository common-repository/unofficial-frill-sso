<?php

namespace unofficial\frill\sso\Composer;

use unofficial\frill\sso\Composer\Semver\VersionParser;
class InstalledVersions
{
    private static $installed = array('root' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(), 'reference' => '020dc5c41b821c31859d8b4c3b5bdf98699fd44d', 'name' => 'fullstackpress/frill-sso'), 'versions' => array('composer/installers' => array('pretty_version' => 'v1.11.0', 'version' => '1.11.0.0', 'aliases' => array(), 'reference' => 'ae03311f45dfe194412081526be2e003960df74b'), 'firebase/php-jwt' => array('pretty_version' => 'v5.4.0', 'version' => '5.4.0.0', 'aliases' => array(), 'reference' => 'd2113d9b2e0e349796e72d2a63cf9319100382d2'), 'fullstackpress/frill-sso' => array('pretty_version' => 'dev-master', 'version' => 'dev-master', 'aliases' => array(), 'reference' => '020dc5c41b821c31859d8b4c3b5bdf98699fd44d'), 'paragonie/random_compat' => array('pretty_version' => 'v9.99.100', 'version' => '9.99.100.0', 'aliases' => array(), 'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a'), 'paragonie/sodium_compat' => array('pretty_version' => 'v1.16.1', 'version' => '1.16.1.0', 'aliases' => array(), 'reference' => '2e856afe80bfc968b47da1f4a7e1ea8f03d06b38'), 'roundcube/plugin-installer' => array('replaced' => array(0 => '*')), 'shama/baton' => array('replaced' => array(0 => '*'))));
    public static function getInstalledPackages()
    {
        return \array_keys(self::$installed['versions']);
    }
    public static function isInstalled($packageName)
    {
        return isset(self::$installed['versions'][$packageName]);
    }
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));
        return $provided->matches($constraint);
    }
    public static function getVersionRanges($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }
        $ranges = array();
        if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
            $ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
        }
        if (\array_key_exists('aliases', self::$installed['versions'][$packageName])) {
            $ranges = \array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
        }
        if (\array_key_exists('replaced', self::$installed['versions'][$packageName])) {
            $ranges = \array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
        }
        if (\array_key_exists('provided', self::$installed['versions'][$packageName])) {
            $ranges = \array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
        }
        return \implode(' || ', $ranges);
    }
    public static function getVersion($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }
        if (!isset(self::$installed['versions'][$packageName]['version'])) {
            return null;
        }
        return self::$installed['versions'][$packageName]['version'];
    }
    public static function getPrettyVersion($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }
        if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
            return null;
        }
        return self::$installed['versions'][$packageName]['pretty_version'];
    }
    public static function getReference($packageName)
    {
        if (!isset(self::$installed['versions'][$packageName])) {
            throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
        }
        if (!isset(self::$installed['versions'][$packageName]['reference'])) {
            return null;
        }
        return self::$installed['versions'][$packageName]['reference'];
    }
    public static function getRootPackage()
    {
        return self::$installed['root'];
    }
    public static function getRawData()
    {
        return self::$installed;
    }
    public static function reload($data)
    {
        self::$installed = $data;
    }
}
