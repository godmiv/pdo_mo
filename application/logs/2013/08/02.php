<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-02 08:18:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-02 08:18:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(31): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Welcome->action_tablewelcome()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-02 08:18:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-02 08:18:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(31): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Welcome->action_tablewelcome()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-02 08:19:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-02 08:19:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(56): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(31): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Welcome->action_tablewelcome()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-02 09:44:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\classes\controller\admin.php [ 133 ]
2013-08-02 09:44:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\classes\controller\admin.php [ 133 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(133): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 133, Array)
#1 [internal function]: Controller_Admin->action_edituser()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-02 11:21:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\classes\controller\admin.php [ 133 ]
2013-08-02 11:21:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\classes\controller\admin.php [ 133 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(133): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 133, Array)
#1 [internal function]: Controller_Admin->action_edituser()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-02 11:41:50 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in D:\usr\www\_pdo_mo\application\classes\controller\admin.php on line 112 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
2013-08-02 11:41:50 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, string given, called in D:\usr\www\_pdo_mo\application\classes\controller\admin.php on line 112 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 80 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query\builder\insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\usr\www\_pdo...', 80, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(112): Kohana_Database_Query_Builder_Insert->values('1', '1', '1', '1')
#2 [internal function]: Controller_Admin->action_edituser()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-02 11:44:04 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::columns() must be an array, string given, called in D:\usr\www\_pdo_mo\application\classes\controller\admin.php on line 112 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 66 ]
2013-08-02 11:44:04 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::columns() must be an array, string given, called in D:\usr\www\_pdo_mo\application\classes\controller\admin.php on line 112 and defined ~ MODPATH\database\classes\kohana\database\query\builder\insert.php [ 66 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query\builder\insert.php(66): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\usr\www\_pdo...', 66, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(112): Kohana_Database_Query_Builder_Insert->columns('login', 'pass', 'group', 'fio')
#2 [internal function]: Controller_Admin->action_edituser()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-02 11:52:19 --- ERROR: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ INSERT INTO `permissions` (`user_id`, `allowed`, `action_id`) VALUES (8, '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-02 11:52:19 --- STRACE: Database_Exception [ 1146 ]: Table 'pdo_mo.permissions' doesn't exist [ INSERT INTO `permissions` (`user_id`, `allowed`, `action_id`) VALUES (8, '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pe...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(114): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin->action_edituser()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-02 13:04:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\admin.php [ 158 ]
2013-08-02 13:04:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\admin.php [ 158 ]
--
#0 D:\usr\www\_pdo_mo\application\views\admin.php(158): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 158, Array)
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
2013-08-02 13:08:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\admin.php [ 159 ]
2013-08-02 13:08:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: form_all ~ APPPATH\views\admin.php [ 159 ]
--
#0 D:\usr\www\_pdo_mo\application\views\admin.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 159, Array)
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
2013-08-02 13:16:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\admin.php [ 168 ]
2013-08-02 13:16:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\admin.php [ 168 ]
--
#0 D:\usr\www\_pdo_mo\application\views\admin.php(168): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 168, Array)
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
2013-08-02 13:16:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: name_selected ~ APPPATH\views\admin.php [ 170 ]
2013-08-02 13:16:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: name_selected ~ APPPATH\views\admin.php [ 170 ]
--
#0 D:\usr\www\_pdo_mo\application\views\admin.php(170): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 170, Array)
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
2013-08-02 14:03:38 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_User::getUserPermissions(), called in D:\usr\www\_pdo_mo\application\classes\controller\admin.php on line 79 and defined ~ APPPATH\classes\model\user.php [ 4 ]
2013-08-02 14:03:38 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_User::getUserPermissions(), called in D:\usr\www\_pdo_mo\application\classes\controller\admin.php on line 79 and defined ~ APPPATH\classes\model\user.php [ 4 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\model\user.php(4): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\usr\www\_pdo...', 4, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(79): Model_User->getUserPermissions()
#2 [internal function]: Controller_Admin->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-02 14:48:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `user_id` = 1' at line 1 [ SELECT `users_permission_actions` WHERE `user_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-02 14:48:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `user_id` = 1' at line 1 [ SELECT `users_permission_actions` WHERE `user_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `users_p...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\model\user.php(5): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(79): Model_User->getUserPermissions(1)
#3 [internal function]: Controller_Admin->action_index()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-02 14:49:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `user_id` = '1'' at line 1 [ SELECT `users_permission_actions` WHERE `user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-02 14:49:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `user_id` = '1'' at line 1 [ SELECT `users_permission_actions` WHERE `user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `users_p...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\model\user.php(5): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(79): Model_User->getUserPermissions('1')
#3 [internal function]: Controller_Admin->action_index()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-02 14:49:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `user_id` = '1'' at line 1 [ SELECT `users_permission_actions` WHERE `user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-02 14:49:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `user_id` = '1'' at line 1 [ SELECT `users_permission_actions` WHERE `user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `users_p...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\model\user.php(5): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(79): Model_User->getUserPermissions('1')
#3 [internal function]: Controller_Admin->action_index()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-02 15:01:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: userid ~ APPPATH\classes\model\user.php [ 5 ]
2013-08-02 15:01:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: userid ~ APPPATH\classes\model\user.php [ 5 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\model\user.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 5, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(79): Model_User->getUserPermissions()
#2 [internal function]: Controller_Admin->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-02 15:02:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `user_id` = '1'' at line 1 [ SELECT `users_permission_actions` WHERE `user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-02 15:02:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `user_id` = '1'' at line 1 [ SELECT `users_permission_actions` WHERE `user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `users_p...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\model\user.php(5): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(79): Model_User->getUserPermissions()
#3 [internal function]: Controller_Admin->action_index()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-02 15:04:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'actions' in 'field list' [ SELECT `actions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-08-02 15:04:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'actions' in 'field list' [ SELECT `actions` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `actions...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\model\user.php(6): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(79): Model_User->getUserPermissions()
#3 [internal function]: Controller_Admin->action_index()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-02 15:22:59 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\model\user.php [ 9 ]
2013-08-02 15:22:59 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\model\user.php [ 9 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\model\user.php(9): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\usr\www\_pdo...', 9, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(79): Model_User->getUserPermissions()
#2 [internal function]: Controller_Admin->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-02 15:23:36 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\model\user.php [ 10 ]
2013-08-02 15:23:36 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\model\user.php [ 10 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\model\user.php(10): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\usr\www\_pdo...', 10, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\admin.php(79): Model_User->getUserPermissions()
#2 [internal function]: Controller_Admin->action_index()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}