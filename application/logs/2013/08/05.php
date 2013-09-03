<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-05 12:59:27 --- ERROR: ErrorException [ 1 ]: Class 'perm' not found ~ APPPATH\classes\controller\welcome.php [ 11 ]
2013-08-05 12:59:27 --- STRACE: ErrorException [ 1 ]: Class 'perm' not found ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-08-05 12:59:55 --- ERROR: ErrorException [ 1 ]: Class 'perm' not found ~ APPPATH\classes\controller\welcome.php [ 11 ]
2013-08-05 12:59:55 --- STRACE: ErrorException [ 1 ]: Class 'perm' not found ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-08-05 12:59:58 --- ERROR: ErrorException [ 1 ]: Class 'perm' not found ~ APPPATH\classes\controller\welcome.php [ 11 ]
2013-08-05 12:59:58 --- STRACE: ErrorException [ 1 ]: Class 'perm' not found ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-08-05 13:16:21 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Perm::check(), called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 11 and defined ~ APPPATH\classes\perm.php [ 5 ]
2013-08-05 13:16:21 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Perm::check(), called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 11 and defined ~ APPPATH\classes\perm.php [ 5 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\usr\www\_pdo...', 5, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(11): Perm::check()
#2 [internal function]: Controller_Welcome->before()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 13:16:54 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\perm.php [ 8 ]
2013-08-05 13:16:54 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\perm.php [ 8 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 8, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(37): Perm::check('')
#2 [internal function]: Controller_Welcome->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 13:26:41 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
2013-08-05 13:26:41 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(11): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\_pdo...', 11, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(21): Perm::check('')
#2 [internal function]: Controller_Codificator->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 13:27:15 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
2013-08-05 13:27:15 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(11): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\_pdo...', 11, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(21): Perm::check('codificator')
#2 [internal function]: Controller_Codificator->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 13:27:17 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
2013-08-05 13:27:17 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(11): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\_pdo...', 11, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(21): Perm::check('codificator')
#2 [internal function]: Controller_Codificator->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 13:27:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
2013-08-05 13:27:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(11): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\_pdo...', 11, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(21): Perm::check('codificator')
#2 [internal function]: Controller_Codificator->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 13:27:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
2013-08-05 13:27:27 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 11 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(11): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\_pdo...', 11, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(21): Perm::check('codificator')
#2 [internal function]: Controller_Codificator->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 13:51:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'group' in 'field list' [ UPDATE `journal` SET `group` = 'pdomo', `login` = 'pdomo', `pass` = '1', `fio` = 'Иванов1 Иван Иванович' WHERE `id` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-05 13:51:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'group' in 'field list' [ UPDATE `journal` SET `group` = 'pdomo', `login` = 'pdomo', `pass` = '1', `fio` = 'Иванов1 Иван Иванович' WHERE `id` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `journal...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(169): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_edituser()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 14:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-08-05 14:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 14:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-08-05 14:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 14:41:38 --- ERROR: ErrorException [ 8 ]: Undefined index: _search ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
2013-08-05 14:41:38 --- STRACE: ErrorException [ 8 ]: Undefined index: _search ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(52): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 52, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(57): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#2 [internal function]: Controller_Admin->action_tablepermissions()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 15:00:45 --- ERROR: ErrorException [ 8 ]: Undefined index: plan ~ APPPATH\views\admin.php [ 111 ]
2013-08-05 15:00:45 --- STRACE: ErrorException [ 8 ]: Undefined index: plan ~ APPPATH\views\admin.php [ 111 ]
--
#0 D:\usr\www\_pdo_mo\application\views\admin.php(111): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 111, Array)
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
2013-08-05 15:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/tableplan was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-08-05 15:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/tableplan was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 15:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/tableplan was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-08-05 15:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/tableplan was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 15:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/tableplan was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-08-05 15:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/tableplan was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 15:09:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'number' in 'order clause' [ SELECT * FROM `users_permission_actions` ORDER BY `number` DESC LIMIT 20 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-05 15:09:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'number' in 'order clause' [ SELECT * FROM `users_permission_actions` ORDER BY `number` DESC LIMIT 20 OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(79): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(57): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Admin->action_tablepermissions()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-05 15:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-08-05 15:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 15:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-08-05 15:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 15:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-08-05 15:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 15:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-08-05 15:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/editpermission was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 15:24:15 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in D:\usr\www\_pdo_mo\application\classes\controller\admin.php on line 183 and defined ~ SYSPATH\classes\kohana\arr.php [ 275 ]
2013-08-05 15:24:15 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in D:\usr\www\_pdo_mo\application\classes\controller\admin.php on line 183 and defined ~ SYSPATH\classes\kohana\arr.php [ 275 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\arr.php(275): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\usr\www\_pdo...', 275, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(183): Kohana_Arr::get('29')
#2 [internal function]: Controller_Admin->action_editpermission()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 15:24:59 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ UPDATE `permissions` SET `allow` = NULL WHERE `id` = '27' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-05 15:24:59 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ UPDATE `permissions` SET `allow` = NULL WHERE `id` = '27' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `permiss...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(183): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_editpermission()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 15:25:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'allow' in 'field list' [ UPDATE `permission` SET `allow` = NULL WHERE `id` = '29' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-05 15:25:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'allow' in 'field list' [ UPDATE `permission` SET `allow` = NULL WHERE `id` = '29' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `permiss...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(183): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_editpermission()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 15:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL jpurnal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-08-05 15:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL jpurnal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-05 15:47:25 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\classes\controller\admin.php [ 191 ]
2013-08-05 15:47:25 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\classes\controller\admin.php [ 191 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-08-05 16:24:27 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\classes\controller\admin.php [ 187 ]
2013-08-05 16:24:27 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\classes\controller\admin.php [ 187 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-08-05 16:24:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\controller\admin.php [ 184 ]
2013-08-05 16:24:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\controller\admin.php [ 184 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(184): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 184, Array)
#1 [internal function]: Controller_Admin->action_editpermissiongroup()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-05 16:37:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3,14,15'' at line 1 [ UPDATE `permission` SET `allowed` = '0' WHERE `user_id` IN '3,14,15' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-05 16:37:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3,14,15'' at line 1 [ UPDATE `permission` SET `allowed` = '0' WHERE `user_id` IN '3,14,15' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `permiss...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(187): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_editpermissiongroup()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-05 16:57:23 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Perm::check(), called in D:\usr\www\_pdo_mo\application\classes\controller\codificator.php on line 21 and defined ~ APPPATH\classes\perm.php [ 5 ]
2013-08-05 16:57:23 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Perm::check(), called in D:\usr\www\_pdo_mo\application\classes\controller\codificator.php on line 21 and defined ~ APPPATH\classes\perm.php [ 5 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\usr\www\_pdo...', 5, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(21): Perm::check()
#2 [internal function]: Controller_Codificator->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}