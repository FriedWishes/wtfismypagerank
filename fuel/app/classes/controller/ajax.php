<?php

class Controller_Ajax extends Controller_Rest {

	public function post_pagerank()
	{
		sleep(1);

		$domain = \Input::post('domain');

		if(empty($domain))
		{
			return $this->response(array(
				'message' => 'What? You didn\'t enter anything!',
			));
		}

		if(strpos($domain, 'http') !== 0)
		{
			$domain = 'http://'.$domain;
		}

		if(!filter_var($domain, FILTER_VALIDATE_URL))
		{
			return $this->response(array(
				'message' => 'You didn\'t enter a valid domain!',
			));
		}

		$pagerank = Google\Pagerank::check($domain);

		return $this->response(array(
			'message' => 'Your page rank is: '.(int) $pagerank.' <span>out of</span> 10',
		));
	}
}

/* End of file ajax.php */