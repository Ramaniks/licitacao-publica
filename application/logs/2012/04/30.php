<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-30 21:06:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:06:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 21:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 21:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lancarEditais.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lancarEditais.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 21:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 21:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 21:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 21:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:09:50 --- ERROR: Database_Exception [ 0 ]: pg_connect(): Unable to connect to PostgreSQL server: FATAL:  autenticação do tipo password falhou para usuário "saopedro_intraweb" ~ SYSPATH\classes\kohana\database\postgresql.php [ 84 ]
2012-04-30 21:09:50 --- STRACE: Database_Exception [ 0 ]: pg_connect(): Unable to connect to PostgreSQL server: FATAL:  autenticação do tipo password falhou para usuário "saopedro_intraweb" ~ SYSPATH\classes\kohana\database\postgresql.php [ 84 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\database\postgresql.php(402): Kohana_Database_PostgreSQL->connect()
#1 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database.php(473): Kohana_Database_PostgreSQL->escape('2012/04/30')
#2 [internal function]: Kohana_Database->quote('2012/04/30')
#3 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database.php(461): array_map(Array, Array)
#4 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query\builder.php(116): Kohana_Database->quote(Array)
#5 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query\builder\select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PostgreSQL), Array)
#6 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_PostgreSQL))
#7 C:\apache2.2\htdocs\licitacao\application\views\main.php(66): Kohana_Database_Query->execute()
#8 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#9 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#11 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#13 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#14 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(42): Kohana_Controller_Template->after()
#16 [internal function]: Controller_Template_Website->after()
#17 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#18 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#21 {main}
2012-04-30 21:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 21:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 21:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 21:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 21:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 21:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 21:13:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:13:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:17:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 21:17:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 21:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 21:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 21:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 21:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 21:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lancarEditais.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/lancarEditais.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:22:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: _caminho ~ APPPATH\views\admin\lancarEditais.php [ 148 ]
2012-04-30 21:22:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: _caminho ~ APPPATH\views\admin\lancarEditais.php [ 148 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\lancarEditais.php(148): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 148, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(42): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_LancarEditais))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-30 21:24:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\lancarEditais.php [ 168 ]
2012-04-30 21:24:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\lancarEditais.php [ 168 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\lancarEditais.php(168): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 168, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(42): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_LancarEditais))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-30 21:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancarEditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancareditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancareditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancareditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancareditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:53:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancareditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:53:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lancareditais ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:53:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:53:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 21:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 21:58:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 169 ]
2012-04-30 21:58:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 169 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\form.php(169): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 169, Array)
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
2012-04-30 22:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 22:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 22:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 22:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 22:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 22:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 22:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 22:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:12:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:12:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 22:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 22:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/edital was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 22:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 22:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index.php was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index.php was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-30 22:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 22:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 22:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 22:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-30 22:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: edital ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-30 22:25:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 169 ]
2012-04-30 22:25:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 169 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\form.php(169): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 169, Array)
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
2012-04-30 22:25:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: stmt ~ APPPATH\views\admin\form.php [ 170 ]
2012-04-30 22:25:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: stmt ~ APPPATH\views\admin\form.php [ 170 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\form.php(170): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 170, Array)
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
2012-04-30 22:26:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\admin\form.php [ 170 ]
2012-04-30 22:26:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\admin\form.php [ 170 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 22:26:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 187 ]
2012-04-30 22:26:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 187 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\form.php(187): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 187, Array)
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
2012-04-30 22:29:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\admin\form.php [ 165 ]
2012-04-30 22:29:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\admin\form.php [ 165 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\form.php(165): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 165, Array)
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
2012-04-30 22:30:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: stmt ~ APPPATH\views\admin\form.php [ 190 ]
2012-04-30 22:30:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: stmt ~ APPPATH\views\admin\form.php [ 190 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\form.php(190): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 190, Array)
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
2012-04-30 22:32:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: stmt ~ APPPATH\views\admin\form.php [ 191 ]
2012-04-30 22:32:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: stmt ~ APPPATH\views\admin\form.php [ 191 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\form.php(191): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 191, Array)
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
2012-04-30 22:32:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 237 ]
2012-04-30 22:32:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 237 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\form.php(237): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 237, Array)
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
2012-04-30 22:34:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 237 ]
2012-04-30 22:34:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: conexao_postgre ~ APPPATH\views\admin\form.php [ 237 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\admin\form.php(237): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 237, Array)
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
2012-04-30 22:42:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\form.php [ 151 ]
2012-04-30 22:42:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\form.php [ 151 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 22:42:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\form.php [ 151 ]
2012-04-30 22:42:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\form.php [ 151 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 22:43:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\form.php [ 151 ]
2012-04-30 22:43:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\form.php [ 151 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 22:54:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\form.php [ 151 ]
2012-04-30 22:54:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\form.php [ 151 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 22:55:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY ~ APPPATH\views\admin\form.php [ 167 ]
2012-04-30 22:55:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY ~ APPPATH\views\admin\form.php [ 167 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}