<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-06 22:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital/lista was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-06 22:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital/lista was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-06 22:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-06 22:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-06 22:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital/lista was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-06 22:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital/lista was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-06 22:57:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
2012-05-06 22:57:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\pagination\classes\kohana\pagination.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-06 23:06:14 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php on line 44 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-05-06 23:06:14 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php on line 44 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\apache2.2\ht...', 28, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php(44): Kohana_View::factory('edital/newpage', Object(Pagination))
#2 [internal function]: Controller_Edital->action_editaislist()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edital))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-06 23:08:26 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Pagination::__construct() must be an instance of ORM, array given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php on line 43 and defined ~ MODPATH\pagination\classes\pagination.php [ 11 ]
2012-05-06 23:08:26 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Pagination::__construct() must be an instance of ORM, array given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php on line 43 and defined ~ MODPATH\pagination\classes\pagination.php [ 11 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\pagination\classes\pagination.php(11): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\apache2.2\ht...', 11, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php(43): Pagination->__construct(Array, NULL, 'admin_user')
#2 [internal function]: Controller_Edital->action_editaislist()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edital))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-06 23:15:09 --- ERROR: View_Exception [ 0 ]: The requested view admin/listar could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-06 23:15:09 --- STRACE: View_Exception [ 0 ]: The requested view admin/listar could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/listar')
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/listar', Array)
#2 C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php(10): Kohana_View::factory('admin/listar', Array)
#3 [internal function]: Controller_Edital->action_index()
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edital))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-06 23:16:41 --- ERROR: View_Exception [ 0 ]: The requested view admin/listar could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-05-06 23:16:41 --- STRACE: View_Exception [ 0 ]: The requested view admin/listar could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/listar')
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/listar', Array)
#2 C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php(10): Kohana_View::factory('admin/listar', Array)
#3 [internal function]: Controller_Edital->action_index()
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edital))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-06 23:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/carregar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-06 23:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/carregar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-06 23:18:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/carregar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-06 23:18:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/carregar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-06 23:19:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_PostgreSQL::last_query() ~ APPPATH\classes\controller\edital.php [ 81 ]
2012-05-06 23:19:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_PostgreSQL::last_query() ~ APPPATH\classes\controller\edital.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-06 23:23:26 --- ERROR: ErrorException [ 1 ]: Class 'Grid_Column_Link' not found ~ MODPATH\grid\classes\grid\core.php [ 28 ]
2012-05-06 23:23:26 --- STRACE: ErrorException [ 1 ]: Class 'Grid_Column_Link' not found ~ MODPATH\grid\classes\grid\core.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-06 23:26:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Grid::action_field() ~ APPPATH\views\edital\listar.php [ 8 ]
2012-05-06 23:26:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Grid::action_field() ~ APPPATH\views\edital\listar.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}