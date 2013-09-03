<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-30 09:23:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-30 09:23:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-30 09:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-30 09:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-30 09:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit.dump ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-30 09:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit.dump ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-30 09:40:16 --- ERROR: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ APPPATH\classes\controller\edit.php [ 50 ]
2013-08-30 09:40:16 --- STRACE: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ APPPATH\classes\controller\edit.php [ 50 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'mktime() [<a hr...', 'D:\usr\www\_pdo...', 50, Array)
#1 D:\usr\www\_pdo_mo\application\classes\controller\edit.php(50): mktime()
#2 [internal function]: Controller_Edit->action_dump()
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#7 {main}
2013-08-30 09:43:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 28 ]
2013-08-30 09:43:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 28 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 28, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Edit))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-08-30 09:43:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 28 ]
2013-08-30 09:43:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 28 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 28, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Edit))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-08-30 09:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit/recovery/dump_2013-08-30.sql ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-30 09:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit/recovery/dump_2013-08-30.sql ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-30 09:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit/recovery/dump_2013-08-30.sql ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-30 09:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edit/recovery/dump_2013-08-30.sql ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-30 09:53:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 28 ]
2013-08-30 09:53:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 28 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 28, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Edit))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}
2013-08-30 11:14:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\edit.php [ 38 ]
2013-08-30 11:14:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\edit.php [ 38 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\edit.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 38, Array)
#1 [internal function]: Controller_Edit->action_index()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-30 11:15:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\edit.php [ 38 ]
2013-08-30 11:15:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\edit.php [ 38 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\edit.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 38, Array)
#1 [internal function]: Controller_Edit->action_index()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-30 11:18:10 --- ERROR: ErrorException [ 8 ]: Undefined index: mtime ~ APPPATH\views\edit.php [ 82 ]
2013-08-30 11:18:10 --- STRACE: ErrorException [ 8 ]: Undefined index: mtime ~ APPPATH\views\edit.php [ 82 ]
--
#0 D:\usr\www\_pdo_mo\application\views\edit.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 82, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\_pdo_mo\application\views\tpl\default.php(31): Kohana_View->__toString()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#7 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Edit))
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}