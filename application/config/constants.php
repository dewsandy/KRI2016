<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


define('DEV_PAYMENT', TRUE);
define('ADMIN_EMAIL', 'ali@firzil.co.id');

define('IP_SERVER', '54.254.229.60');

define('USER_ID_PAYMENT_TRANFER','36');
define('SECRET_ID_PAYMENT_TRANFER','d3v3l0pm3nt');

define('USER_ID_DOMPETKU','third_party_test');
define('SECRET_KEY_DOMPETKU','Th1s_0nLy_F0uR_t3sT1nG__');
define('INITIATOR_DOMPETKU','outlet_1');
define('INITIATOR_PIN_DOMPETKU','123456');

/** ID & API_KEY FACEBOOK APP**/
define('APPID_FB','549385521836660');
define('SECRETID_FB','319ef50712b73160a7121159a23b7856');

define('MERCHANT', TRUE);

/* IP & PORT SERVER MANDIRI CLICKPAY*/
//define('IP_SERVER_MANDIRI_CLICKPAY', '202.169.43.53');
//define('PORT_SERVER_MANDIRI_CLICKPAY', '18444');
define('IP_SERVER_MANDIRI_CLICKPAY', '127.0.0.1');
define('PORT_SERVER_MANDIRI_CLICKPAY', '22334');
define('USER_MANDIRI_CLICKPAY', 'user');
define('PASSWORD_MANDIRI_CLICKPAY', 'pwd');
define('SHOW_PAYMENT_MANDIRI_CLICKPAY',TRUE);

/* URL & KEY VERITRANS PAYMENT */
define('URL_VERITRANS_PAYMENT', 'https://api.sandbox.veritrans.co.id/');
define('CLIENT_KEY_VERITRANS', '56af463b-c22e-4bab-ad93-669bb3af79c7');
define('SERVER_KEY_VERITRANS', 'a8048818-10fa-42b6-acd5-cb2baf22989b');
define('SHOW_PAYMENT_KREDIT_CARD', TRUE);

/* ACCOUNT & BCA PAYMENT */
define('BCA_KLIK_PAY_CODE', '30CIPIKA06');
define('BCA_CLEAR_KEY', 'ClearKeyDev2Cip1');
define('SHOW_PAYMENT_BCA_KLIK_PAY', TRUE);
$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '') . '://';
$fo = str_replace("index.php","", $_SERVER['SCRIPT_NAME']);
$baseUrl   = "$http" . $_SERVER['SERVER_NAME'] . "" . $fo;
define('URL_CALLBACK_BCA_KLIK_PAY', $baseUrl.'cart/confirm_order?invoice=');

/* USERID & PASSWORD JATIS SMS GET WAY */
define('USERID_JATIS', ' JATIS ');
define('PASSWORD_JATIS', ' JATISabcd');
define('SENDER_JATIS', 'SENDERJATIS');
define('CHANNEL_JATIS', 2);
define('UPLOADBY_JATIS', 'rangga');
define('DIVISION_JATIS', 'default 20');
define('URL_JATIS', 'https://sms-api.jatismobile.com/index.ashx');

/* BANK MANDIRI TRANSFER */
define('SHOW_PAYMENT_BANK_MANDIRI_TRANSFER', true);
define('NAME_OF_BANK_MANDIRI_TRANSFER', 'Bank Mandiri Cabang Jakarta Thamrin');
define('NO_REK_OF_BANK_MANDIRI_TRANSFER', '103.00.85282958');
define('ACCOUNT_OF_BANK_MANDIRI_TRANSFER', 'PT Indosat Tbk');

/* BANK BCA TRANSFER */
define('SHOW_PAYMENT_BANK_BCA_TRANSFER', true);
define('NAME_OF_BANK_BCA_TRANSFER', 'BCA Wisma Asia');
define('NO_REK_OF_BANK_BCA_TRANSFER', '084 303 5008');
define('ACCOUNT_OF_BANK_BCA_TRANSFER', 'PT Indosat Tbk');
/* End of file constants.php */
/* Location: ./application/config/constants.php */
