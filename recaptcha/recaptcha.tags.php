<?php
/* ====================
[BEGIN_COT_EXT]
Code=recaptcha
Hooks=users.register.tags
Tags=users.register.tpl:{USERS_REGISTER_VERIFYIMG},{USERS_REGISTER_VERIFYINPUT}
Order=10
[END_COT_EXT]
==================== */

/**
 * reCAPTCHA Plugin
 *
 * @package Cotonti
 * @version 0.0.4
 * @author esclkm
 * @copyright Copyright (c) Pavel Mikulik 2008-2009
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

if ($cfg['captchamain'] == 'recaptcha')
{
	$t->assign(array(
		"USERS_REGISTER_VERIFYIMG" => cot_captcha_generate(),
	));
}

?>
