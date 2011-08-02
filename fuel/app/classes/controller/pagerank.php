<?php

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_Pagerank extends Controller_Template {

	/**
	 * The index action.
	 * 
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		$this->template->content = View::factory('pagerank/form');
	}

	/**
	 * The 404 action for the application.
	 * 
	 * @access  public
	 * @return  void
	 */
	public function action_404()
	{
		$this->response->status = 404;
		$this->template->set_global('title', '404 Page Not Found');
		$this->template->content = View::factory('pagerank/404');
	}
}

/* End of file welcome.php */