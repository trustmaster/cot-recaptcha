<?php
/* ====================
[BEGIN_COT_EXT]
Code=recaptcha
Hooks=users.register.add.first
Tags=
Order=10
[END_COT_EXT]
==================== */

/**
 * reCAPTCHA Plugin
 *
 * @package Cotonti
 * @version 0.0.6
 * @author esclkm, Macik
 * @copyright Copyright (c) Pavel Mikulik, Andrey Matsovkin 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

if (!cot_captcha_validate(''))
{
	cot_error('captcha_verification_failed');
}

?>
