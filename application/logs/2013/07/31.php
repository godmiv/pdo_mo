<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-31 09:24:43 --- ERROR: ErrorException [ 1 ]: Class 'Jqgrid' not found ~ APPPATH\classes\controller\welcome.php [ 31 ]
2013-07-31 09:24:43 --- STRACE: ErrorException [ 1 ]: Class 'Jqgrid' not found ~ APPPATH\classes\controller\welcome.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-31 09:30:36 --- ERROR: ErrorException [ 8 ]: Undefined index: desc ~ APPPATH\views\journal.php [ 159 ]
2013-07-31 09:30:36 --- STRACE: ErrorException [ 8 ]: Undefined index: desc ~ APPPATH\views\journal.php [ 159 ]
--
#0 D:\usr\www\_pdo_mo\application\views\journal.php(159): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 159, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Journal))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-31 11:06:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\codificator.php [ 81 ]
2013-07-31 11:06:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\codificator.php [ 81 ]
--
#0 D:\usr\www\_pdo_mo\application\views\codificator.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 81, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-31 11:20:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\codificator.php [ 81 ]
2013-07-31 11:20:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\codificator.php [ 81 ]
--
#0 D:\usr\www\_pdo_mo\application\views\codificator.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 81, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-31 11:23:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\codificator.php [ 93 ]
2013-07-31 11:23:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\codificator.php [ 93 ]
--
#0 D:\usr\www\_pdo_mo\application\views\codificator.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 93, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-31 14:56:23 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\views\user\login.php [ 36 ]
2013-07-31 14:56:23 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\views\user\login.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-31 15:13:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 21 ]
2013-07-31 15:13:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 21 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 21, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-31 15:14:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_group ~ APPPATH\classes\controller\codificator.php [ 35 ]
2013-07-31 15:14:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_group ~ APPPATH\classes\controller\codificator.php [ 35 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 35, Array)
#1 [internal function]: Controller_Codificator->action_index()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-31 15:15:01 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\usr\www\_pdo_mo\application\classes\controller\codificator.php on line 35 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2013-07-31 15:15:01 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\usr\www\_pdo_mo\application\classes\controller\codificator.php on line 35 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\usr\www\_pdo...', 28, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(35): Kohana_View::factory('menu', 'admin')
#2 [internal function]: Controller_Codificator->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-31 15:15:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 21 ]
2013-07-31 15:15:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 21 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 21, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-31 15:24:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 21 ]
2013-07-31 15:24:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 21 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 21, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-07-31 15:29:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\menu.php [ 1 ]
2013-07-31 15:29:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\menu.php [ 1 ]
--
#0 D:\usr\www\_pdo_mo\application\views\menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 1, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(21): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-31 15:30:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\menu.php [ 1 ]
2013-07-31 15:30:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\menu.php [ 1 ]
--
#0 D:\usr\www\_pdo_mo\application\views\menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 1, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(21): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-31 15:36:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\shipping.php [ 41 ]
2013-07-31 15:36:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\shipping.php [ 41 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\shipping.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 41, Array)
#1 [internal function]: Controller_Shipping->action_index()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Shipping))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-31 15:37:17 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\shipping.php [ 10 ]
2013-07-31 15:37:17 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\shipping.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-31 15:38:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\shipping.php [ 41 ]
2013-07-31 15:38:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\shipping.php [ 41 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\shipping.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 41, Array)
#1 [internal function]: Controller_Shipping->action_index()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Shipping))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-31 15:41:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\menu.php [ 1 ]
2013-07-31 15:41:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\menu.php [ 1 ]
--
#0 D:\usr\www\_pdo_mo\application\views\menu.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 1, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(21): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-31 16:43:48 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 16:43:48 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(41): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 16:44:21 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 16:44:21 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(41): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 16:44:48 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 16:44:48 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(41): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 16:46:05 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 16:46:05 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(41): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 16:51:27 --- ERROR: ErrorException [ 8 ]: Undefined index: groups ~ APPPATH\views\admin.php [ 47 ]
2013-07-31 16:51:27 --- STRACE: ErrorException [ 8 ]: Undefined index: groups ~ APPPATH\views\admin.php [ 47 ]
--
#0 D:\usr\www\_pdo_mo\application\views\admin.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 47, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(24): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-31 16:56:21 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 16:56:21 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(57): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:02:36 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:02:36 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(57): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:02:58 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:02:58 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:03:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permissions` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:03:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permissions` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:03:39 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:03:39 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:03:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permissions` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:03:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permissions` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:03:43 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:03:43 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:01 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:01 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:04 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:04 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:09 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:09 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:24 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:24 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:04:51 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:04:51 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:05:31 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:05:31 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:05:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:05:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:06:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:06:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `users` LEFT JOIN `permission` ON () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:06:01 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:06:01 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:06:58 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:06:58 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ SELECT * FROM `permissions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(56): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:06:59 --- ERROR: Database_Exception [ 1052 ]: Column 'id' in on clause is ambiguous [ SELECT * FROM `users` LEFT JOIN `permission` ON (`id` = `user_id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:06:59 --- STRACE: Database_Exception [ 1052 ]: Column 'id' in on clause is ambiguous [ SELECT * FROM `users` LEFT JOIN `permission` ON (`id` = `user_id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:07:55 --- ERROR: Database_Exception [ 1052 ]: Column 'id' in on clause is ambiguous [ SELECT * FROM `users` LEFT JOIN `permission` ON (`id` = `user_id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:07:55 --- STRACE: Database_Exception [ 1052 ]: Column 'id' in on clause is ambiguous [ SELECT * FROM `users` LEFT JOIN `permission` ON (`id` = `user_id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:08:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'on clause' [ SELECT * FROM `users` LEFT JOIN `permission` ON (`user`.`id` = `user_id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:08:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'on clause' [ SELECT * FROM `users` LEFT JOIN `permission` ON (`user`.`id` = `user_id`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-31 17:08:42 --- ERROR: Database_Exception [ 1052 ]: Column 'id' in order clause is ambiguous [ SELECT * FROM `users` LEFT JOIN `permission` ON (`users`.`id` = `user_id`) ORDER BY `id` ASC LIMIT 50 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-31 17:08:42 --- STRACE: Database_Exception [ 1052 ]: Column 'id' in order clause is ambiguous [ SELECT * FROM `users` LEFT JOIN `permission` ON (`users`.`id` = `user_id`) ORDER BY `id` ASC LIMIT 50 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(79): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(48): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablegroups()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}