<?php
/* ====================
[BEGIN_COT_EXT]
Code=recaptcha
Hooks=global
Tags=
Order=10
[END_COT_EXT]

==================== */

/**
 * reCAPTCHA Plugin
 *
 * @package Cotonti
 * @version 0.0.4
 * @author esclkm
 * @copyright Copyright (c) Mikulik Pavel 2008-2009
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

require($cfg['plugins_dir']."/recaptcha/inc/recaptchalib.php");
require_once(cot_langfile('recaptcha'));

function recaptcha_validate($verify)
{
    global $cfg;
    $rverify  = cot_import('rverify','P','TXT');
    $privatekey = $cfg['plugin']['recaptcha']['privatekey'];
    $resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
    return (bool) $resp->is_valid;
}

function recaptcha_generate()
{
    global $cfg;
    $publickey = $cfg['plugin']['recaptcha']['publickey'];
    $verifyimg = "<script type= 'text/javascript'>
                  var RecaptchaOptions = {
                  ".$cfg['plugin']['recaptcha']['settings']."
                  };
                    </script>";
    $verifyimg .= recaptcha_get_html($publickey);
    return ($verifyimg);
}

$cot_captcha[]='recaptcha';

?>
