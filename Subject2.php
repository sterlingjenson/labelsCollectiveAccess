<?php
/* ----------------------------------------------------------------------
 * app/printTemplates/labels/avery_8161.php
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2014 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * -=-=-=-=-=- CUT HERE -=-=-=-=-=-
 * Template configuration:
 *
 * @name Subject -- Avery 5160 LOC Subjects
 * @type label
 * @pageSize letter
 * @pageOrientation portrait
 * @tables ca_objects
 * @marginLeft 0.125in
 * @marginRight 0.125in
 * @marginTop 0.5in
 * @marginBottom 0.5in
 * @horizontalGutter 0in
 * @verticalGutter 0.25in
 * @labelWidth 2.625in
 * @labelHeight 1in
 * 
 *
 * ----------------------------------------------------------------------
 */
 
 	$vo_result = $this->getVar('result');	
 ?>
 <!--- div class="subject" style="overflow: hidden; text-align: center; ">
 	{{{^ca_entities.preferred_labels}}}
 </div --->

 <div class="subject" style="overflow: hidden; text-align: center; " >
 	{{{^ca_objects.lcsh_terms}}}
 </div>


