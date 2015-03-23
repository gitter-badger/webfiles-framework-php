<?php

namespace simpleserv\webfilesframework\core\datasystem\file\format\image;

/**
 * Creates a QR-Code with help of the google charts api.
 * @author semo
 *
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