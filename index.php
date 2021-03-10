<?php
/**
 * @package    Joomla.Site
 *
 * @copyright  Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Define the application's minimum supported PHP version as a constant so it can be referenced within the application.
 */
define('JOOMLA_MINIMUM_PHP', '5.3.10');

if (version_compare(PHP_VERSION, JOOMLA_MINIMUM_PHP, '<'))
{
	die('Your host needs to use PHP ' . JOOMLA_MINIMUM_PHP . ' or higher to run this version of Joomla!');
}

// Saves the start time and memory usage.
$startTime = microtime(1);
$startMem  = memory_get_usage();

/**
 * Constant that is checked in included files to prevent direct access.
 * define() is used in the installation folder rather than "const" to not error for PHP 5.2 and lower
 */
define('_JEXEC', 1);

if (file_exists(__DIR__ . '/defines.php'))
{
	include_once __DIR__ . '/defines.php';
}

if (!defined('_JDEFINES'))
{
	define('JPATH_BASE', __DIR__);
	require_once JPATH_BASE . '/includes/defines.php';
}

require_once JPATH_BASE . '/includes/framework.php';

$caching = false;
if (JFactory::getConfig()->get('cache_platformprefix') == '1') {

    $path = explode('#', $_SERVER['REQUEST_URI'])[0];
    $landLang = trim(explode('?', $path)[0], '/');

    if (in_array($landLang, ['', 'ru', 'uk', 'en'])) {
        $path = JPATH_ROOT . '/cache/landing/landing.' . $landLang . '.html';

        if (file_exists($path)) {
            header('Connection: Keep-Alive');
            header('Content-Encoding: gzip');
            header('Content-Type: text/html; charset=utf-8');
            header('Keep-Alive: timeout=5, max=100');
            header('Pragma: no-cache');
            header('Server: Apache/2.4.46 (cPanel) OpenSSL/1.1.1i mod_bwlimited/1.4 Phusion_Passenger/5.3.7');
            header('Vary: Accept-Encoding');
            header('X-Content-Type-Options: nosniff');
            header('X-Powered-By: PHP/7.4.15');

            echo file_get_contents($path);
            exit(0);

        } else {
            $caching = true;
            ob_start();

        }
    }
}

// Set profiler start time and memory usage and mark afterLoad in the profiler.
JDEBUG ? JProfiler::getInstance('Application')->setStart($startTime, $startMem)->mark('afterLoad') : null;

// Instantiate the application.
$app = JFactory::getApplication('site');

// Execute the application.
$app->execute();

if ($caching) {
    $content = ob_get_clean();
    @mkdir(JPATH_ROOT . '/cache/landing', 0777, true);
    file_put_contents($path, $content);
    echo $content;
    exit(0);
}
