<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';
$route["invite"] = "site/invite";
$route["links"] = "site/links";
$route["about"] = "site/about";
$route["history"] = "site/history";

$route["guide/game-control"] = "guide/game_control";
$route["guide/level-1"] = "guide/level_1";
$route["guide/level-2"] = "guide/level_2";
$route["guide/level-3"] = "guide/level_3";
$route["guide/level-4"] = "guide/level_4";
$route["guide/level-5"] = "guide/level_5";
$route["guide/level-6"] = "guide/level_6";
$route["guide/level-7"] = "guide/level_7";
$route["guide/level-8"] = "guide/level_8";



/* End of file routes.php */
/* Location: ./application/config/routes.php */