<?php

class JsonDB {

	protected $filename;
	protected $json;
	
	public function __construct($filename) {
		$this->filename = $filename;
		$this->json = json_decode(file_get_contents($filename), true);
	}

	public function get($key){
		return $this->json[$key];
	}
	public function all(){
		return $this->json;
	}

	public function add($key, $value){
		$this->json[$key] = $value;
	}

	public function save(){
		return file_put_contents($this->filename, json_encode($this->json));
	}
}