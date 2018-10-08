<?php

if (!file_exists("../model/FiLeExampleModel.php"))
{
	die("<h2>ER101: File needed does not exists, please contact IT Support</h2>");
}
else
{
	require_once("../model/FileExampleModel.php");
}


class FileExampleController {
	
	private $model;
	
	public function __construct()
	{
		$this->model = new FileExampleModel();
	}
	
	public function showTextFile($fileName)
	{
		return $this->model->showTextFile($fileName);
	}
	
	public function saveFile($fileName, $content)
	{
		return $this->model->saveFile($fileName, $content);
	}
	
	public function deleteFile($fileName)
	{
		return $this->model->deleteFile($fileName);
	}
	
	public function showXMLFile($fileName)
	{
		return $this->model->showXMLFile($fileName);
	}
	
	public function __destruct()
	{
		$this->model = NULL;
	}
	
}