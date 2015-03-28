<?php
class UserController{

	public function cont(){
		$object1 = new UserInterface();
		$content = $object1->process();
		$object2 = new UserInterface();
		$content .= $object2->process();
		$t = "<div title='div test' class='block'>$content</div>";
		return $t;
	}

}