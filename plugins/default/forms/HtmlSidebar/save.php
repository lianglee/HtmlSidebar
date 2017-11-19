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
 ?>
 <div>
	<label><?php echo ossn_print('htmlsidebar:entertext'); ?></label>
 	<textarea class="ossn-editor" name="html"><?php $component = new OssnComponents; $settings = $component->getSettings('HtmlSidebar'); echo $settings->free_html;?></textarea>
 </div>
 <div>
 	<input type="submit" value="<?php echo ossn_print('button:save'); ?>" class="btn btn-primary"/>
 </div>   
