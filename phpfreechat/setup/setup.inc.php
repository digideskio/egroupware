<?php
/**
 * eGroupWare phpFreeChat integration
 *
 * @link http://www.egroupware.org
 * @link http://phpfreechat.sourceforge.net/
 * @package phpfreechat
 * @author Hans-Jürgen Tappe
 * @copyright 2009 by Hans-Jürgen Tappe
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @version $Id: setup.inc.php 31898 2010-09-05 17:52:00Z ralfbecker $
 */

/* Show up phpFreeChat only for supported databases. */
$setup_info['phpfreechat']['only_db'] = array('mysql','mysqlt','mysqli');
/* Basic information about this app */
$setup_info['phpfreechat']['name']      = 'phpfreechat';
$setup_info['phpfreechat']['title']     = 'phpFreeChat';
$setup_info['phpfreechat']['version']   = '1.8';
$setup_info['phpfreechat']['app_order'] = 4;
$setup_info['phpfreechat']['enable']    = 4;	// 4 = popup

$setup_info['phpfreechat']['author'] = 'pgpFreeChat project';
$setup_info['phpfreechat']['author_url'] = 'http://phpfreechat.sourceforge.net';

$setup_info['phpfreechat']['license']  = 'LGPL';
$setup_info['phpfreechat']['description'] = lang('phpFreeChat integration into eGroupWare');
$setup_info['phpfreechat']['note'] = '';

$setup_info['phpfreechat']['tables']  = array('egw_phpfreechat');	// handled by pfc itself atm.

/* Dependencies for this app to work */
$setup_info['phpfreechat']['depends'][] = array(
	'appname' => 'phpgwapi',
	'versions' => Array('1.7','1.8','1.9')
);
