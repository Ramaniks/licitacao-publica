<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template_Website {

	public function dataAtual(){
		$data_servidor = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
		$dia = gmdate("d", $data_servidor);
		$mes = gmdate("m", $data_servidor);
		$ano = gmdate("Y", $data_servidor);
		return $ano."/".$mes."/".$dia;
	}

    public function action_index()
    {
		$this->template->title = 'Licitação Publica';
		/*dt_inicio_disponivel <= TO_DATE( :data_atual, 'YYYY/MM/DD') 
	and dt_fim_disponivel >= TO_DATE( :data_atual, 'YYYY/MM/DD') 
	and st_cancelado <> 'S' 
	and st_suspenso = 'N' "*/
       $this->template->content = View::factory('main'); // application/views/main.php
    }

        // this action is using another template but using the same Controller_Template_Website
    public function action_showinfooverlay()
    {
        $this->template = 'template/overlay';
        parent::before();
        $this->template->title = 'Log in';
        $this->template->content = View::factory('main'); // application/views/main.php
    }
	
	public function buscarEntidades($entidade = null)
	{	
		$data_servidor = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
		$dia = gmdate("d", $data_servidor);
		$mes = gmdate("m", $data_servidor);
		$ano = gmdate("Y", $data_servidor);
		$data_atual = $ano."/".$mes."/".$dia;

		$dataEntidades = DB::select(array('COUNT("*")', 'quantidade'),	array('editais.cd_entidade', 'cd_entidade'), 
	             array('nm_entidade', 'nm_entidade'))
		  ->from('editais')		 
		  ->join('entidades')->on('entidades.cd_entidade', '=', 'editais.cd_entidade')
		  ->where("dt_inicio_disponivel", "<=", array("$data_atual"))
		  ->and_where("dt_fim_disponivel", ">=", array("$data_atual"))
		  ->and_where("st_cancelado", "<>", array('S'))
		  ->and_where("st_suspenso", "=", array('N'))
		  ->group_by("editais.cd_entidade", "entidades.nm_entidade")
		  ->order_by('nm_entidade')
		  ->execute()
		  ->as_array();
		  
        //echo '<ul>';
        /*foreach($dataEntidades as $row)
        {
            echo '<li>'.$row['quantidade'].":".$row['cd_entidade'].":".$row['nm_entidade'].'</li>';
        }
        echo '</ul>';		
 		*/
		/*foreach($menu as $data) {
			$data->entidades = $this->buscarSubMenu($data->menu_id);
		}*/
		return $dataEntidades;
	}
	
}