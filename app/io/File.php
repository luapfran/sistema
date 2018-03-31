<?php

	namespace io;

	class File
	{
		private $name;
		private $location;
		private $size;
		private $type;
		private $error;
		private $isValid;

		public function __construct($name, $location, $size, $type, $error)
		{
			$this->name = $name;
			$this->location = $location;
			$this->size = $size;
			$this->type = $type;
			$this->error = $error;
			$this->isValid = ($error == UPLOAD_ERR_OK) ? true : false;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getLocation()
		{
			return $this->location;
		}

		public function getSize()
		{
			return $this->size;
		}

		public function getType()
		{
			return $this->type;
		}

		public function getError()
		{
			return $this->error;
		}

		public function isValid()
		{
			return $this->isValid;
		}

		public function rename($newname)
		{
			$this->name = $newname . "." . pathinfo($this->name, PATHINFO_EXTENSION);
		}
	}