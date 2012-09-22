<?php
/**
 * Russian Language File for reCAPTCHA Plugin
 *
 * @package Cotonti
 * @version 0.1.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

/**
 * Plugin Body
 */

$L['captcha_verification_failed'] = 'Код с картинки введен не верно!';

/**
 * Plugin Config
 */

$L['cfg_publickey'] = array('reCaptcha публичный (Public) ключ','замените этот ключ своим, актуальным для данного сайта ('
.$cfg['mainurl'].'). Получить ключ можно <a href="https://www.google.com/recaptcha/admin/list">здесь</a>.');
$L['cfg_privatekey'] = array('reCaptcha приватный (Private) ключ','замените этот ключ своим, актуальным для данного сайта.');
$L['cfg_settings'] = array('var RecaptchaOptions = {...}', "пример:<br />lang : 'fr',<br />
theme : 'white',");


?>