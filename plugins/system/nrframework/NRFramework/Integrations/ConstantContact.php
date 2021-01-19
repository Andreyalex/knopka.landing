<?php

/**
 * @author          Tassos Marinos <info@tassos.gr>
 * @link            http://www.tassos.gr
 * @copyright       Copyright © 2018 Tassos Marinos All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
 */

namespace NRFramework\Integrations;

// No direct access
defined('_JEXEC') or die;

class CostantContact extends Integration
{
	/**
	 * Create a new instance
	 * @param string $key Your App key
	 * @param string $access_token The Access Token
	 */
	public function __construct($key, $access_token)
	{
		parent::__construct();
		$this->setKey($key);
		$this->setEndpoint('https://api.constantcontact.com/v2');
		$this->options->set('headers.Authorization', 'Bearer ' . $access_token);
	}

	/**
	 * Setter method for the endpoint
	 * @param string $url The URL which is set in the account's developer settings
	 * @throws \Exception
	 */
	public function setEndpoint($url)
	{
		if (!empty($url))
		{
			$query          = http_build_query(array('api_key' => $this->key));
			$this->endpoint = $url . '?' . $query;
		}
		else
		{
			throw new \Exception("Invalid ConstantContact URL `{$url}` supplied.");
		}
	}
}