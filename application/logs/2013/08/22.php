<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-22 09:27:13 --- ERROR: ErrorException [ 8 ]: Undefined index: _search ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
2013-08-22 09:27:13 --- STRACE: ErrorException [ 8 ]: Undefined index: _search ~ APPPATH\classes\helper\jqgrid.php [ 52 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\helper\jqgrid.php(52): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 52, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\codificator.php(45): Helper_Jqgrid::xmlforjqgrid(Object(Database_Query_Builder_Select), Array)
#2 [internal function]: Controller_Codificator->action_detal()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Codificator))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-22 10:25:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: d ~ APPPATH\views\journal.php [ 24 ]
2013-08-22 10:25:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: d ~ APPPATH\views\journal.php [ 24 ]
--
#0 D:\usr\www\_pdo_mo\application\views\journal.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 24, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(31): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Journal))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-08-22 10:44:32 --- ERROR: ErrorException [ 2 ]: substr() expects at least 2 parameters, 1 given ~ APPPATH\views\journal.php [ 29 ]
2013-08-22 10:44:32 --- STRACE: ErrorException [ 2 ]: substr() expects at least 2 parameters, 1 given ~ APPPATH\views\journal.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'substr() expect...', 'D:\usr\www\_pdo...', 29, Array)
#1 D:\usr\www\_pdo_mo\application\views\journal.php(29): substr('"&detalavto="+d...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#4 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\usr\www\_pdo_mo\application\views\tpl\default.php(31): Kohana_View->__toString()
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#7 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#8 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Journal))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#14 {main}
2013-08-22 13:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:11:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:11:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 13:47:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 13:47:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 14:36:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 14:36:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 14:46:08 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\views\tpl\default.php [ 38 ]
2013-08-22 14:46:08 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\views\tpl\default.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-08-22 14:47:19 --- ERROR: ErrorException [ 8 ]: Undefined index: style ~ APPPATH\views\tpl\default.php [ 26 ]
2013-08-22 14:47:19 --- STRACE: ErrorException [ 8 ]: Undefined index: style ~ APPPATH\views\tpl\default.php [ 26 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 26, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-08-22 14:47:38 --- ERROR: ErrorException [ 8 ]: Undefined index: style ~ APPPATH\views\tpl\default.php [ 26 ]
2013-08-22 14:47:38 --- STRACE: ErrorException [ 8 ]: Undefined index: style ~ APPPATH\views\tpl\default.php [ 26 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 26, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-08-22 14:48:12 --- ERROR: ErrorException [ 8 ]: Undefined index: style ~ APPPATH\views\tpl\default.php [ 26 ]
2013-08-22 14:48:12 --- STRACE: ErrorException [ 8 ]: Undefined index: style ~ APPPATH\views\tpl\default.php [ 26 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 26, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-08-22 14:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 14:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 14:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 14:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 14:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 14:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 14:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 14:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-22 16:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-22 16:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}