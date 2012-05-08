<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Paginando extends Controller_Template_Website {

    public function action_index()
    {
        $page_nr = $this->request->param('page_nr');
        $total_items = ORM::factory('editais')->count_all();

        $pagination = new Pagination(array(
            'page_nr' => $page_nr,
            'items_per_page' => 10,
            'total_items' => $total_items,
            'base_url' => 'paginando/index',
            'uri_segment' => 'page',
        ));
        $items = $pagination->query('editais');
        
        $this->template->pagination = $pagination->get_view();
        $this->template->list = View::factory('paginando/paginar')
                ->bind('items', $items);
    }
