<?php
if (!defined('init_config'))
{	
	header('HTTP/1.0 404 not found');
	exit;
}

$config['SiteName'] = 'warcry';

$config['RootPath'] = 'C:\xampp\htdocs\warcry'; 		//(No slash at the end)
$config['BaseURL'] = 'http://192.168.1.2/warcry'; 	//(No slash at the end)

//Must be unique for each website
$config['AuthCookieName'] = 'Project-Reborn';

//Minifier Settings
//StyleFolderURL rewrites the URLs for the image in the CSS files
$config['StyleFolderURL'] = '/warcry/template/style/'; //(With slash at the end)

//E-mail Address
$config['Email'] = 'info@192.168.1.2';

//Time settings
$config['TimeZone'] = 'Europe/Berlin';
$config['TimeZoneOffset'] = '+1';

//Warcry WoW Database URL
$config['WoWDB_URL'] = 'http://192.168.1.2';	//(No slash at the end)
//Complete URL to the power.js
$config['WoWDB_JS'] = 'http://192.168.1.2/power.js';