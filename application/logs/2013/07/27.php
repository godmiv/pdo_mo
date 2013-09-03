<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-27 12:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL journal/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 12:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL journal/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 12:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL journal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 12:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL journal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 12:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL codificwtor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 12:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL codificwtor was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:12:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 7 ]
2013-07-27 22:12:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 7 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\application\views\codificator.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\pdo_...', 7, Array)
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#2 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#3 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\pdo_mo\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#6 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#7 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-27 22:14:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
2013-07-27 22:14:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\application\views\codificator.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\pdo_...', 8, Array)
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#2 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#3 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\pdo_mo\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#6 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#7 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-27 22:21:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
2013-07-27 22:21:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\application\views\codificator.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\pdo_...', 8, Array)
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#2 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#3 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\pdo_mo\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#6 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#7 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-27 22:21:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
2013-07-27 22:21:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\application\views\codificator.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\pdo_...', 8, Array)
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#2 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#3 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\pdo_mo\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#6 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#7 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-27 22:21:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
2013-07-27 22:21:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\application\views\codificator.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\pdo_...', 8, Array)
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#2 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#3 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\pdo_mo\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#6 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#7 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-27 22:22:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
2013-07-27 22:22:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\application\views\codificator.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\pdo_...', 8, Array)
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#2 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#3 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\pdo_mo\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#6 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#7 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-27 22:22:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
2013-07-27 22:22:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\application\views\codificator.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\pdo_...', 8, Array)
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#2 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#3 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\pdo_mo\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#6 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#7 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-27 22:22:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
2013-07-27 22:22:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\application\views\codificator.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\pdo_...', 8, Array)
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#2 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#3 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\pdo_mo\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#6 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#7 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-27 22:22:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
2013-07-27 22:22:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: colnames ~ APPPATH\views\codificator.php [ 8 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\application\views\codificator.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\pdo_...', 8, Array)
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#2 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#3 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\usr\www\pdo_mo\_pdo_mo\application\views\tpl\default.php(29): Kohana_View->__toString()
#5 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\pdo_...')
#6 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\pdo_...', Array)
#7 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Codificator))
#10 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#13 {main}
2013-07-27 22:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:24:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:24:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL journal/codificator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL journal/codificator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL journal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL journal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL journal/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL journal/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL journal/codificator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL journal/codificator was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL journal/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL journal/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 22:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 22:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 23:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 23:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}
2013-07-27 23:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-07-27 23:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/detal was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\usr\www\pdo_mo\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\usr\www\pdo_mo\_pdo_mo\index.php(109): Kohana_Request->execute()
#3 {main}