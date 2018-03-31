<?php

	namespace http;

	use io\File;

	class Request
	{
		public static function get($key, $default = null)
		{
			if (isset($_POST[$key])) {
				return trim($_POST[$key]);
			}

			if (isset($_GET[$key])) {
				return trim($_GET[$key]);
			}

			return $default;
		}

		public static function file($key)
		{
			if (isset($_FILES[$key])) {
				return new File($_FILES[$key]['name'], $_FILES[$key]['tmp_name'],
					$_FILES[$key]['size'], $_FILES[$key]['type'], $_FILES[$key]['error']);
			}

			return new File(null, null, null, null, null);
		}
	}