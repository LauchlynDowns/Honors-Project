<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class componentController extends Controller
{
 
  public function addnewparent()
  {

      $attributes = request()->validate([
          'User_id' => 'required|max:255',
          'image_path'=> 'image',
          'Parent_brand' => 'required|max:255',
          'Parent_model' => 'required|max:255',
          'Parent_MY' => 'required|max:100',
          'Parent_info' =>'required|max:500',
          'Parent_serialnumber' => 'required',    
      ]);

    $attributes['image_path'] = request()->file('filename')->store('public/bikeimages');
    $attributes['image_path'] = request()->file('filename')->store('bikeimages');
    Parents::create($attributes);
    return redirect('/dashboard');
  }

    public function deletebike()
      {
       //store current logged in user
      $currentuser = Auth::user()->id;
      //used to store the user id of the post the user wants to delete
      $postauthorid = Parents::where('User_id', $currentuser)->find(request('bikeid'))->User_id; //this will throw an error if the user isnt the owner
      
      //only delete the userid if the current signed in user owns the content
      if ($currentuser == $postauthorid) {
        Parents::where('id', request('bikeid'))->delete();
        
        return redirect('dashboard');
      } else {
        return redirect('/dashboard');
      }
    }



}
;