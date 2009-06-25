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
 * Class AddPageHeaders 
 *
 * @copyright  Olivier El Mekki, 2009 
 * @author     Olivier El Mekki 
 * @package    Controller
 */
class AddPageHeaders extends Frontend
{
  /**
   * Generate module
   */
  public function add( $strBuffer, $strTemplate )
  {
    global $objPage;

    if ( ! $objPage->headers_added and strlen( $objPage->head ) )
    {
      $GLOBALS[ 'TL_HEAD' ][] = $objPage->head;
      $objPage->headers_added = true;
    }

    return $strBuffer;
  }
}

