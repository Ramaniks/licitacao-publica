<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-07 21:49:00 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
2012-05-07 21:49:00 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php(81): Kohana_ORM->find_all()
#1 [internal function]: Controller_Edital->action_manutencao()
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edital))
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-07 21:49:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 112 ]
2012-05-07 21:49:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 112 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\edital\form.php(112): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 112, Array)
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
2012-05-07 21:54:12 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 112 ]
2012-05-07 21:54:12 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 112 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\edital\form.php(112): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 112, Array)
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
2012-05-07 21:54:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 112 ]
2012-05-07 21:54:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 112 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\edital\form.php(112): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 112, Array)
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
2012-05-07 21:56:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 114 ]
2012-05-07 21:56:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 114 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\edital\form.php(114): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 114, Array)
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
2012-05-07 21:57:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 117 ]
2012-05-07 21:57:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\edital\form.php [ 117 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\edital\form.php(117): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\apache2.2\ht...', 117, Array)
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
2012-05-07 21:58:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: cd_edital ~ APPPATH\views\edital\form.php [ 148 ]
2012-05-07 21:58:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: cd_edital ~ APPPATH\views\edital\form.php [ 148 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\views\edital\form.php(148): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\apache2.2\ht...', 148, Array)
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
2012-05-07 22:04:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_lancarEditais' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2012-05-07 22:04:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_lancarEditais' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-07 22:06:35 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\edital.php [ 101 ]
2012-05-07 22:06:35 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\edital.php [ 101 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php(101): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\apache2.2\ht...', 101, Array)
#1 [internal function]: Controller_Edital->action_save()
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edital))
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-07 22:07:11 --- ERROR: ErrorException [ 8 ]: Undefined index: cd_edital ~ APPPATH\classes\controller\edital.php [ 101 ]
2012-05-07 22:07:11 --- STRACE: ErrorException [ 8 ]: Undefined index: cd_edital ~ APPPATH\classes\controller\edital.php [ 101 ]
--
#0 C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php(101): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\apache2.2\ht...', 101, Array)
#1 [internal function]: Controller_Edital->action_save()
#2 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edital))
#3 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-07 22:08:44 --- ERROR: Database_Exception [ 0 ]: ERRO:  duplicar valor da chave viola a restrição de unicidade "pk_editais"
DETAIL:  Chave (cd_editais)=(3) já existe.
 [ INSERT INTO "editais" ("cd_etapa", "nr_ano", "dt_abertura", "hr_abertura", "ds_objeto", "st_edital_pago", "nr_edital") VALUES ('1', '2013', '2012-05-24', '10:00:00', 'Licitação primeira', 'N', '10') ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
2012-05-07 22:08:44 --- STRACE: Database_Exception [ 0 ]: ERRO:  duplicar valor da chave viola a restrição de unicidade "pk_editais"
DETAIL:  Chave (cd_editais)=(3) já existe.
 [ INSERT INTO "editais" ("cd_etapa", "nr_ano", "dt_abertura", "hr_abertura", "ds_objeto", "st_edital_pago", "nr_edital") VALUES ('1', '2013', '2012-05-24', '10:00:00', 'Licitação primeira', 'N', '10') ] ~ SYSPATH\classes\kohana\database\postgresql.php [ 192 ]
--
#0 C:\apache2.2\htdocs\licitacao\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "ed...', false, Array)
#1 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 C:\apache2.2\htdocs\licitacao\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 C:\apache2.2\htdocs\licitacao\application\classes\controller\edital.php(112): Kohana_ORM->save()
#4 [internal function]: Controller_Edital->action_save()
#5 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Edital))
#6 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\apache2.2\htdocs\licitacao\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\apache2.2\htdocs\licitacao\index.php(109): Kohana_Request->execute()
#9 {main}