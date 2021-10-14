<?php
$sMetadataVersion = '1.1';
$aModule = array(
    'id'          => 'error_reporting',
    'title'       => 'Zunderweb Error Reporting',
    'description' =>  array(
        'de'=>'Setzen Sie den Error-Reporting-Level in den Moduleinstellungen',
        'en'=>'Set error reporting level in module settings',
    ),
    'version'     => '0.0.1',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        \OxidEsales\Eshop\Core\ShopControl::class  => \zunderweb\error_reporting\Core\ShopControl::class,
    ),
    'files'    => array(
    ),
    'events'       => array(
    ),
    'blocks' => array(
    ),
    'templates' => array(
    ),
    'settings' => array(
        array('group' => 'erep_settings', 'name' => 'blErepErrorsNotice', 'type' => 'bool',  'value' => '0'),
        array('group' => 'erep_settings', 'name' => 'blErepErrorsWarning', 'type' => 'bool',  'value' => '0'),
        array('group' => 'erep_settings', 'name' => 'blErepErrorsDeprecated', 'type' => 'bool',  'value' => '0'),
    ),
);
