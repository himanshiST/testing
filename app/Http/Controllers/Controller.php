<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
namespace App\Http\Controllers;

class Controller extends BaseController
{
	
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	use Illuminate\Http\Request;
	 public function testfunction(Request $request)
    {
       {
        $data = $request->all(); // This will get all the request data.

        dd($data); // This will dump and die
		}
    }
}
