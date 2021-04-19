<?php

namespace App\Controllers;

class Maincontroller extends BaseController
{
	public function index()
	{
        echo view('templates/sidebar');
		echo view('main/home');
	}

    public function courses()
	{
        echo view('templates/sidebar');
		echo view('main/courses');
	}

	public function friends()
	{
        echo view('templates/sidebar');
		echo view('main/friends');
	}
}
