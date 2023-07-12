<?php
/* ----------------------------------------------------------------------
 * app/printTemplates/labels/avery_8000.php
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
*/
avery_15163 = {
	"name" = "Avery-brand 15163 labels",
	"code" = "avery_15163",
	"pageWidth" = 8.5in,
	"pageHeight" = 11in,
	"marginLeft" = 0.25in,
	"marginRight" = 0.125,
	"marginTop" = 0.5in,
	"marginBottom" = 0.4in,
	"horizontalGutter" = 0.125,
	"verticalGutter" = 0.00in,
	
	"pageElements" = {
		"title" = {
			"type" = text,
			"style" = "pageTitle",
			"width" = 3 in,
			"height" = .5 in,
			"top" = 0.25 in,
			"left" = 0.25 in,
			"default" = "Printed by CollectiveAccess"
		},
		"datetime" = {
			"type" = text,
			"style" = "pageTitle",
			"width" = 1.75 in,
			"height" = 18px,
			"top" = 0.25 in,
			"left" = 6.5in
		}
	}
	
	"subFormWidth" = 4in,
	"subFormHeight" = 2in,
	"subFormLayout" = {
		"v_admin_idno" = {
			"type" = text,
			"style" = small_label_title_content,
			"width" = 1.875 in,
			"height" = 0.035 in,
			"top" = 0.25 in,
			"left" = 0.05 in,
			"default" = "?"
		},
		"v_admin_idno_barcode" = {
			"type" = barcode,
			"style" = barcode_code128,
			"width" = 1.75 in,
			"height"=  .25 in,
			"top" = 0.28 in,
			"left" = 0.05 in
		},
		"v_title" = {
			"type" = text,
			"style" = small_label_field_content,
			"width" = 1.95 in,
			"height" = 0.3 in,
			"top" = 0.6 in,
			"left" = 0.05 in,
			"default" = "?"
		},
		"v_phys_type" = {
			"type" = text,
			"style" = small_label_field_content,
			"width" = 1.875 in,
			"height" = 0.125 in,
			"top" = 0.9 in,
			"left" = 0.05 in,
			"default" = "?"
		},
		"v_admin_source" = {
			"type" = text,
			"style" = small_label_field_content,
			"width" = 1.875 in,
			"height" = 0.125 in,
			"top" = 1.05 in,
			"left" = 0.05 in,
			"default" = "?"
		},
		"v_primary_representation_small" = {
			"type" = image,
			"width" = 1.75 in,
			"height" = 1.5 in,
			"top" = 0.125 in,
			"left" = 2.125 in,
			"display" = meet
		},
		"v_content_description" = {
			"type" = text,
			"style" = small_label_field_content,
			"width" = 1.95 in,
			"height" = 0.6 in,
			"top" = 1.35 in,
			"left" = 0.05 in,
			"default" = "?"
		},
	}
}
