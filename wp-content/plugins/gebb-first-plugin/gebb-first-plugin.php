<?php



/**
 * @package GebbzFirstPlugin
 */

/*
    Plugin Name: Gebbz First Plugin
    Plugin URI: https://github.com/gebbz03
    Description: This is my first plugin
    Version: 1.0.0  
    Author: Gebb Ebero
    Author URI: https://github.com/gebbz03
    License: GPLv2 or later
    Text Domain: gebbz-first-plugin 
 */

/*

 This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

 */



//  if( ! defined('ABSPATH')){
//      die;
//  }



// if (!function_exists('add_action')) { 
//     echo 'Hey, you can\t access this file';
//     exit;
// }


defined('ABSPATH') or die('Hey, you can\t access this file!');

class GebbzPlugin
{

    function activate()
    {
       
    }

    function deactivate()
    {
        
    }

    function uninstall()
    { }
}


if (class_exists('GebbzPlugin')) {
    $gebbzPlugin = new GebbzPlugin('Gebbz Plugin Initialized');
}


//activation
register_activation_hook(__FILE__, array($gebbzPlugin, 'activate'));


//deactivation
register_deactivation_hook(__FILE__, array($gebbzPlugin, 'deactivate'));


//uninstall
