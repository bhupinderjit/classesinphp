<?php
 
class Task{
	public $description ;
	public $completed= false;
	
	public function __construct($description){
		$this->description= $description;
	}
		public function complete(){
		return $this ->completed = true;
	}
	
	public function iscomplete(){
		return $this ->completed;
	}
}
$tasks=[
new Task('go to the store'),
new Task('go to the shop'),
new Task('clean the room')
];

$tasks[0]->complete();
require 'new.php';

?>