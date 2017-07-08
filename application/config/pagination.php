<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| PAGINATION
| -------------------------------------------------------------------
| This file contains an array of pagination configurations.  It is used by the
| Pagination class to configure pagination.
|
*/


/*
 * ------------------------------------------------------------------
 * ENCLOSING MARKUP
 * ------------------------------------------------------------------
 * To surround the entire pagination with some markup you can do it with these two preferences
 */

//set opening tag for enclosure
$config['full_tag_open'] = '<ul class="pagination">';

//set closing tag for enclosure
$config['full_tag_close'] = '</ul>';

/*
 * ------------------------------------------------------------------
 * PREVIOUS LINK
 * ------------------------------------------------------------------
 * To customize previous link configure here
 */

//To set previous link text
$config['prev_link'] = '<i class="zmdi zmdi-chevron-left"></i>';

//To set opening tag for previous link
$config['prev_tag_open'] = '<li class="waves-effect">';

//To set closing tag for previous link
$config['prev_tag_close'] = '</li>';


/*
 * ------------------------------------------------------------------
 * NEXT LINK
 * ------------------------------------------------------------------
 * To customize next link configure here
 */

//To set next link text
$config['next_link'] = '<i class="zmdi zmdi-chevron-right"></i>';

//To set opening tag for next link
$config['next_tag_open'] = '<li class="waves-effect">';

//To set closing tag for next link
$config['next_tag_close'] = '</li>';

/*
 * ------------------------------------------------------------------
 * CURRENT LINK
 * ------------------------------------------------------------------
 * To customize current link configure here
 */

//To set opening tag for current link
$config['cur_tag_open'] = '<li class="active"><a>';

//To set closing tag for current link
$config['cur_tag_close'] = '</a></li>';


/*
 * ------------------------------------------------------------------
 * DIGIT LINK
 * ------------------------------------------------------------------
 * To customize digit link configure here
 */

//To set opening tag for digit link
$config['num_tag_open'] = '<li class="waves-effect">';

//To set closing tag for digit link
$config['num_tag_close'] = '</li>';

/*
 * ------------------------------------------------------------------
 * FIRST LINK
 * ------------------------------------------------------------------
 * To customize first link configure here
 */

//To set opening tag for first link
$config['first_link'] = '&laquo; First';

//To set closing tag for first link
$config['first_tag_open'] = '<li class="waves-effect">';

//To set closing tag for first link
$config['first_tag_close'] = '</li>';


/*
 * ------------------------------------------------------------------
 * LAST LINK
 * ------------------------------------------------------------------
 * To customize last link configure here
 */

//To set opening tag for last link
$config['last_link'] = 'Last &raquo;';

//To set closing tag for last link
$config['last_tag_open'] = '<li class="waves-effect">';

//To set closing tag for last link
$config['last_tag_close'] = '</li>';
