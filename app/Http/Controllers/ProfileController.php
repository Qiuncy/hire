<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('employee')->where('id',$id)->first();
        $name  = explode(" ", $user->name);
        $user['first_name']  = $name[0];
        $user['last_name']  = $name[1];
        
        return view('tradesman.profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       $user = User::find($id);
       $name  = explode(" ", $user->name);
       $user['first_name']  = $name[0];
       $user['last_name']  = $name[1];
        
       // dd($user);
        return view('tradesman.edit_profile',compact('user'));
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
       // dd($request);
        $user = User::find($id);
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        

        $user->save();

        $employee = Employee::where('user_id',$user->id)->first();
        $employee->bank_name = $request->bank_name;
        $employee->account_number = $request->account_number;
        $employee->account_name = $request->account_name;
        $employee->branch_code = $request->branch_code;
        $employee->save();

        return redirect('tradesman/profile/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
    }


    // public function validate_profile($request)
    // {
    //     $data = $request->validate([
    //         'about_me' => ['required'],
    //         'address' => ['required'],
    //         'account_number' => ['required'],
    //         'account_name' => ['required'],
    //         'branch_code' => ['required'],
    //         'account_number' => ['required'],
    //         'contact_number' => ['required']
    //     ]);

    //     return $data;
    // }

    public function addSkill(Request $request)
    {
        $user = User::find(Auth()->id);

        $user->attach($request->id);
    }

    public function add_remove_skill($id)
    {
        $user = User::find(Auth()->id);
        if($user->skills()->where('user.id', Auth()->id)->exists()){

            $user->skills()->attach($id);

        }else{

            $user->skills()->detach($id);

        }
    }

    public function update_city($id)
    {
        $user = User::find(Auth()->id);
        $user->city_id = $id;
        $user->save();

        
    }

    public function add_user_documents()
    {

        
        
    }
}
