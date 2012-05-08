<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-29 00:03:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\main.php [ 151 ]
2012-04-29 00:03:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\main.php [ 151 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 00:03:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 334 ]
2012-04-29 00:03:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\main.php [ 334 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 00:14:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 133 ]
2012-04-29 00:14:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 133 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 00:15:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 133 ]
2012-04-29 00:15:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 133 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 10:09:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 74 ]
2012-04-29 10:09:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\views\main.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 10:14:13 --- ERROR: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para integer: "$cd_entidade"
LINE 1: ..._modalidade" FROM "editais" WHERE "cd_entidade" = '$cd_entid...
                                                             ^
 [ SELECT COUNT(*) AS "registros" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '$cd_entidade' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 10:14:13 --- STRACE: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para integer: "$cd_entidade"
LINE 1: ..._modalidade" FROM "editais" WHERE "cd_entidade" = '$cd_entid...
                                                             ^
 [ SELECT COUNT(*) AS "registros" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '$cd_entidade' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(104): Kohana_Database_Query->execute()
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
2012-04-29 10:16:17 --- ERROR: ErrorException [ 4096 ]: Object of class Database_PostgreSQL_Result could not be converted to string ~ APPPATH\views\main.php [ 104 ]
2012-04-29 10:16:17 --- STRACE: ErrorException [ 4096 ]: Object of class Database_PostgreSQL_Result could not be converted to string ~ APPPATH\views\main.php [ 104 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(104): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\apache2.2\ht...', 104, Array)
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
2012-04-29 10:17:13 --- ERROR: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para tipo date: "$data_atual"
LINE 1: ...RE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atu...
                                                             ^
 [ SELECT "cd_modalidade", "nm_modalidade", "nr_ordenacao" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ORDER BY "nr_ordenacao" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 10:17:13 --- STRACE: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para tipo date: "$data_atual"
LINE 1: ...RE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atu...
                                                             ^
 [ SELECT "cd_modalidade", "nm_modalidade", "nr_ordenacao" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ORDER BY "nr_ordenacao" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "cd_moda...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(124): Kohana_Database_Query->execute()
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
2012-04-29 10:17:53 --- ERROR: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para tipo date: "$data_atual"
LINE 1: ...RE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atu...
                                                             ^
 [ SELECT "cd_modalidade", "nm_modalidade", "nr_ordenacao" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ORDER BY "nr_ordenacao" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 10:17:53 --- STRACE: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para tipo date: "$data_atual"
LINE 1: ...RE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atu...
                                                             ^
 [ SELECT "cd_modalidade", "nm_modalidade", "nr_ordenacao" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ORDER BY "nr_ordenacao" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "cd_moda...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(124): Kohana_Database_Query->execute()
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
2012-04-29 10:18:59 --- ERROR: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para tipo date: "$data_atual"
LINE 1: ...RE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atu...
                                                             ^
 [ SELECT "cd_modalidade", "nm_modalidade", "nr_ordenacao" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ORDER BY "nr_ordenacao" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 10:18:59 --- STRACE: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para tipo date: "$data_atual"
LINE 1: ...RE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atu...
                                                             ^
 [ SELECT "cd_modalidade", "nm_modalidade", "nr_ordenacao" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ORDER BY "nr_ordenacao" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "cd_moda...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(124): Kohana_Database_Query->execute()
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
2012-04-29 10:19:35 --- ERROR: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para tipo date: "$data_atual"
LINE 1: ...RE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atu...
                                                             ^
 [ SELECT "cd_modalidade", "nm_modalidade", "nr_ordenacao" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ORDER BY "nr_ordenacao" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 10:19:35 --- STRACE: Database_Exception [ 0 ]: ERRO:  sintaxe de entrada é inválida para tipo date: "$data_atual"
LINE 1: ...RE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atu...
                                                             ^
 [ SELECT "cd_modalidade", "nm_modalidade", "nr_ordenacao" FROM "modalidades" WHERE "cd_modalidade" IN ((SELECT "editais"."cd_modalidade" FROM "editais" WHERE "cd_entidade" = '1' AND "dt_fim_disponivel" >= '$data_atual' AND "st_cancelado"  'S' AND "st_suspenso" = 'N' GROUP BY "editais"."cd_modalidade")) ORDER BY "nr_ordenacao" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "cd_moda...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(124): Kohana_Database_Query->execute()
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
2012-04-29 10:20:26 --- ERROR: ErrorException [ 8 ]: Undefined index: ds_modalidade ~ APPPATH\views\main.php [ 128 ]
2012-04-29 10:20:26 --- STRACE: ErrorException [ 8 ]: Undefined index: ds_modalidade ~ APPPATH\views\main.php [ 128 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(128): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\apache2.2\ht...', 128, Array)
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
2012-04-29 10:53:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH\views\main.php [ 154 ]
2012-04-29 10:53:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ')' ~ APPPATH\views\main.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 10:59:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: cd_modalidade ~ APPPATH\views\main.php [ 138 ]
2012-04-29 10:59:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: cd_modalidade ~ APPPATH\views\main.php [ 138 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 138, Array)
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
2012-04-29 11:00:15 --- ERROR: ErrorException [ 8 ]: Undefined index: registros ~ APPPATH\views\main.php [ 144 ]
2012-04-29 11:00:15 --- STRACE: ErrorException [ 8 ]: Undefined index: registros ~ APPPATH\views\main.php [ 144 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(144): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\apache2.2\ht...', 144, Array)
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
2012-04-29 11:00:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::inner_join() ~ APPPATH\views\main.php [ 157 ]
2012-04-29 11:00:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::inner_join() ~ APPPATH\views\main.php [ 157 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 11:00:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::inner_join() ~ APPPATH\views\main.php [ 157 ]
2012-04-29 11:00:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::inner_join() ~ APPPATH\views\main.php [ 157 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 11:02:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::inner_join() ~ APPPATH\views\main.php [ 157 ]
2012-04-29 11:02:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::inner_join() ~ APPPATH\views\main.php [ 157 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-29 11:02:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: cd_modalidade ~ APPPATH\views\main.php [ 159 ]
2012-04-29 11:02:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: cd_modalidade ~ APPPATH\views\main.php [ 159 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 159, Array)
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
2012-04-29 11:03:15 --- ERROR: Database_Exception [ 0 ]: ERRO:  relação "etapas" não existe
LINE 1: ...T "nm_etapa" AS "nr_registro" FROM "editais" JOIN "etapas" O...
                                                             ^
 [ SELECT "nm_etapa" AS "nr_registro" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "dt_fim_disponivel" >= ('2012/04/29') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 11:03:15 --- STRACE: Database_Exception [ 0 ]: ERRO:  relação "etapas" não existe
LINE 1: ...T "nm_etapa" AS "nr_registro" FROM "editais" JOIN "etapas" O...
                                                             ^
 [ SELECT "nm_etapa" AS "nr_registro" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "dt_fim_disponivel" >= ('2012/04/29') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 11:04:27 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna editais.cd_etapa não existe
LINE 1: ..."editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"....
                                                             ^
 [ SELECT "nm_etapa" AS "nr_registro" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "dt_fim_disponivel" >= ('2012/04/29') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 11:04:27 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna editais.cd_etapa não existe
LINE 1: ..."editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"....
                                                             ^
 [ SELECT "nm_etapa" AS "nr_registro" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "dt_fim_disponivel" >= ('2012/04/29') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 11:05:42 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "cd_edital" não existe
LINE 1: ...ancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital...
                                                             ^
 [ SELECT "nm_etapa" AS "nr_registro" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "dt_fim_disponivel" >= ('2012/04/29') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 11:05:42 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "cd_edital" não existe
LINE 1: ...ancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital...
                                                             ^
 [ SELECT "nm_etapa" AS "nr_registro" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "dt_fim_disponivel" >= ('2012/04/29') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 11:06:32 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "nr_registro" não existe
LINE 1: SELECT "nm_etapa", "nr_registro", "cd_edital", "nr_ano", "dt...
                           ^
 [ SELECT "nm_etapa", "nr_registro", "cd_edital", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "dt_fim_disponivel" >= ('2012/04/29') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 11:06:32 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "nr_registro" não existe
LINE 1: SELECT "nm_etapa", "nr_registro", "cd_edital", "nr_ano", "dt...
                           ^
 [ SELECT "nm_etapa", "nr_registro", "cd_edital", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "dt_fim_disponivel" >= ('2012/04/29') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 11:07:27 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "cd_edital" não existe
LINE 1: SELECT "nm_etapa", "cd_edital", "nr_ano", "dt_abertura", "hr...
                           ^
 [ SELECT "nm_etapa", "cd_edital", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 11:07:27 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "cd_edital" não existe
LINE 1: SELECT "nm_etapa", "cd_edital", "nr_ano", "dt_abertura", "hr...
                           ^
 [ SELECT "nm_etapa", "cd_edital", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 11:08:23 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "cd_edital" não existe
LINE 1: SELECT "nm_etapa", "cd_edital", "nr_ano", "dt_abertura", "hr...
                           ^
 [ SELECT "nm_etapa", "cd_edital", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 11:08:23 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "cd_edital" não existe
LINE 1: SELECT "nm_etapa", "cd_edital", "nr_ano", "dt_abertura", "hr...
                           ^
 [ SELECT "nm_etapa", "cd_edital", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 11:08:44 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "nr_ano" não existe
LINE 1: SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "h...
                                         ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 11:08:44 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "nr_ano" não existe
LINE 1: SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "h...
                                         ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 11:09:09 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "dt_abertura" não existe
LINE 1: SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "h...
                                                   ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 11:09:09 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "dt_abertura" não existe
LINE 1: SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "h...
                                                   ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 11:10:11 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "ds_objeto" não existe
LINE 1: ...rtura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto...
                                                             ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 11:10:11 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "ds_objeto" não existe
LINE 1: ...rtura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto...
                                                             ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 13:30:25 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "nm_edital" não existe
LINE 1: ...ntidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital...
                                                             ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 13:30:25 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "nm_edital" não existe
LINE 1: ...ntidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital...
                                                             ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 13:48:33 --- ERROR: Database_Exception [ 0 ]: ERRO:  coluna "cd_edital" não existe
LINE 1: ...ancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital...
                                                             ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-04-29 13:48:33 --- STRACE: Database_Exception [ 0 ]: ERRO:  coluna "cd_edital" não existe
LINE 1: ...ancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital...
                                                             ^
 [ SELECT "nm_etapa", "cd_editais", "nr_ano", "dt_abertura", "hr_abertura", "cd_entidade", "editais"."cd_modalidade", "ds_objeto", "nm_edital", "lk_edital", "nm_proposta", "lk_proposta", "st_edital_pago", "st_cancelado" FROM "editais" JOIN "etapas" ON ("etapas"."cd_etapa" = "editais"."cd_etapa") WHERE "cd_entidade" = ('1') AND "cd_modalidade" = ('1') AND "st_cancelado"  'S' AND "st_suspenso" = 'N' ORDER BY "cd_edital" ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "nm_etap...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\application\views\main.php(164): Kohana_Database_Query->execute()
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
2012-04-29 13:49:00 --- ERROR: ErrorException [ 8 ]: Undefined index: nr_registro ~ APPPATH\views\main.php [ 167 ]
2012-04-29 13:49:00 --- STRACE: ErrorException [ 8 ]: Undefined index: nr_registro ~ APPPATH\views\main.php [ 167 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(167): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\apache2.2\ht...', 167, Array)
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
2012-04-29 14:13:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: nm_modalidade_ ~ APPPATH\views\main.php [ 135 ]
2012-04-29 14:13:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: nm_modalidade_ ~ APPPATH\views\main.php [ 135 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\main.php(135): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 135, Array)
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