<?php

require_once(__ROOT__ . "controller/Controller.php");

class StudentsController extends Controller{
	public function insert() {
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$grade = $_REQUEST['grade'];
		$class = $_REQUEST['class'];

		$this->model->insertUser($name,$password,$grade,$class);
	}

	public function edit() {
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$grade = $_REQUEST['grade'];
		$class = $_REQUEST['class'];

		$this->model->editUser($name,$password,$grade,$class);
	}
	
	public function delete(){
		$this->model->deleteUser();
	}
}
?>