<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_quiz
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\Utilities\ArrayHelper;

/**
 * Quizs Component Quiz Model
 *
 * @since  3.1
 */
class QuizModelQuiz extends JModelItem
{
	/**
	 * The quizs that apply.
	 *
	 * @var    object
	 * @since  3.1
	 */
	protected $quiz = null;

	/**
	 * The list of items associated with the quizs.
	 *
	 * @var    array
	 * @since  3.1
	 */
	protected $items = null;

	/**
	 * Constructor.
	 *
	 * @param   array  $config  An optional associative array of configuration settings.
	 *
	 * @see     JController
	 * @since   3.1
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'core_content_id', 'c.core_content_id',
				'core_title', 'c.core_title',
				'core_type_alias', 'c.core_type_alias',
				'core_checked_out_user_id', 'c.core_checked_out_user_id',
				'core_checked_out_time', 'c.core_checked_out_time',
				'core_catid', 'c.core_catid',
				'core_state', 'c.core_state',
				'core_access', 'c.core_access',
				'core_created_user_id', 'c.core_created_user_id',
				'core_created_time', 'c.core_created_time',
				'core_modified_time', 'c.core_modified_time',
				'core_ordering', 'c.core_ordering',
				'core_featured', 'c.core_featured',
				'core_language', 'c.core_language',
				'core_hits', 'c.core_hits',
				'core_publish_up', 'c.core_publish_up',
				'core_publish_down', 'c.core_publish_down',
				'core_images', 'c.core_images',
				'core_urls', 'c.core_urls',
				'match_count',
			);
		}

		parent::__construct($config);
	}

	/**
	 * Method to get a list of items for a list of quizs.
	 *
	 * @return  mixed  An array of objects on success, false on failure.
	 *
	 * @since   3.1
	 */
	public function getItems()
	{
		// Invoke the parent getItems method to get the main list
		$items = parent::getItems();

		if (!empty($items))
		{
			foreach ($items as $item)
			{
				$item->link = QuizsHelperRoute::getItemRoute(
					$item->content_item_id,
					$item->core_alias,
					$item->core_catid,
					$item->core_language,
					$item->type_alias,
					$item->router
				);

				// Get display date
				switch ($this->state->params->get('quiz_list_show_date'))
				{
					case 'modified':
						$item->displayDate = $item->core_modified_time;
						break;

					case 'created':
						$item->displayDate = $item->core_created_time;
						break;

					default:
					case 'published':
						$item->displayDate = ($item->core_publish_up == 0) ? $item->core_created_time : $item->core_publish_up;
						break;
				}
			}
		}

		return $items;
	}

	/**
	 * Method to build an SQL query to load the list data of all items with a given quiz.
	 *
	 * @return  string  An SQL query
	 *
	 * @since   3.1
	 */
	protected function getListQuery()
	{
		return $query;
	}

	/**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @param   string  $ordering   An optional ordering field.
	 * @param   string  $direction  An optional direction (asc|desc).
	 *
	 * @return  void
	 *
	 * @since   3.1
	 */
	protected function populateState($ordering = 'c.core_title', $direction = 'ASC')
	{
	}

	/**
	 * Method to get quiz data for the current quiz or quizs
	 *
	 * @param   integer  $pk  An optional ID
	 *
	 * @return  object
	 *
	 * @since   3.1
	 */
	public function getItem($pk = null)
	{
		if (!isset($this->item))
		{
			$this->item = false;

			if (empty($pk))
			{
				$pk = $this->getState('quiz.id');
			}

			// Get a level row instance.
			$table = JTable::getInstance('Quiz', 'QuizsTable');

			$idsArray = explode(',', $pk);

			// Attempt to load the rows into an array.
			foreach ($idsArray as $id)
			{
				try
				{
					$table->load($id);

					// Check published state.
					if ($published = $this->getState('quiz.state'))
					{
						if ($table->published != $published)
						{
							continue;
						}
					}

					if (!in_array($table->access, JFactory::getUser()->getAuthorisedViewLevels()))
					{
						continue;
					}

					// Convert the JTable to a clean JObject.
					$properties = $table->getProperties(1);
					$this->item[] = ArrayHelper::toObject($properties, 'JObject');
				}
				catch (RuntimeException $e)
				{
					$this->setError($e->getMessage());

					return false;
				}
			}
		}

		if (!$this->item)
		{
			return JError::raiseError(404, JText::_('COM_QUIZ_QUIZ_NOT_FOUND'));
		}

		return $this->item;
	}

	/**
	 * Increment the hit counter.
	 *
	 * @param   integer  $pk  Optional primary key of the article to increment.
	 *
	 * @return  boolean  True if successful; false otherwise and internal error set.
	 *
	 * @since   3.2
	 */
	public function hit($pk = 0)
	{
		$input    = JFactory::getApplication()->input;
		$hitcount = $input->getInt('hitcount', 1);

		if ($hitcount)
		{
			$pk    = (!empty($pk)) ? $pk : (int) $this->getState('quiz.id');
			$table = JTable::getInstance('Quiz', 'QuizsTable');
			$table->hit($pk);

			// Load the table data for later
			$table->load($pk);

			if (!$table->hasPrimaryKey())
			{
				JError::raiseError(404, JText::_('COM_QUIZ_QUIZ_NOT_FOUND'));
			}
		}

		return true;
	}
}
