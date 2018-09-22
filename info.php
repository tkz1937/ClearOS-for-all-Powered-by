<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'name of application';
$app['version'] = '';
$app['release'] = '';
$app['vendor'] = 'name of vandor'; // e.g. Acme Co
$app['packager'] = 'Packager'; // e.g. Gordie Howe
$app['license'] = 'MyLicense'; // e.g. 'GPLv3';
$app['license_core'] = 'MyLicense'; // e.g. 'LGPLv3';
$app['description'] = lang('shell_right_app_description');
$app['powered_by'] = array(
		    'vendor' => array(
		    'name' => 'name of programmer or society',
		    'url' => '',
    		),
		'packages' =>  array(
			'spackages name' => array(
			'name' => 'name of application',
			'version' => '',
			'url' => '',
		), 
	),
);

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('name_of_yourapplication_app_name');
$app['category'] = lang('base_category_system');
$app['subcategory'] = 'Developer'; // e.g. lang('base_subcategory_settings');
