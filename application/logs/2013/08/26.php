<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-26 10:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-26 10:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-26 10:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL edit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-08-26 10:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL edit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-26 10:50:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 14 ]
2013-08-26 10:50:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 14 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\_pdo...', 14, Array)
#1 D:\usr\www\_pdo_mo\application\views\menu.php(30): Perm::check('edit')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#4 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\usr\www\_pdo_mo\application\views\tpl\default.php(28): Kohana_View->__toString()
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#7 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#8 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#14 {main}
2013-08-26 10:50:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 14 ]
2013-08-26 10:50:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 14 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\_pdo...', 14, Array)
#1 D:\usr\www\_pdo_mo\application\views\menu.php(30): Perm::check('edit')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#4 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\usr\www\_pdo_mo\application\views\tpl\default.php(28): Kohana_View->__toString()
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#7 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#8 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#14 {main}
2013-08-26 10:51:43 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 14 ]
2013-08-26 10:51:43 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\perm.php [ 14 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\perm.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\usr\www\_pdo...', 14, Array)
#1 D:\usr\www\_pdo_mo\application\views\menu.php(30): Perm::check('edit')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#3 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#4 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\usr\www\_pdo_mo\application\views\tpl\default.php(28): Kohana_View->__toString()
#6 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#7 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#8 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#11 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#14 {main}
2013-08-26 10:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL edit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-08-26 10:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL edit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-26 11:08:01 --- ERROR: ErrorException [ 8 ]: Undefined index: welcome ~ APPPATH\classes\controller\edit.php [ 20 ]
2013-08-26 11:08:01 --- STRACE: ErrorException [ 8 ]: Undefined index: welcome ~ APPPATH\classes\controller\edit.php [ 20 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\edit.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 20, Array)
#1 [internal function]: Controller_Edit->action_tableedit()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-26 11:08:08 --- ERROR: ErrorException [ 8 ]: Undefined index: welcome ~ APPPATH\classes\controller\edit.php [ 20 ]
2013-08-26 11:08:08 --- STRACE: ErrorException [ 8 ]: Undefined index: welcome ~ APPPATH\classes\controller\edit.php [ 20 ]
--
#0 D:\usr\www\_pdo_mo\application\classes\controller\edit.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\usr\www\_pdo...', 20, Array)
#1 [internal function]: Controller_Edit->action_tableedit()
#2 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edit))
#3 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-26 11:28:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 28 ]
2013-08-26 11:28:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 28 ]
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
2013-08-26 15:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-26 15:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-26 15:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-26 15:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-26 15:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-26 15:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}