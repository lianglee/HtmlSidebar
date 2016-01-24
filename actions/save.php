<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$input = input('html');
$component = new OssnComponents;

$vars = array(
			 'free_html' => $input
		 );
if($component->setSettings('HtmlSidebar', $vars)){
	ossn_trigger_message(ossn_print('htmlsidebar:saved'));
	redirect(REF);
} else {
	ossn_trigger_message(ossn_print('htmlsidebar:save:error'), 'error');
	redirect(REF);
}
