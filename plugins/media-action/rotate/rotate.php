<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Media-Type.image
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// @todo Move to autoloader
require_once JPATH_ADMINISTRATOR . '/components/com_media/libraries/Joomla/MediaManager/Plugin/Actions/Plugin.php';

/**
 * Media file type image support
 *
 * @since  __DEPLOY_VERSION__
 */
class PlgMediaActionRotate extends Joomla\MediaManager\Plugin\Action\Plugin
{
	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 *
	 * @since  __DEPLOY_VERSION__
	 */
	protected $autoloadLanguage = true;

	/**
	 * Supported extensions by plugin
	 *
	 * @var     array
	 * @since   __DEPLOY_VERSION__
	 */
	protected static $extensions = array(
		'jpg',
		'png',
		'gif',
		'bmp',
		'jpeg'
	);

	/**
	 * Get the Plugin Title
	 *
	 * @return  string
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function getTitle()
	{
		return JText::_('PLG_MEDIA-ACTION_ROTATE');
	}

	/**
	 * Get the Plugin Icon Class
	 *
	 * @return  string
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function getCssClass()
	{
		return 'icon-media-rotate';
	}

	/**
	 * Get the controls to render in the backend
	 *
	 * @param   \Joomla\MediaManager\MediaFile  $mediaFile  The media file object
	 *
	 * @return   string  HTML to render
	 *
	 * @since    __DEPLOY_VERSION__
	 */
	public function getControls($mediaFile)
	{
		// TODO: Implement getControls() method.
	}

	/**
	 * Process the image - it's in the task of the plugin to save the
	 * changed image
	 *
	 * @return  boolean  True if changes are made
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function process($mediaFile)
	{
		return true;
	}
}
