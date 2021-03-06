<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory;
use Illuminate\Http\Request;
use Log;/* to tail log to the terminal*/

class PagesController extends Controller {
	public function index()
	{
		return view('pages.home');
	}
	public function about()
	{
		return view('pages.about');;
	}
	public function contact()
	{
		return view('pages.contact');;
	}
	public function product()
	{
		return view('pages.product');
	}

}
