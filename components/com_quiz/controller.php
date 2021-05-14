<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_quiz
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Quizs Component Controller
 *
 * @since  3.1
 */
class QuizController extends JControllerLegacy
{
	/**
	 * Method to display a view.
	 *
	 * @param   boolean        $cachable   If true, the view output will be cached
	 * @param   mixed|boolean  $urlparams  An array of safe URL parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JControllerLegacy  This object to support chaining.
	 *
	 * @since   3.1
	 */
	public function display($cachable = false, $urlparams = false)
	{
		return parent::display($cachable);
	}
}
