<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    
    public function index( Request $request)
    {

        if ($request->ajax()) {
            $data = User::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){


                     
       
                            $btn = '<a id="editbtn" data-id="'.$data->id.'" class="edit btn btn-info btn-sm m-2">Edit</a>';
                           
                           $btn = $btn.'<a href="/users/delete/'.$data->id.'"  class="delete btn btn-danger btn-sm m-2">Delete</a>';
         
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
      

        
        return view('index');
    }

    public function store( Request $request)
    {

        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;

        $users->save();

        return redirect()->back();


    }

    public function update(Request $request)
    {
    
        //dd($request->all());
        $id=$request->hidden_id;
        $users=User::FindOrFail($id);
        // $users->name=$request->name;
        // $users->email=$request->email;
        // $users->update();
        
         $users->update($request->all());

        return response()->json("Data updated successfully!!");
    }

    public  function edit($id,Request $request)
    {
        if (request()->ajax()){
            $data=User::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }
    

    
    public function delete($id)
    {
        //dd("ok");

        $users=User::FindOrFail($id);
        $users->delete();
        return redirect()->back();


    }


    public function anyData()
    
    {


         return Datatables::of(User::query())->make(true);
    }




}
