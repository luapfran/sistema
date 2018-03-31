<?php
	
	namespace util;
	
	class Regex
	{
		const FIRSTNAME = "/^\w{2,}$/";
		const LASTNAME = "/^\w{2,}$/";
		const EMAIL = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/";
		const NICKNAME = "/^\w{4,}$/";
		const PASSWORD = "/^\w{6,}$/";
		const TYPE_IMAGE = "/image*/";
		
		public static function validate($data, $pattern, $message = '')
		{
			if (!preg_match($pattern, $data)) {
				throw new \Exception($message ?: "Falha de validação do campo {$data}.");
			}
		}
	}