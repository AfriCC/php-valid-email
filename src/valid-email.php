<?php

/**
 * This file is part of the php-valid-email library.
 *
 * (c) Gunter Grodotzki <gunter@afri.cc>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace AfriCC\Valid;

function email($string)
{
    $pos = strrpos($string, '@');
    if ($pos === false) {
        return false;
    }

    $ascii_email = substr($string, 0, $pos) . '@' . idn_to_ascii(substr($string, $pos + 1), 0, INTL_IDNA_VARIANT_2003);

    if (version_compare(PHP_VERSION, '7.1.0', '>=')) {
        $flags = FILTER_FLAG_EMAIL_UNICODE;
    } else {
        $flags = null;
    }

    return (bool) filter_var($ascii_email, FILTER_VALIDATE_EMAIL, $flags);
}
