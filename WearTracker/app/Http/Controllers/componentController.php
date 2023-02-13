<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\components;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
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
      $image = DB::table('parents')->where('id', request('bikeid'))->value('image_path'); //identify orphan
      // ddd($image);
      //used to store the user id of the post the user wants to delete
      $postauthorid = Parents::where('User_id', $currentuser)->find(request('bikeid'))->User_id; //this will throw an error if the user isnt the owner
      //only delete the userid if the current signed in user owns the content
      if ($currentuser == $postauthorid) {
        Storage::delete("public/" . $image); //delete orphans
        Storage::delete($image); //delete orphans
        
        Parents::where('id', request('bikeid'))->delete();
        return redirect('dashboard');
      } else {
        return redirect('/dashboard');
      }
    }

    public function viewbike(){
      $bikeid = request('bikeid');
      $parents = Parents::all()->where('User_id', Auth::user()->id);
      $parents = Parents::all()->where('id', $bikeid);
      return view("view")->with(array('parents'=>$parents));
    }

    


    public function addpart()
    {
      // var_dump(request()->all());
       $parents = Parents::all()->where('User_id', Auth::user()->id);
          $attributes = request()->validate([
             'Parent_Id' => 'required|max:255',
              'Component_brand' => 'required|max:255',
             'Component_model' => 'required|max:255',
              'Component_info' => 'required|max:100',
             'Component_year' =>'required|max:500',
             'Component_creationdate' => 'required|max:255',
             'Component_miles' => 'required|max:100',
            'Component_hours' =>'required|max:100'
      ]); 
    
     components::create($attributes);
    //   return redirect('/addpart');
    }


}
;