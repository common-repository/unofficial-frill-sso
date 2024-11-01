<?php

namespace unofficial\frill\sso;

if (\class_exists('unofficial\\frill\\sso\\ParagonIE_Sodium_Core32_Util', \false)) {
    return;
}
/**
 * Class ParagonIE_Sodium_Core_Util
 */
abstract class ParagonIE_Sodium_Core32_Util extends ParagonIE_Sodium_Core_Util
{
}
/**
 * Class ParagonIE_Sodium_Core_Util
 */
\class_alias('unofficial\\frill\\sso\\ParagonIE_Sodium_Core32_Util', 'ParagonIE_Sodium_Core32_Util', \false);
