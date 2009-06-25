<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Olivier El Mekki, 2009 
 * @author     Olivier El Mekki 
 * @package    AddPageHeaders 
 * @license    LGPL 
 * @filesource
 */


/**
 * Table tl_page 
 */
$GLOBALS['TL_DCA']['tl_page'][ 'palettes' ][ 'regular' ] = '{title_legend},title,alias,type;{meta_legend},pageTitle,language,robots,description,head;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{search_legend},noSearch;{expert_legend:hide},cssClass,hide,guests;{tabnav_legend:hide},tabindex,accesskey;{publish_legend},published,start,stop';

$GLOBALS['TL_DCA']['tl_page'][ 'fields' ][ 'head' ] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_page']['head'],
  'exclude'                 => true,
  'inputType'               => 'textarea',
  'eval'                    => array('style'=>'height:60px;', 'preserveTags'=>true, 'tl_class'=>'clr')
);

