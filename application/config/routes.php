 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['questions/index'] = 'questions/index';
$route['questions/search'] = 'questions/search';
$route['questions/add'] = 'questions/add';
$route['questions/update'] = 'questions/update';

$route['questions/follow'] = 'follow/follow_author';

$route['questions/(:any)'] = 'questions/view/$1';
$route['questions'] = 'questions/index';


#$route['questions/questionbyteacher'] = 'questions/questionbyteacher';
$route['questions/categories/(:any)'] = 'questions/categories/$1';
$route['questions/'] = 'questions/commingsoon';
$route['/posts'] = 'posts/index';

$route['user/editaccount/(:num)'] = 'users/edit_account/$1';

$route['y/(:any)'] = 'users/view/$1';

$route['createexam'] = 'exam/index';
$route['createexam/free'] = 'exam/free';
$route['createexam/free/edit'] = 'exam/edit';


$route['posts/index'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

$route['categories'] = 'categories/index';


$route['default_controller'] = 'pages/view';

$route['subjects/add'] = 'subjects/add';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

 