<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// FrontEnd
$route['default_controller'] = 'Frontend_ctrl';
$route['book/detail/:num'] = 'Frontend_ctrl/book_detail';
$route['author/detail/:num'] = 'Frontend_ctrl/author_detail';
$route['order'] = 'Frontend_ctrl/order';

$route['login'] = 'Auth_ctrl';
$route['register'] = 'Auth_ctrl/register';
$route['validation'] = 'Auth_ctrl/validation';
$route['logout'] = 'Auth_ctrl/logout';


// Author
$route['backend/author'] = 'Author_ctrl';
$route['backend/author/create'] = 'Author_ctrl/create';
$route['backend/author/store'] = 'Author_ctrl/store';
$route['backend/author/detail/:num'] ='Author_ctrl/detail';
$route['backend/author/edit/:num'] = 'Author_ctrl/edit';
$route['backend/author/delete/:num'] = 'Author_ctrl/delete';
$route['backend/author/update'] = 'Author_ctrl/update';

// Book
$route['backend/book'] = 'Book_ctrl';
$route['backend/book/create'] = 'Book_ctrl/create';
$route['backend/book/store'] = 'Book_ctrl/store';
$route['backend/book/detail/:num'] = 'Book_ctrl/detail';
$route['backend/book/edit/:num'] = 'Book_ctrl/edit';
$route['backend/book/delete/:num'] = 'Book_ctrl/delete';
$route['backend/book/update'] = 'Book_ctrl/update';

// Genre
$route['backend/genre'] = 'Genre_ctrl';
$route['backend/genre/create'] = 'Genre_ctrl/create';
$route['backend/genre/store'] = 'Genre_ctrl/store';
$route['backend/genre/edit/:num'] = 'Genre_ctrl/edit';
$route['backend/genre/delete/:num'] = 'Genre_ctrl/delete';
$route['backend/genre/detail/:num'] = 'Genre_ctrl/detail';

// Library
$route['backend/library'] = 'Library_ctrl';
$route['backend/library/create'] = 'Library_ctrl/create';
$route['backend/library/store'] = 'Library_ctrl/store';
$route['backend/library/detail/:num'] ='Library_ctrl/detail';
$route['backend/library/edit/:num'] = 'Library_ctrl/edit';
$route['backend/library/delete/:num'] = 'Library_ctrl/delete';




























