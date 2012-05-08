<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-05 15:55:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\views\edital\list.php [ 18 ]
2012-05-05 15:55:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\views\edital\list.php [ 18 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\edital\list.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 18, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(42): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Edital))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-05 15:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL edital/lista was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-05-05 15:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL edital/lista was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-05 15:56:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\edital.php [ 49 ]
2012-05-05 15:56:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\edital.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-05 15:56:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
2012-05-05 15:56:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-05 15:57:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
2012-05-05 15:57:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-05 15:58:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
2012-05-05 15:58:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-05 15:58:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
2012-05-05 15:58:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-05 16:10:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
2012-05-05 16:10:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-05 16:45:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
2012-05-05 16:45:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}