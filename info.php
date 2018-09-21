<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'name of application';
$app['version'] = '2.10.1';
$app['version']='2.10.2';
$app['release'] = '';
$app['vendor'] = 'name of vandor'; // e.g. Acme Co
$app['packager'] = 'Packager'; // e.g. Gordie Howe
$app['license'] = 'MyLicense'; // e.g. 'GPLv3';
$app['license_core'] = 'MyLicense'; // e.g. 'LGPLv3';
$app['description'] = lang('shell_right_app_description');
$app['powered_by'] = array(
	    'vendor' => array(
        'name' => 'name of application',
        'url' => '',
    ),
		'packages' =>  array(
			'spackages name' => array(
				'name' => 'name of application',
				'version' => '2.10.2',
				'url' => '',
	), 
	),
);

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('shell_right_app_name');
$app['category'] = lang('base_category_system');
$app['subcategory'] = 'Developer'; // e.g. lang('base_subcategory_settings');
