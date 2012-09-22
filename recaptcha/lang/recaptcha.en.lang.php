<?php
/**
 * Russian Language File for reCAPTCHA Plugin
 *
 * @package Cotonti
 * @version 0.1.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2009
 * @license BSD
 */

/**
 * Plugin Body
 */

$L['captcha_verification_failed'] = 'Verificaion failed!';

/**
 * Plugin Config
 */

$L['cfg_publickey'] = array('reCaptcha Public key','change it with key for current domain ('
.$cfg['mainurl'].'), obtain it <a href="https://www.google.com/recaptcha/admin/list">here</a>');
$L['cfg_privatekey'] = array('reCaptcha Private key','change it with key for current domain');
$L['cfg_settings'] = array('var RecaptchaOptions = {...}', "example:<br />lang : 'fr',<br />
theme : 'white',");

?>