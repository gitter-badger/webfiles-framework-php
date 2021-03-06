<?php

namespace simpleserv\webfilesframework\core\datasystem\file\format\image;

use simpleserv\webfilesframework\core\io\request\MPostHttpRequest;

/**
 * Creates a QR-Code with help of the google charts api.
 *
 * @author     simpleserv company < info@simpleserv.de >
 * @author     Sebastian Monzel < mail@sebastianmonzel.de >
 * @since      0.1.7
 */
class MQrCodeImage {
	
	public $text;
	
	public function __construct($text) {
		$this->text = $text;
	}
	
	public function setText($text) {
		$this->text = $text;
	}
	
	public function getImageResource() {
		
		Header("Content-type: image/png");
		
		$url = 'https://chart.googleapis.com/chart?chid=' . time();
		$data = array(
				'cht' => 'qr',
				'chs' => '300x300',
				'chl' => utf8_encode($this->text));
		
		$postRequest = new MPostHttpRequest($url, $data);
		$result = $postRequest->makeRequest();
		
		
		$resource = imagecreatefromstring($result);
		imagepng($resource);
		return $resource;
	}
	
}