<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Auth;


class componentController extends Controller
{
 
  public function addnewparent()
  {

      $attributes = request()->validate([
          'User_id' => 'required|max:255',
          'Parent_brand' => 'required|max:255',
          'Parent_model' => 'required|max:255',
          'Parent_MY' => 'required|max:100',
          'Parent_info' =>'required|max:500',
          'Parent_serialnumber' => 'required',      
      ]);
      
   

    Parents::create($attributes);
    return redirect('/dashboard');
  }

}
;