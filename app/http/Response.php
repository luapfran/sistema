<?php

	namespace http;
	
	class Response
	{
		const STATUS_200 = 200;
		const STATUS_500 = 500;

		private $message;
		private $code;

		public function __construct()
		{
			$this->message = '';
			$this->code = 0;
		}

		public function setStatus($code, $message)
		{
			$this->code = $code;
			$this->message = $message;
		}

		public function resolve()
		{
			header("Content-type: application/json; charset=utf-8");

			echo json_encode(array("code" => $this->code,
				"message" => $this->message), 1);
		}
	}