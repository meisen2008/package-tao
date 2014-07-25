<?php
/*  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2013 (original work) Open Assessment Techonologies SA (under the project TAO-PRODUCT);
 *               
 * 
 */

/**
 * The MinChoices attribute
 *
 * @access public
 * @author Sam, <sam@taotesting.com>
 * @package taoQTI
 * @subpackage models_classes_QTI
 */
class taoQTI_models_classes_QTI_attribute_MinChoices extends taoQTI_models_classes_QTI_attribute_Attribute
{
	
	static protected $name = 'minChoices';
	static protected $type = 'taoQTI_models_classes_QTI_datatype_Integer';
	static protected $defaultValue = 0;
	static protected $required = false;

} /* end of class taoQTI_models_classes_QTI_attribute_MinChoices */