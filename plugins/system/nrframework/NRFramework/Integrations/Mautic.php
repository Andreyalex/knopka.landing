<?php

/**
 * @author          Tassos Marinos <info@tassos.gr>
 * @link            http://www.tassos.gr
 * @copyright       Copyright © 2018 Tassos Marinos All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
 */

namespace NRFramework\Integration;

// No direct access
defined('_JEXEC') or die;

class Mautic extends Integration
{
	/**
	 * Create a new instance
	 * @param string $key Your Mautic Access Token
	 * @param string $url The URL in which Mautic is installed
	 * @throws \Exception
	 */
	public function __construct($key, $url)
	{
		parent::__construct();
		$this->setKey($key);
		$this->setEndpoint($url);
		$this->options->set('headers.Authorization', 'Bearer ' . $this->key);
	}
}