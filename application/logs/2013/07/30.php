<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-30 09:57:08 --- ERROR: ErrorException [ 8 ]: Undefined index: desk ~ APPPATH\classes\controller\journal.php [ 208 ]
2013-07-30 09:57:08 --- STRACE: ErrorException [ 8 ]: Undefined index: desk ~ APPPATH\classes\controller\journal.php [ 208 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\journal.php(208): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 208, Array)
#1 [internal function]: Controller_Journal->action_getvidremonta()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Journal))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 09:57:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: s ~ APPPATH\classes\controller\journal.php [ 208 ]
2013-07-30 09:57:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: s ~ APPPATH\classes\controller\journal.php [ 208 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\journal.php(208): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 208, Array)
#1 [internal function]: Controller_Journal->action_getvidremonta()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Journal))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 10:04:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: vidreminta_list ~ APPPATH\views\journal.php [ 100 ]
2013-07-30 10:04:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: vidreminta_list ~ APPPATH\views\journal.php [ 100 ]
--
#0 D:\usr\www\_pdo_mo\application\views\journal.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 100, Array)
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
2013-07-30 10:28:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-30 10:28:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(76): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(125): Controller_Welcome->xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Welcome->action_tablewelcome()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-30 10:28:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-30 10:28:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(76): Kohana_Database_Query->execute()
#2 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(125): Controller_Welcome->xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#3 [internal function]: Controller_Welcome->action_tablewelcome()
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#8 {main}
2013-07-30 12:29:22 --- ERROR: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
2013-07-30 12:29:22 --- STRACE: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(126): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\usr\www\_pdo...', 126, Array)
#1 [internal function]: Controller_Welcome->action_tablewelcome()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 12:29:25 --- ERROR: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
2013-07-30 12:29:25 --- STRACE: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(126): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\usr\www\_pdo...', 126, Array)
#1 [internal function]: Controller_Welcome->action_tablewelcome()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 12:30:05 --- ERROR: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
2013-07-30 12:30:05 --- STRACE: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(126): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\usr\www\_pdo...', 126, Array)
#1 [internal function]: Controller_Welcome->action_tablewelcome()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 12:31:10 --- ERROR: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
2013-07-30 12:31:10 --- STRACE: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(126): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\usr\www\_pdo...', 126, Array)
#1 [internal function]: Controller_Welcome->action_tablewelcome()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 12:31:18 --- ERROR: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
2013-07-30 12:31:18 --- STRACE: ErrorException [ 2048 ]: Non-static method Helper_Jqgrid::xmlforjqgrid() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 126 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(126): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\usr\www\_pdo...', 126, Array)
#1 [internal function]: Controller_Welcome->action_tablewelcome()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 12:34:20 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
2013-07-30 12:34:20 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-30 12:34:23 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
2013-07-30 12:34:23 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-30 12:34:36 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
2013-07-30 12:34:36 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-30 12:40:18 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Helper_Jqgrid::__construct(), called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 10 and defined ~ APPPATH\classes\helper\jqgrid.php [ 5 ]
2013-07-30 12:40:18 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Helper_Jqgrid::__construct(), called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 10 and defined ~ APPPATH\classes\helper\jqgrid.php [ 5 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\usr\www\_pdo...', 5, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(10): Helper_Jqgrid->__construct()
#2 [internal function]: Controller_Welcome->before()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-30 12:42:56 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Helper_Jqgrid::__construct(), called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 10 and defined ~ APPPATH\classes\helper\jqgrid.php [ 5 ]
2013-07-30 12:42:56 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Helper_Jqgrid::__construct(), called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 10 and defined ~ APPPATH\classes\helper\jqgrid.php [ 5 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\usr\www\_pdo...', 5, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(10): Helper_Jqgrid->__construct()
#2 [internal function]: Controller_Welcome->before()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-30 12:42:59 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Helper_Jqgrid::__construct(), called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 10 and defined ~ APPPATH\classes\helper\jqgrid.php [ 5 ]
2013-07-30 12:42:59 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Helper_Jqgrid::__construct(), called in D:\usr\www\_pdo_mo\application\classes\controller\welcome.php on line 10 and defined ~ APPPATH\classes\helper\jqgrid.php [ 5 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\usr\www\_pdo...', 5, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(10): Helper_Jqgrid->__construct()
#2 [internal function]: Controller_Welcome->before()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-30 12:43:12 --- ERROR: ErrorException [ 1 ]: Call to undefined function Helper_Jqgrid() ~ APPPATH\classes\controller\welcome.php [ 127 ]
2013-07-30 12:43:12 --- STRACE: ErrorException [ 1 ]: Call to undefined function Helper_Jqgrid() ~ APPPATH\classes\controller\welcome.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-30 13:20:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$jhelper ~ APPPATH\classes\controller\welcome.php [ 34 ]
2013-07-30 13:20:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$jhelper ~ APPPATH\classes\controller\welcome.php [ 34 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\welcome.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\usr\www\_pdo...', 34, Array)
#1 [internal function]: Controller_Welcome->action_tablewelcome()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 14:16:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-30 14:16:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT * FROM `journal` WHERE () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-07-30 15:36:37 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Insert as array ~ APPPATH\classes\controller\codificator.php [ 82 ]
2013-07-30 15:36:37 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Insert as array ~ APPPATH\classes\controller\codificator.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-30 15:39:10 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Insert as array ~ APPPATH\classes\controller\codificator.php [ 82 ]
2013-07-30 15:39:10 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Insert as array ~ APPPATH\classes\controller\codificator.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-30 15:39:17 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Insert as array ~ APPPATH\classes\controller\codificator.php [ 82 ]
2013-07-30 15:39:17 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Insert as array ~ APPPATH\classes\controller\codificator.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-30 15:43:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\codificator.php [ 84 ]
2013-07-30 15:43:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\codificator.php [ 84 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 84, Array)
#1 [internal function]: Controller_Codificator->action_edit()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 15:56:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `' at line 1 [ SELECT `codificator` WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-30 15:56:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `' at line 1 [ SELECT `codificator` WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `codific...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(77): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Codificator->action_edit()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-30 15:58:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `' at line 1 [ SELECT `codificator` WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-30 15:58:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `' at line 1 [ SELECT `codificator` WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `codific...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(77): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Codificator->action_edit()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-30 16:00:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE (`detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND ' at line 1 [ SELECT `codificator` WHERE (`detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-30 16:00:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE (`detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND ' at line 1 [ SELECT `codificator` WHERE (`detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `codific...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(79): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Codificator->action_edit()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-30 16:00:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `' at line 1 [ SELECT `codificator` WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-30 16:00:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `' at line 1 [ SELECT `codificator` WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `codific...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(78): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Codificator->action_edit()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-30 16:03:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `' at line 1 [ SELECT `codificator` WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-07-30 16:03:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `' at line 1 [ SELECT `codificator` WHERE `detalavto` = '2101-1307045' AND `nazvdet` = 'Пресс-форма' AND `nosnas` = '856-0543-4514-000' AND `nkompl` = '8' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\usr\www\_pdo_mo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `codific...', false, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(78): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Codificator->action_edit()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-07-30 16:36:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Insert::$id ~ APPPATH\classes\controller\codificator.php [ 84 ]
2013-07-30 16:36:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Insert::$id ~ APPPATH\classes\controller\codificator.php [ 84 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(84): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\usr\www\_pdo...', 84, Array)
#1 [internal function]: Controller_Codificator->action_edit()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 16:50:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\codificator.php [ 89 ]
2013-07-30 16:50:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\codificator.php [ 89 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 89, Array)
#1 [internal function]: Controller_Codificator->action_edit()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 16:51:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\codificator.php [ 89 ]
2013-07-30 16:51:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\codificator.php [ 89 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 89, Array)
#1 [internal function]: Controller_Codificator->action_edit()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 16:52:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\codificator.php [ 89 ]
2013-07-30 16:52:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\codificator.php [ 89 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 89, Array)
#1 [internal function]: Controller_Codificator->action_edit()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-07-30 16:54:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$id ~ APPPATH\classes\controller\codificator.php [ 80 ]
2013-07-30 16:54:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$id ~ APPPATH\classes\controller\codificator.php [ 80 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(80): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\usr\www\_pdo...', 80, Array)
#1 [internal function]: Controller_Codificator->action_edit()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}