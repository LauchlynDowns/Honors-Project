<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\components;
use App\Models\Log;
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
      if(request()->file('filename') == NULL){
        Parents::create($attributes);
        return redirect('/dashboard');
      } else{
  $attributes['image_path'] = request()->file('filename')->store('public/bikeimages');
  $attributes['image_path'] = request()->file('filename')->store('bikeimages');
  Parents::create($attributes);
  return redirect('/dashboard');
      }}

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
      $components = components::all()->where('Parent_Id', $bikeid);
      $parents = Parents::all()->where('User_id', Auth::user()->id);
      $parents = Parents::all()->where('id', $bikeid);
      // return view("view")->with(array('parents'=>$parents), array('components'=>$components));
      return view('view')->with(['parents' => $parents, 'components' => $components]);
    }

    


    public function addpart()
    {
      var_dump(request()->all());
       $parents = Parents::all()->where('User_id', Auth::user()->id);
          $attributes = request()->validate([
             'Parent_Id' => 'required|max:255',
             'Component_type' => 'required|max:255',
              'Component_brand' => 'required|max:255',
             'Component_model' => 'required|max:255',
              'Component_info' => 'required|max:100',
             'Component_year' =>'required|max:500',
             'Component_creationdate' => 'required|max:255',
             'Component_miles' => 'required|max:100',
            'Component_hours' =>'required|max:100'
      ]); 
      components::create($attributes);
     return redirect('/dashboard');  
    }

public function newlog(){
 // return request()->all();
  $attributes = request()->validate([
    'Parent_Id' => 'required|max:255',
    'Log_type' => 'required|max:255',
     'Log_info' => 'required|max:500',
     'Log_mileage' => 'required|max:50',
     'Log_hours' => 'required|max:50'
]); 
$Parent = Parents::find(request('Parent_Id'));
$Parent->Parent_mileage = $Parent->Parent_mileage + request('Log_mileage');
$Parent->save();
//put mileage from request into variable
$mileage = request('Log_mileage');
$hours = request('Log_hours');
//get total number of components on bike
$count = components::where('Parent_Id', request('Parent_Id'))->count();
//put components into array that have the parent id
$components = components::where('Parent_Id', request('Parent_Id'))->get();
//loop for each component
 for ($c = 0; $c < $count; $c++) {
   $components[$c]->Component_miles = $components[$c]->Component_miles + $mileage;
   $components[$c]->Component_hours = $components[$c]->Component_hours + $hours;
   $components[$c]->save();
 }
 Log::create($attributes);
 return redirect('/dashboard');
}
};