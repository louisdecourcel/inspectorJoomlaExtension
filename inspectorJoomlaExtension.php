<?php

defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$document = JFactory::getDocument();
$document->addScript('//projets.preview-app.net/injection.js');
JResponse::setHeader('Access-Control-Allow-Origin:', 'http://projets.preview-app.net');