<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-28 08:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-28 08:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-28 08:28:26 --- ERROR: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-28 08:28:26 --- STRACE: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(137): Kohana_View->set_filename('login')
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(30): Kohana_View->__construct('login', NULL)
#2 C:\apache2.2\htdocs\licitacao\application\classes\controller\login.php(8): Kohana_View::factory('login')
#3 [internal function]: Controller_Login->action_index()
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-28 09:05:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\template\website.php [ 18 ]
2012-04-28 09:05:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\views\template\website.php [ 18 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 18, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Template_Website->after()
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#10 {main}
2012-04-28 09:23:00 --- ERROR: ErrorException [ 1 ]: Class 'Database_Postgresql' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
2012-04-28 09:23:00 --- STRACE: ErrorException [ 1 ]: Class 'Database_Postgresql' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 09:28:55 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2012-04-28 09:28:55 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', 'C:\apache2.2\ht...', 411, Array)
#1 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(411): array_fill(0, 0, NULL)
#2 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#5 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(8): Kohana_ORM::factory('entidades')
#6 [internal function]: Controller_Main->action_index()
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-28 09:36:13 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2012-04-28 09:36:13 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', 'C:\apache2.2\ht...', 411, Array)
#1 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(411): array_fill(0, 0, NULL)
#2 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#5 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(12): Kohana_ORM::factory('entidades')
#6 [internal function]: Controller_Main->action_index()
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-28 09:37:17 --- ERROR: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
2012-04-28 09:37:17 --- STRACE: ErrorException [ 2 ]: array_fill(): Number of elements must be positive ~ MODPATH\orm\classes\kohana\orm.php [ 411 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_fill(): N...', 'C:\apache2.2\ht...', 411, Array)
#1 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(411): array_fill(0, 0, NULL)
#2 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(340): Kohana_ORM->clear()
#3 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#5 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(12): Kohana_ORM::factory('entidades')
#6 [internal function]: Controller_Main->action_index()
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-28 09:37:59 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 14 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
2012-04-28 09:37:59 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 14 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 30 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query\builder\where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\apache2.2\ht...', 30, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(14): Kohana_Database_Query_Builder_Where->where('dt_inicio_dispo...')
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 09:38:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\classes\controller\main.php [ 14 ]
2012-04-28 09:38:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\classes\controller\main.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 09:46:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\classes\controller\main.php [ 22 ]
2012-04-28 09:46:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\classes\controller\main.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 09:47:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\classes\controller\main.php [ 22 ]
2012-04-28 09:47:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\classes\controller\main.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 09:47:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\classes\controller\main.php [ 22 ]
2012-04-28 09:47:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\classes\controller\main.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 09:48:20 --- ERROR: ErrorException [ 1 ]: Call to undefined function TO_DATE() ~ APPPATH\classes\controller\main.php [ 22 ]
2012-04-28 09:48:20 --- STRACE: ErrorException [ 1 ]: Call to undefined function TO_DATE() ~ APPPATH\classes\controller\main.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 09:49:10 --- ERROR: ErrorException [ 1 ]: Call to undefined function TO_DATE() ~ APPPATH\classes\controller\main.php [ 23 ]
2012-04-28 09:49:10 --- STRACE: ErrorException [ 1 ]: Call to undefined function TO_DATE() ~ APPPATH\classes\controller\main.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 09:49:23 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::and_where(), called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 24 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 43 ]
2012-04-28 09:49:23 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::and_where(), called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 24 and defined ~ MODPATH\database\classes\kohana\database\query\builder\where.php [ 43 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query\builder\where.php(43): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\apache2.2\ht...', 43, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(24): Kohana_Database_Query_Builder_Where->and_where('st_cancelado <>...')
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 09:50:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH\classes\controller\main.php [ 27 ]
2012-04-28 09:50:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH\classes\controller\main.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 09:50:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\controller\main.php [ 28 ]
2012-04-28 09:50:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\controller\main.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 09:50:32 --- ERROR: Database_Exception [ 0 ]: ERRO:  relação "editais" não existe
LINE 2: ...dade= editais"."cd_entidade) as nm_entidade" FROM "editais" ...
                                                             ^
 [ SELECT "count(*) as quantidade,	cd_entidade, 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('TO_DATE( 2012/04/28, ''YYYY/MM/DD'')') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 09:50:32 --- STRACE: Database_Exception [ 0 ]: ERRO:  relação "editais" não existe
LINE 2: ...dade= editais"."cd_entidade) as nm_entidade" FROM "editais" ...
                                                             ^
 [ SELECT "count(*) as quantidade,	cd_entidade, 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('TO_DATE( 2012/04/28, ''YYYY/MM/DD'')') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "count(*...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(29): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 09:53:48 --- ERROR: Database_Exception [ 0 ]: ERRO:  esquema "count(*) as quantidade,	cd_entidade, 
	             (select nm" não existe
 [ SELECT "count(*) as quantidade,	cd_entidade, 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 09:53:48 --- STRACE: Database_Exception [ 0 ]: ERRO:  esquema "count(*) as quantidade,	cd_entidade, 
	             (select nm" não existe
 [ SELECT "count(*) as quantidade,	cd_entidade, 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "count(*...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(29): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 09:55:32 --- ERROR: Database_Exception [ 0 ]: ERRO:  esquema "count(*) as quantidade,	cd_entidade, 
	             (select nm" não existe
 [ SELECT "count(*) as quantidade,	cd_entidade, 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 09:55:32 --- STRACE: Database_Exception [ 0 ]: ERRO:  esquema "count(*) as quantidade,	cd_entidade, 
	             (select nm" não existe
 [ SELECT "count(*) as quantidade,	cd_entidade, 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "count(*...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(29): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 09:57:48 --- ERROR: Database_Exception [ 0 ]: ERRO:  esquema "count(*) as quantidade,	cd_entidade, 
	             (select nm" não existe
 [ SELECT "count(*) as quantidade,	cd_entidade, 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 09:57:48 --- STRACE: Database_Exception [ 0 ]: ERRO:  esquema "count(*) as quantidade,	cd_entidade, 
	             (select nm" não existe
 [ SELECT "count(*) as quantidade,	cd_entidade, 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "count(*...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 09:58:22 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "count(*) as quantidade" não existe
LINE 1: SELECT "count(*) as quantidade", "cd_entidade", " 
               ^
 [ SELECT "count(*) as quantidade", "cd_entidade", " 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 09:58:22 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "count(*) as quantidade" não existe
LINE 1: SELECT "count(*) as quantidade", "cd_entidade", " 
               ^
 [ SELECT "count(*) as quantidade", "cd_entidade", " 
	             (select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "count(*...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:00:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ')' ~ APPPATH\classes\controller\main.php [ 19 ]
2012-04-28 10:00:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ')' ~ APPPATH\classes\controller\main.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:00:43 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "count(*) as quantidade" não existe
LINE 1: SELECT "count(*) as quantidade", "cd_entidade", "(select nm_...
               ^
 [ SELECT "count(*) as quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:00:43 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "count(*) as quantidade" não existe
LINE 1: SELECT "count(*) as quantidade", "cd_entidade", "(select nm_...
               ^
 [ SELECT "count(*) as quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "count(*...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:08:20 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "count(*)" não existe
LINE 1: SELECT "count(*)", "cd_entidade", "(select nm_entidade from ...
               ^
 [ SELECT "count(*)", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:08:20 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "count(*)" não existe
LINE 1: SELECT "count(*)", "cd_entidade", "(select nm_entidade from ...
               ^
 [ SELECT "count(*)", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "count(*...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:09:28 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "count(*)" não existe
LINE 1: SELECT "count(*)", "cd_entidade", "(select nm_entidade from ...
               ^
 [ SELECT "count(*)", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:09:28 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "count(*)" não existe
LINE 1: SELECT "count(*)", "cd_entidade", "(select nm_entidade from ...
               ^
 [ SELECT "count(*)", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "count(*...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:09:37 --- ERROR: Database_Exception [ 0 ]: ERRO:  esquema "(select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:09:37 --- STRACE: Database_Exception [ 0 ]: ERRO:  esquema "(select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade) as nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:09:59 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\kohana\database.php [ 500 ]
2012-04-28 10:09:59 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\kohana\database.php [ 500 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database.php(500): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\apache2.2\ht...', 500, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query\builder\select.php(352): array_map(Array, Array)
#3 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_PostgreSQL))
#4 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#5 [internal function]: Controller_Main->action_index()
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#10 {main}
2012-04-28 10:11:46 --- ERROR: Database_Exception [ 0 ]: ERRO:  esquema "(select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade)" AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:11:46 --- STRACE: Database_Exception [ 0 ]: ERRO:  esquema "(select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade= editais"."cd_entidade)" AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidades" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:12:38 --- ERROR: Database_Exception [ 0 ]: ERRO:  esquema "(select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade = editais"."cd_entidade)" AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:12:38 --- STRACE: Database_Exception [ 0 ]: ERRO:  esquema "(select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade = editais"."cd_entidade)" AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:13:55 --- ERROR: Database_Exception [ 0 ]: ERRO:  esquema "(select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade = editais"."cd_entidade)" AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:13:55 --- STRACE: Database_Exception [ 0 ]: ERRO:  esquema "(select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "(select nm_entidade from entidades where entidades"."cd_entidade = editais"."cd_entidade)" AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:14:30 --- ERROR: Database_Exception [ 0 ]: ERRO:  identificador delimitado tem tamanho zero em ou próximo a """"
LINE 1: ...(select nm_entidade from entidades where entidades"".""cd_en...
                                                             ^
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", (select nm_entidade from entidades where entidades"".""cd_entidade = editais"".""cd_entidade) AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:14:30 --- STRACE: Database_Exception [ 0 ]: ERRO:  identificador delimitado tem tamanho zero em ou próximo a """"
LINE 1: ...(select nm_entidade from entidades where entidades"".""cd_en...
                                                             ^
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", (select nm_entidade from entidades where entidades"".""cd_entidade = editais"".""cd_entidade) AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:15:38 --- ERROR: Database_Exception [ 0 ]: ERRO:  esquema "select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", ("select nm_entidade from entidades where entidades"."cd_entidade = editais"."cd_entidade") AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:15:38 --- STRACE: Database_Exception [ 0 ]: ERRO:  esquema "select nm_entidade from entidades where entidades" não existe
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", ("select nm_entidade from entidades where entidades"."cd_entidade = editais"."cd_entidade") AS "nm_entidade" FROM "editais" WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:18:15 --- ERROR: Database_Exception [ 0 ]: ERRO:  referência à coluna "cd_entidade" é ambígua
LINE 1: SELECT COUNT(*) AS "quantidade", "cd_entidade", "nm_entidade...
                                         ^
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "nm_entidade" AS "nm_entidade" FROM "editais" JOIN "entidades" ON ("entidades"."cd_entidade" = "editais"."cd_entidade") WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:18:15 --- STRACE: Database_Exception [ 0 ]: ERRO:  referência à coluna "cd_entidade" é ambígua
LINE 1: SELECT COUNT(*) AS "quantidade", "cd_entidade", "nm_entidade...
                                         ^
 [ SELECT COUNT(*) AS "quantidade", "cd_entidade", "nm_entidade" AS "nm_entidade" FROM "editais" JOIN "entidades" ON ("entidades"."cd_entidade" = "editais"."cd_entidade") WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:18:32 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "entidades.nm_entidade" deve aparecer na cláusula GROUP BY ou ser utilizada em uma função de agregação
 [ SELECT COUNT(*) AS "quantidade", "editais"."cd_entidade", "nm_entidade" AS "nm_entidade" FROM "editais" JOIN "entidades" ON ("entidades"."cd_entidade" = "editais"."cd_entidade") WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:18:32 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "entidades.nm_entidade" deve aparecer na cláusula GROUP BY ou ser utilizada em uma função de agregação
 [ SELECT COUNT(*) AS "quantidade", "editais"."cd_entidade", "nm_entidade" AS "nm_entidade" FROM "editais" JOIN "entidades" ON ("entidades"."cd_entidade" = "editais"."cd_entidade") WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:20:45 --- ERROR: Database_Exception [ 0 ]: ERRO:  esquema "editais" não existe
 [ SELECT COUNT(*) AS "quantidade", "editais"."cd_entidade", "nm_entidade" AS "nm_entidade" FROM "editais" JOIN "entidades" ON ("entidades"."cd_entidade" = "editais"."cd_entidade") WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade, entidades"."nm_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:20:45 --- STRACE: Database_Exception [ 0 ]: ERRO:  esquema "editais" não existe
 [ SELECT COUNT(*) AS "quantidade", "editais"."cd_entidade", "nm_entidade" AS "nm_entidade" FROM "editais" JOIN "entidades" ON ("entidades"."cd_entidade" = "editais"."cd_entidade") WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade, entidades"."nm_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:21:57 --- ERROR: Database_Exception [ 0 ]: ERRO:  permissão negada para relação editais
 [ SELECT COUNT(*) AS "quantidade", "editais"."cd_entidade", "nm_entidade" AS "nm_entidade" FROM "editais" JOIN "entidades" ON ("entidades"."cd_entidade" = "editais"."cd_entidade") WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade", "entidades"."nm_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 10:21:57 --- STRACE: Database_Exception [ 0 ]: ERRO:  permissão negada para relação editais
 [ SELECT COUNT(*) AS "quantidade", "editais"."cd_entidade", "nm_entidade" AS "nm_entidade" FROM "editais" JOIN "entidades" ON ("entidades"."cd_entidade" = "editais"."cd_entidade") WHERE "dt_inicio_disponivel" = ('2012/04/28') AND "st_cancelado"  '''S''' AND "st_suspenso" = '''N''' GROUP BY "editais"."cd_entidade", "entidades"."nm_entidade" ORDER BY "nm_entidade" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:22:58 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 32 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-04-28 10:22:58 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 32 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\apache2.2\ht...', 28, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(32): Kohana_View::factory('main', Object(Database_PostgreSQL_Result))
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:24:18 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 32 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-04-28 10:24:18 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 32 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\apache2.2\ht...', 28, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(32): Kohana_View::factory('main', Object(Database_PostgreSQL_Result))
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:25:10 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 32 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-04-28 10:25:10 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php on line 32 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\apache2.2\ht...', 28, Array)
#1 C:\apache2.2\htdocs\licitacao\application\classes\controller\main.php(32): Kohana_View::factory('main', Object(Database_PostgreSQL_Result))
#2 [internal function]: Controller_Main->action_index()
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-28 10:25:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 57 ]
2012-04-28 10:25:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:26:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 66 ]
2012-04-28 10:26:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:27:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: data_atual ~ APPPATH\views\main.php [ 55 ]
2012-04-28 10:27:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: data_atual ~ APPPATH\views\main.php [ 55 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 55, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-28 10:28:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\main.php [ 5 ]
2012-04-28 10:28:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\main.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:29:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: data_atual ~ APPPATH\views\main.php [ 55 ]
2012-04-28 10:29:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: data_atual ~ APPPATH\views\main.php [ 55 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 55, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-28 10:30:17 --- ERROR: ErrorException [ 1 ]: Call to undefined function buscaEntidades() ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:30:17 --- STRACE: ErrorException [ 1 ]: Call to undefined function buscaEntidades() ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:30:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:30:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:31:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:31:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:32:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:32:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:33:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:33:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:33:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:33:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:34:08 --- ERROR: ErrorException [ 1 ]: Call to undefined function buscarEntidades() ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:34:08 --- STRACE: ErrorException [ 1 ]: Call to undefined function buscarEntidades() ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:35:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:35:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:36:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:36:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:37:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:37:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:39:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:39:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:40:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:40:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:41:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\main.php [ 34 ]
2012-04-28 10:41:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\main.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:41:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\main.php [ 34 ]
2012-04-28 10:41:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\main.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:41:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:41:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:41:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 10:41:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 10:42:23 --- ERROR: ErrorException [ 1 ]: Call to undefined function dataAtual() ~ APPPATH\views\main.php [ 51 ]
2012-04-28 10:42:23 --- STRACE: ErrorException [ 1 ]: Call to undefined function dataAtual() ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 17:20:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\main.php [ 34 ]
2012-04-28 17:20:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\main.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 17:28:02 --- ERROR: ErrorException [ 1 ]: Call to undefined function dataAtual() ~ APPPATH\views\main.php [ 51 ]
2012-04-28 17:28:02 --- STRACE: ErrorException [ 1 ]: Call to undefined function dataAtual() ~ APPPATH\views\main.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 17:28:39 --- ERROR: ErrorException [ 1 ]: Call to undefined function buscarEntidades() ~ APPPATH\views\main.php [ 72 ]
2012-04-28 17:28:39 --- STRACE: ErrorException [ 1 ]: Call to undefined function buscarEntidades() ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 17:29:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 17:29:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 17:29:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 17:29:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 17:33:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 17:33:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 18:39:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 18:39:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:34:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 21:34:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:35:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 21:35:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:35:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 21:35:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:35:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 21:35:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:39:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 21:39:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:40:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
2012-04-28 21:40:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:41:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
2012-04-28 21:41:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 96, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-28 21:42:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
2012-04-28 21:42:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 96, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-28 21:42:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\main.php [ 99 ]
2012-04-28 21:42:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\main.php [ 99 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:43:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\main.php [ 99 ]
2012-04-28 21:43:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\main.php [ 99 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:43:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
2012-04-28 21:43:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 96, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-28 21:43:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\main.php [ 116 ]
2012-04-28 21:43:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\main.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:44:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\main.php [ 116 ]
2012-04-28 21:44:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\main.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 21:44:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
2012-04-28 21:44:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 96, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-28 21:45:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
2012-04-28 21:45:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\main.php [ 96 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 96, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-28 22:03:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 94 ]
2012-04-28 22:03:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 22:07:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 122 ]
2012-04-28 22:07:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 122 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 22:08:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\main.php [ 133 ]
2012-04-28 22:08:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\main.php [ 133 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 22:08:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\main.php [ 154 ]
2012-04-28 22:08:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\views\main.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 22:10:23 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH\views\main.php [ 161 ]
2012-04-28 22:10:23 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH\views\main.php [ 161 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 23:12:53 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH\views\main.php [ 161 ]
2012-04-28 23:12:53 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Database_Query_Builder_Select as array ~ APPPATH\views\main.php [ 161 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 23:13:50 --- ERROR: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para integer: "select 
			edital.editais.cd_modalidade
		from 
			edital.editais
		where 
			cd_entidade= :cd_entidade 
			and dt_fim_disponivel >= 2012/04/28 
			and st_cancelado  'S' 
			and st_suspenso = 'N' 
		group by
			edital.editais.cd_modalidade"
LINE 1: ...stros" FROM "modalidades" WHERE "cd_modalidade" IN ('select 
                                                               ^
 [ SELECT COUNT(*) AS "registros" FROM "modalidades" WHERE "cd_modalidade" IN ('select 
			edital.editais.cd_modalidade
		from 
			edital.editais
		where 
			cd_entidade= :cd_entidade 
			and dt_fim_disponivel >= 2012/04/28 
			and st_cancelado  ''S'' 
			and st_suspenso = ''N'' 
		group by
			edital.editais.cd_modalidade') ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 23:13:50 --- STRACE: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para integer: "select 
			edital.editais.cd_modalidade
		from 
			edital.editais
		where 
			cd_entidade= :cd_entidade 
			and dt_fim_disponivel >= 2012/04/28 
			and st_cancelado  'S' 
			and st_suspenso = 'N' 
		group by
			edital.editais.cd_modalidade"
LINE 1: ...stros" FROM "modalidades" WHERE "cd_modalidade" IN ('select 
                                                               ^
 [ SELECT COUNT(*) AS "registros" FROM "modalidades" WHERE "cd_modalidade" IN ('select 
			edital.editais.cd_modalidade
		from 
			edital.editais
		where 
			cd_entidade= :cd_entidade 
			and dt_fim_disponivel >= 2012/04/28 
			and st_cancelado  ''S'' 
			and st_suspenso = ''N'' 
		group by
			edital.editais.cd_modalidade') ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(134): Kohana_Database_Query->execute()
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#8 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_Website->after()
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#15 {main}
2012-04-28 23:34:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 131 ]
2012-04-28 23:34:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 131 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 23:35:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 132 ]
2012-04-28 23:35:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 132 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-28 23:45:32 --- ERROR: Database_Exception [ 0 ]: ERRO:  permissão negada para relação modalidades
 [ SELECT COUNT(*) AS "registros" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '2012/04/28' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-28 23:45:32 --- STRACE: Database_Exception [ 0 ]: ERRO:  permissão negada para relação modalidades
 [ SELECT COUNT(*) AS "registros" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '2012/04/28' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(131): Kohana_Database_Query->execute()
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#8 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Template_Website->after()
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#15 {main}
2012-04-28 23:46:06 --- ERROR: ErrorException [ 8 ]: Undefined index: registros ~ APPPATH\views\main.php [ 133 ]
2012-04-28 23:46:06 --- STRACE: ErrorException [ 8 ]: Undefined index: registros ~ APPPATH\views\main.php [ 133 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(133): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\apache2.2\ht...', 133, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-28 23:48:09 --- ERROR: ErrorException [ 8 ]: Undefined index: registros ~ APPPATH\views\main.php [ 133 ]
2012-04-28 23:48:09 --- STRACE: ErrorException [ 8 ]: Undefined index: registros ~ APPPATH\views\main.php [ 133 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(133): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\apache2.2\ht...', 133, Array)
#1 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\apache2.2\htdocs\licitacao\application\views\template\website.php(22): Kohana_View->__toString()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(61): include('C:\apache2.2\ht...')
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\view.php(343): Kohana_View::capture('C:\apache2.2\ht...', Array)
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\apache2.2\htdocs\licitacao\application\classes\controller\template\website.php(40): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Template_Website->after()
#10 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#14 {main}