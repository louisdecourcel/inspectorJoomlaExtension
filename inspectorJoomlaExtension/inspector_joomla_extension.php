<?php

defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$document = JFactory::getDocument();
$document->addScript('https://projects.preview.team/injection.min.js');
JResponse::setHeader('Access-Control-Allow-Origin:', 'https://projects.preview.team');
