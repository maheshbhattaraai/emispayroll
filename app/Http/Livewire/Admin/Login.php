<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login(){
      
        $validatedData = $this->validate(
            ['email' => 'required|email',
            'password'=>'required|min:6'],
            [
                'email.required' => 'The :attribute cannot be empty.',
                'email.email' => 'The :attribute format is not valid.',
                'password.min'=>'The password must be 6 letter long.',
            ],
            ['email' => 'Email Address']
           
        );

        try{
            if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
                session()->flash('success', 'Username and password did not matched.');
                sleep(2);
                return redirect('/admin');
            }else{
                session()->flash('error', 'Username and password did not matched.');
            }
        }catch(\Exception $e){
            session()->flash('error', 'Something went wrong! Please try later.');
        }
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
}
