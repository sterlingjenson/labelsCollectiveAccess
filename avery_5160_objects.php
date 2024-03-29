<?php
/* ----------------------------------------------------------------------
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
 * @name Avery 5160 Storage Location
 * @type label
 * @pageSize letter
 * @pageOrientation portrait
 * @tables ca_storage_locations
 * @marginLeft 0.15in
 * @marginRight 0.15in
 * @marginTop 0.5in
 * @marginBottom 0.5in
 * @horizontalGutter 0in
 * @verticalGutter 0.15625in
 * @labelWidth 2.65in
 * @labelHeight 1.0in
 * @current_sort_direction ASC
 *
 * ----------------------------------------------------------------------
 */
 
 	$vo_result = $this->getVar('result');	
 ?>
 <div class="bodyText" style="position: absolute; left: 10px; top: 15px; ">
 	
 	{{{<ifdef code="ca_storage_locations.preferred_labels">^ca_storage_locations.preferred_labels</ifdef>}}}
</div>

 <div class="barcode" style="position: absolute; left: 10px; top: 42px; width: 140px; ">
 	{{{barcode:code128:7:^ca_storage_locations.idno}}}
</div>

 

