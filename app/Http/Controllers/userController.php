<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::paginate(15);
        return view('users.display',['modelUser' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add',['title' => 'Add User']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  $this->validate(request(),[
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        $data['password'] = bcrypt($data['password']);
    
        $op = User::create($data);
    
        if($op){
            echo "data inserted";
        }else{
            echo "Error in insertion"; 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('users.edit',['data' => $data,'title' => 'Edit Users']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =  $this->validate(request(),[
            'name'     => 'required',
            'email'    => 'required|email',
        ]);
      
        $op = User::where('id',$id)->update($data);
      
           if($op){
           $message =  'updated';
           }else{
           $message =  'error in update';
           }
      
           session()->flash('Message',$message);

           return redirect('modelUser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $op =  User::where('id',$id)->delete();

        if($op){
            echo "user Deleted";
        }else{
            echo "error in deleting user";
        }
        return redirect(url('modelUser'));
    }

    public function login(){
     
        return view('users.login',['title' => 'Login']);
      
    }

    public function doLogin(Request $request){

        $data = $this->validate(request(),[
          'email'    => 'required|email',
          'password' => 'required|min:6',
        ]);

        $check = auth()->attempt($data,true);
        if($check){
            return redirect(url('modelUser'));
        }else{
            session()->flash('Message','Password || email Invalid');
            return redirect(url('Login'));
        }
    }
}
