<?php

class Controller_Faq extends Controller_Template {

	public function action_index()
	{
		$this->template->set_global('title', 'Frequently Asked Questions');
		$this->template->content = View::factory('pagerank/faq');
	}
}

/* End of file faq.php */