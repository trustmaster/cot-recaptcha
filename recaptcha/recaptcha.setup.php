<?php
/* ====================
[BEGIN_COT_EXT]
Code=recaptcha
Name=reCAPTCHA
Description=Plugin to protect the registration process with a reCAPTCHA.
Version=0.2
Date=2012-03-30
Author=esclkm
Copyright=This plugin can be used for free
Notes=Visit http://www.google.com/recaptcha to obtain reCAPTCHA keys and get detailed info
SQL=
Auth_guests=R
Lock_guests=12345A
Auth_members=RW
Lock_members=12345A
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
publickey=01:string::6LcC_cISAAAAAPnhQKVV3gL52LcPu6YBrXmvUwr6:reCaptcha Public key (default for localhost)
privatekey=02:string::6LcC_cISAAAAACRtBtrf4V0aMj_vAz446BUWuT-v:reCaptcha Private key (default for localhost)
settings=03:text:::var RecaptchaOptions
[END_COT_EXT_CONFIG]
==================== */

/**
 * reCAPTCHA Plugin
 *
 * @package Cotonti
 * @version 0.2
 * @author esclkm, Macik
 * @copyright Copyright (c) Pavel Mikulik and Andrey Matsovkin 2008-2011
 * @license BSD
 */

?>