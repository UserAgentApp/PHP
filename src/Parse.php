<?php

namespace UserAgentApp\API;

use UserAgentApp\API\Base;

class Parse extends Base {
	const END_POINT = '/parse';

	/**
	 * Set the payload for the request
	 * 
	 * @param string $ua UA to parse
	 */
	public function setPayload($ua) {
		$this->payload = ['ua' => $ua];
	}

	/**
	 * Build the base API request URL for this end-point
	 * 
	 * @return String Complete API end-point URL
	 */
	protected function getRequestBase() {
		return self::HOST . self::END_POINT;
	}
}