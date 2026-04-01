<?php
defined('BASEPATH') OR exit('No direct script access allowed');   


$route['default_controller'] = 'user/Home_Controller/home';   
$route['translate_uri_dashes'] = FALSE;

///.............User Start...........

$route['home'] = 'user/Home_Controller/home';
$route['today-result'] = 'user/Home_Controller/home';
$route['today_result/([a-zA-Z0-9]+)'] ='user/result/Result_Controller/result/$1';

$route['old-result'] = 'user/result/Result_Controller/old_result'; 
$route['oldday_result_date11'] = 'user/result/Result_Controller/oldday_result_date11';   
$route['oldday_result_date3'] = 'user/result/Result_Controller/oldday_result_date3';   
$route['oldday_result_date7'] = 'user/result/Result_Controller/oldday_result_date7';  
$route['oldday_result_date8'] = 'user/result/Result_Controller/oldday_result_date8';  
$route['live_demo'] = 'user/live_demo/Live_demo_Controller/live_demo';  
$route['last-digit'] = 'user/Home_Controller/last_digit';  
$route['last-two-digit'] = 'user/Home_Controller/last_two_digit';  
$route['claiem'] = 'user/contact/Contact_Controller/claiem';  
$route['contact'] = 'user/contact/Contact_Controller/contact'; 
$route['privacy-policy'] = 'user/Home_Controller/privacy_policy';

/*==admin==*/  

$route['admin'] = 'admin/AdminController'; 
$route['verify'] = 'admin/AdminController/verify';
$route['forgotpassword'] = 'admin/AdminController/forgotpass';
$route['forgotpassword_verify'] = 'admin/AdminController/forgotpassword';
$route['admin/changepassword'] = 'admin/AdminController/resetpassword';
$route['admin/foorgot_pass_email'] = 'admin/AdminController/  foorgot_pass_email';

$route['admin/dashboard'] = 'admin/DashboardController';

// live Draw //
$route['live-draw'] = 'live_draw/Livedraw_Controller';
$route['live-draw/altaf'] = 'live_draw/Livedraw_Controller/altaf';
$route['live_draw/tts/hindi'] = 'live_draw/Tts/hindi';

//$route['admin/manageadmin'] = 'admin/admin/adminController/manageadmin';
//*....... Users All........*// 
///.........price Start................
$route['admin/view_price']='admin/add_price/Add_price_Controller/view_price';
$route['admin/add-price']='admin/add_price/Add_price_Controller/add_price';
$route['admin/save_price']='admin/add_price/Add_price_Controller/save_price';
$route['admin/edit_price/([a-zA-Z0-9]+)']='admin/add_price/Add_price_Controller/edit_price/$1';
$route['admin/update_price']='admin/add_price/Add_price_Controller/update_price';
$route['admin/view_price/status']='admin/add_price/Add_price_Controller/status';
$route['admin/destroy/([a-zA-Z0-9]+)']='admin/add_price/Add_price_Controller/destroy/$1';

///...........Report Start....................

$route['today_report']='admin/report/Report_Controller/today_report';   
$route['all_report']='admin/report/Report_Controller/all_report';  
$route['all_report/all_data_search']='admin/report/Report_Controller/date_wise';


///.............Api...........////
$route['api/first-price-jodi'] = 'api/Api_Controller/first_price_jodi';
$route['api/first-price-last'] = 'api/Api_Controller/first_price_last';
$route['api/latest-results-pdf'] = 'api/Api_Controller/latest_results_pdf';