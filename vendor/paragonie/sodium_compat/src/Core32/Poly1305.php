<?php

namespace unofficial\frill\sso;

if (\class_exists('unofficial\\frill\\sso\\ParagonIE_Sodium_Core32_Poly1305', \false)) {
    return;
}
/**
 * Class ParagonIE_Sodium_Core32_Poly1305
 */
abstract class ParagonIE_Sodium_Core32_Poly1305 extends ParagonIE_Sodium_Core32_Util
{
    const BLOCK_SIZE = 16;
    /**
     * @internal You should not use this directly from another application
     *
     * @param string $m
     * @param string $key
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    public static function onetimeauth($m, $key)
    {
        if (self::strlen($key) < 32) {
            throw new \InvalidArgumentException('Key must be 32 bytes long.');
        }
        $state = new ParagonIE_Sodium_Core32_Poly1305_State(self::substr($key, 0, 32));
        return $state->update($m)->finish();
    }
    /**
     * @internal You should not use this directly from another application
     *
     * @param string $mac
     * @param string $m
     * @param string $key
     * @return bool
     * @throws SodiumException
     * @throws TypeError
     */
    public static function onetimeauth_verify($mac, $m, $key)
    {
        if (self::strlen($key) < 32) {
            throw new \InvalidArgumentException('Key must be 32 bytes long.');
        }
        $state = new ParagonIE_Sodium_Core32_Poly1305_State(self::substr($key, 0, 32));
        $calc = $state->update($m)->finish();
        return self::verify_16($calc, $mac);
    }
}
/**
 * Class ParagonIE_Sodium_Core32_Poly1305
 */
\class_alias('unofficial\\frill\\sso\\ParagonIE_Sodium_Core32_Poly1305', 'ParagonIE_Sodium_Core32_Poly1305', \false);
