<?php

	namespace io;

	class FileWriter
	{
		public function save($file, $location)
		{
			if(!$file->isValid()){
				throw new \Exception('Arquivo inválido.');
			}

			if (!move_uploaded_file($file->getLocation(), "{$location}/{$file->getName()}")) {
				throw new \Exception('Falha ao gravar arquivo.');
			}
		}
	}