<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use App\Link;
use \Input;
class linksController extends Controller {

	//

	public function create(){
		return view('links.create');
	}

	public function store(){
		/*$link = Link::where('url',Input::get('url'))->first();
		if(!$link){
			$link = Link::create(['url'=> Input::get('url')]);
		}*/
		$link = Link::firstOrCreate(['url'=> Input::get('url')]);
		
		return view('links.success',compact('link'));
	}

	public function show($id)
	{
		$link = Link::findOrFail($id);
		//return new RedirectResponse($link->url);
		return redirect($link->url,301);
	}

}
