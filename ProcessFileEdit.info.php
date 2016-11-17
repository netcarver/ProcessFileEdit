<?php

$info = array(
	'title'   => 'Files Editor',
	'summary' => _('Edit files'),
	'version' => '1.6.2',
	'author'  => 'Florea Banus George, Matja&zcaron; Poto&ccaron;nik, Roland Toth',
	'icon'    => 'file-o',
	'href'    => 'https://github.com/matjazpotocnik/ProcessFileEdit/',
	'requires'  => 'ProcessWire>=2.5.5, PHP>=5.3.8',
	'permission'  => 'file-editor',
	'permissions' => array(
		'file-editor' => _('Edit Files (recommended for superuser only)')
	),
	'page' => array(
		'name'   => 'file-editor',
		'parent' => 'setup',
		'title'  => 'Files Editor'
	),
);
