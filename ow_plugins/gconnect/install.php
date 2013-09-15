<?php

BOL_LanguageService::getInstance()->addPrefix('GConnect', 'Google Connect');
OW::getPluginManager()->addPluginSettingsRouteName('gconnect', 'gconnect_admin_main');
//Preparo le posizione nella tabella ow_base_config
OW::getConfig()->addConfig('gconnect', 'client_key', '', 'Google Api Key');
OW::getConfig()->addConfig('gconnect', 'client_id', '', 'Google Client ID');
OW::getConfig()->addConfig('gconnect', 'client_secret', '', 'Google Client Secret');

$path = OW::getPluginManager()->getPlugin('gconnect')->getRootDir() . 'langs.zip';
OW::getLanguage()->importPluginLangs($path, 'gconnect');