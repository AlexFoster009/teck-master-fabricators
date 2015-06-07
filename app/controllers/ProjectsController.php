<?php 


class ProjectsController extends BaseController {



public function index() {


	return View::make('projects.index');
	



}

public function staircases() {



	return View::make('projects.staircases');
}

public function interiorhandrails() {



	return View::make('projects.interior-handrails');
}



public function glasshandrails() {



	return View::make('projects.glass-handrails');
}

public function countertops() {



	return View::make('projects.countertops');
}

public function entrygates() {



	return View::make('projects.entry-gates');
}



public function customfab() {



	return View::make('projects.custom-fabrication');
}

public function furniture() {



	return View::make('projects.furniture');
}
}