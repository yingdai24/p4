<?php

class BaseController extends Controller {

	public function __construct() {

		# all routes submitted via POST to have the csrf before filter.
		$this->beforeFilter('csrf', array('on' => 'post'));

	}

}
