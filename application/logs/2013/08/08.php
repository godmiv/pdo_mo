<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-08 09:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-08 09:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-08 15:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-08-08 15:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/ui-lightness/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-08 15:28:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 27 ]
2013-08-08 15:28:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\tpl\default.php [ 27 ]
--
#0 D:\usr\www\_pdo_mo\application\views\tpl\default.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\usr\www\_pdo...', 27, Array)
#1 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(61): include('D:\usr\www\_pdo...')
#2 D:\usr\www\_pdo_mo\system\classes\kohana\view.php(343): Kohana_View::capture('D:\usr\www\_pdo...', Array)
#3 D:\usr\www\_pdo_mo\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\usr\www\_pdo_mo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Journal))
#6 D:\usr\www\_pdo_mo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\usr\www\_pdo_mo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\usr\www\_pdo_mo\index.php(109): Kohana_Request->execute()
#9 {main}