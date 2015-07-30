<?php
// No direct access to this file
defined ( '_JEXEC' ) or die ( 'Restricted access' );

// Load the helper
JLoader::register ( 'FilesystemsHelper', __DIR__ . '/helpers/filesystems.php' );

// Get an instance of the controller prefixed by Filesystems
$controller = JControllerLegacy::getInstance ( 'Filesystems' );

// Include component CSS
$document = & JFactory::getDocument ();
$document->addStyleSheet ( 'components/com_filesystems/css/filesystems.css' );

// Perform the Request task
$controller->execute ( JRequest::getCmd ( 'task' ) );

// Redirect if set by the controller
$controller->redirect ();
