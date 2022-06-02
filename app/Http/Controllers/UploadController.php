<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;





class UploadController extends Controller
{
         public function uploads(Request $request)
    {

        $image = $request->file('image'); 
        $name_gen = $request->file->getClientOriginalName();
        $image->move("uploads/",$name_gen); 
        
      
    } 
    
        
}
