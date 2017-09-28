<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\email;
use App\Fileupload;
use App\Filemodulo;
use Mail;
use vendor\sendgrid;
use DB;
use Illuminate\Http\Request;

class WelcomeController extends Controller {


	public function __construct()
	{
	   $this->middleware('guest');
	}

	public function index()
	{
					return view('welcome');
	}
	
	public function cadastro(){
		
	return view('contato/cadastro');

}	



}


