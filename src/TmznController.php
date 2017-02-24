<?php

namespace Avanoz\Tmzn;

#use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TmznController extends Controller
{
    //
	public function index($timezone = NULL) {
		$current_time = ($timezone) ? Carbon::now(str_replace('-', '/', $timezone)) : Carbon::now();
		return view('timezones::time', compact('current_time'));
	}
}
