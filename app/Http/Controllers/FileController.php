<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class FileController extends Controller {

	public function getFile($filename)
	{

		$path = storage_path('app/private/uploads/' . $filename);

		if (!File::exists($path)) {
			abort(404);
		}

		return response()->file($path);
       
	}
}