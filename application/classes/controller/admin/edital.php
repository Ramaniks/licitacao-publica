<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Edital extends Controller_Template_Website {

    public function action_index1()
    {
		//$this->template->title = 'Listar Editais';
		//$dataEditais = DB::select(array('cd_editais','cd_etapa'))->from('editais')->execute()->as_array();
		//$dataEditais =  ORM::factory('editais')->order_by('cd_editais')->find_all()->as_array();
		//$this->template->content = View::factory('admin/listar', $dataEditais); // application/views/admin/form.php
		//this->list();
	}

	public function action_carregar($editando = null)    
	{
		$this->template->title = 'Cadastrar Editais';
		$dataEditais = DB::select()->from('editais')->where('cd_editais','=',$editando)->execute()->as_array();
		$this->template->content = View::factory('edital/manutencao', $dataEditais); // application/views/admin/form.php
	}
	
	public function action_post()    
	{
		$envio = Model::factory('lancarEditais');
		// Validando o arquivo
		$validate = $envio->check_upload($_FILES);

		if ($validate->check())		
		{				
			// Salvando o arquivo no servidor remoto.			
			$filename = upload::save($_FILES['file']);
			//Lendo o arquivo e atualizando a tabela;
			echo $envio->reading_file($filename, $_POST['exchange'], $_POST['period'], $_POST['stockbroker']);

			echo "Upload realizado com sucesso.";
		} else {
			echo "Erro no processo de validação do arquivo.";
		}	       
	}	 

	public function action_lista(){
        //Seleciona todos os posts
		$this->template->title = 'Listar Editais';
		$page_nr = $this->request->param('page_nr');
        $editais = ORM::Factory('editais')->find_all()->as_array();
               
		$pagination = new Pagination(array(
            'page_nr' => $page_nr,
            'items_per_page' => 10,
            'total_items' => $editais,
            'base_url' => 'edital/lista',
            'uri_segment' => 'page',
		));
		$items = $pagination->query('editais');
		//$this->template->pagination = $pagination->get_view();
        //Seleciona a View de lista de posts,
        //une o objetos Post selecionado acima a view
        //$this->template->content = View::Factory('edital/list', $posts);
		$content = View::Factory('edital/list')
			->bind(<posts>, $posts);
        $this->template->content = $content;
        //$view->set('editais', $posts);
               
               
                //Envia a renderizacao da view ao browser
                //$this->template->content = $view;
                //ou
                //echo $view->render();
                       
        }	
	
        public function action_form($id=NULL){
                               
				$this->template->title = 'Listar Editais';
                //Seleciona um objeto Post através do ORM,
                //se nao existir id trás um objeto em branco          
                $data = ORM::Factory('editais', $id)->find_all()->as_array();
				echo Database::instance()->last_query();
               
                //Seleciona a View do formulario de posts,
                //une o objeto Post selecionado acima a view
                $this->template->content = View::Factory('edital/form', $data);
                //$view = View::Factory('edital/form');
                //$view->set('edital', $data);
               
                //Envia a renderizacao da view ao browser
                //$this->template->content = $view;
                //ou
                //echo $view->render();
        }	
		
		
       public function action_save(){
               
                //Seleciona um objeto Post através do ORM,
                //se nao existir id trás um objeto em branco          
                $post = ORM::Factory('editais', $_POST['id']);
               
                //Remove a chave id, do POST,
                //do contrario ele tentara alterar este campo
                unset($_POST['id']);
               
                //seta os valores do objeto com
                //os valores passados pelo $_POST
                $post->values($_POST);
               
                //sava os dados do objeto
                $post->save();
               
                //redireciona para o controller blog
                $this->request->redirect('edital/list');
                               
        }		
}