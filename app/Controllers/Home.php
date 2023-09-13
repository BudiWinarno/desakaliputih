<?php namespace App\Controllers;
 
class Home extends BaseController
{
	public function index()
	{
		echo view('layout/headeradmin');
        return view('homepageadmin');
	}
    public function homeadmin()
	{
		echo view('layout/headeradmin');
        return view('homepageadmin');
	}
}