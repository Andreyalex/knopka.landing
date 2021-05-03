<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_quiz
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\Registry\Registry;

/**
 * HTML View class for the Quiz component
 *
 * @since  3.1
 */
class QuizViewQuiz extends JViewLegacy
{
	/**
	 * The model state
	 *
	 * @var    \Joomla\Registry\Registry
	 * @since  3.1
	 */
	protected $state;

	/**
	 * The active JObject (on success, false on failure)
	 *
	 * @var    JObject|boolean
	 * @since  3.1
	 */
	protected $item;

	/**
	 * The application parameters
	 *
	 * @var    \Joomla\Registry\Registry  The parameters object
	 * @since  3.1
	 */
	protected $params;

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise an Error object.
	 *
	 * @since   3.1
	 */
	public function display($tpl = null)
	{
	    return parent::display($tpl);
	}
}
