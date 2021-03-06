<?php
/**
 * @version     1.0.0
 * @package     com_flespakket
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Balticode <giedrius@balticode.com> - www.balticode.com
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_flespakket')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JController::getInstance('Flespakket');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
