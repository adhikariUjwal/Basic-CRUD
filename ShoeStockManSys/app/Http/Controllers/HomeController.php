<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Shoe;

class HomeController extends Controller
{   
    //This function calls home.blade.php from view folder and sends it for routing.
    public function index()
    {
        return view('home');
    }

    //This function calls login.blade.php from view folder and sends it for routing.
    public function login()
    {
        return view('login');
    }

    //function for pulling data form and form and sending it to database.
    public function upload(Request $request)
    {   
        //$shoeVariable is just a vraible
        $shoeVariable = new shoe;//"shoes" is database table name
        $shoeVariable->name=$request->name;
        $shoeVariable->size=$request->size;
        $shoeVariable->color=$request->color;
        $shoeVariable->quantity=$request->quantity;

        //saves the form pulletd data to database.
        $shoeVariable->save();

        //returns to same page after submitting.
        return redirect()->back()->with('message','Shoe Added! Please Check "List Shoes"');
    }

    public function view()
    {
        $data = shoe::all();

        return view('display',compact('data'));
    }

    //This functions DELETES the data.
    public function delete($id)
    {
        $data=shoe::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function update_view($id)
    {
        // 
        $shoe = shoe::find($id);

        return view('update_page',compact('shoe'));
    }

    public function update(Request $request,$id)
    {
        $shoeVariable = shoe::find($id);

        $shoeVariable->name=$request->name;
        $shoeVariable->size=$request->size;
        $shoeVariable->color=$request->color;
        $shoeVariable->quantity=$request->quantity;

        $shoeVariable->save();

        return redirect()->back()->with('message','Details Updated! Please Check "List Shoes"');

    }
}
