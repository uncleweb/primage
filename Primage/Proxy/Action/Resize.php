<?php

/**
 *
 * @see http://code.google.com/p/dabase
 * @author Barbushin Sergey http://www.linkedin.com/in/barbushin
 *
 */
class Primage_Proxy_Action_Resize extends Primage_Proxy_Action_Abstract {
	
	protected $width;
	protected $height;
	protected $onlyBigger;

	public function __construct($width = null, $height = null, $onlyBigger = true) {
		$this->width = $width;
		$this->height = $height;
		$this->onlyBigger = $onlyBigger;
	}

	public function make(Primage $image) {
		$image->resize($this->width, $this->height, $this->onlyBigger);
	}
}