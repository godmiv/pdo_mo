<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-25 08:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _pdo_mo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-25 08:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _pdo_mo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-25 08:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL _pdo_mo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-25 08:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL _pdo_mo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-25 08:28:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 10 ]
2013-07-25 08:28:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-25 08:28:51 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 11 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2013-07-25 08:28:51 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 11 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\usr\www\_pdo...', 28, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(11): Kohana_View::factory('welcome', '')
#2 [internal function]: Controller_Welcome->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-25 08:29:19 --- ERROR: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-25 08:29:19 --- STRACE: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(137): Kohana_View->set_filename('welcome')
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(30): Kohana_View->__construct('welcome', Array)
#2 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(11): Kohana_View::factory('welcome', Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-25 08:30:36 --- ERROR: View_Exception [ 0 ]: The requested view user/login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-07-25 08:30:36 --- STRACE: View_Exception [ 0 ]: The requested view user/login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(137): Kohana_View->set_filename('user/login')
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(30): Kohana_View->__construct('user/login', NULL)
#2 D:\usr\www\_pdo_mo\application\views\tpl\default.php(26): Kohana_View::factory('user/login')
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#4 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#5 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#6 [internal function]: Kohana_Controller_Template->after()
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#11 {main}
2013-07-25 08:31:16 --- ERROR: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\tpl\default.php [ 26 ]
2013-07-25 08:31:16 --- STRACE: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\tpl\default.php [ 26 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(26): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\usr\www\_pdo...', 26, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-25 13:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL journal/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-25 13:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL journal/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-25 13:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL journal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-25 13:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL journal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-25 13:43:58 --- ERROR: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\kohana\database\mysql.php [ 59 ]
2013-07-25 13:43:58 --- STRACE: ErrorException [ 1 ]: Call to undefined function mysql_connect() ~ MODPATH\database\classes\kohana\database\mysql.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}