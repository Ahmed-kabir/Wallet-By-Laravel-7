<?php

namespace App\Http\Controllers;

use App\User;
use App\adminSupport;
use App\Reffered;
use App\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller
{
    
    public function login()
    {
         return view('user.user_login');
    }

    
    public function register()
    {
        return view('user.user_register');
    }

   
    public function user_save(Request $request)
    {
        // return $request->all();

         $request->validate([
            "username"=>'required',
            "password"=>'required'
        ]);

        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $hased_password = Hash::make($password);

        $unique_id_for_user = substr(sha1($username), 0, 10);


        $settings = adminSupport::first();
        $reffered_bouns = $settings->reffered_bouns_ammount;
        $signup_bonus = $settings->signup_bonus;
        $interest_ammount = $settings->interest_ammount;
        $total_ammount = $signup_bonus;

         if ($this->check_username($username)) {
            
        return redirect()->route('userRegister')->with('error_message','Username/Emil Already Exist');

        }
        else
        {
            $user = User::create([
        'name' => $name,
        'username' => $username,
        'email' => $email,
        'password' => $hased_password,  
        'user_unique_id' => $unique_id_for_user,      
        'sign_up_bonus' => $signup_bonus,
        'ammount' => $total_ammount,
        ]);
            return redirect()->route('userLogin')->with('success_message', 'Registration Completed Successfully');
        }

        // if($reffered_user_id)
        // {
        // $validate_reffered_user = User::find($reffered_user_id);
        // $reffered_current_balance = $validate_reffered_user->ammount;

        // if($validate_reffered_user)
        // {

        // $reffered_id = $validate_reffered_user->id;
        //     // echo 'valid user';
        // $user = User::create([
        // 'name' => $name,
        // 'username' => $username,
        // 'email' => $email,
        // 'password' => $hased_password,
        // 'user_unique_id' => $unique_id_for_user,
        // 'reffered_user_id' => $reffered_id,
        // 'sign_up_bonus' => $signup_bonus,
        // 'ammount' => $total_ammount,
        // ]);

        //     $reffered_balance_update=User::find($reffered_id);
        //     $reffered_balance_update->ammount = $reffered_current_balance + $reffered_bouns;
        //     $reffered_balance_update->save();

        // $reffered = Reffered::create([
        //     'reffered_id' => $reffered_id,
        //     'reffered_bonus' => $reffered_bouns,
        // ]);
        // return redirect()->route('userLogin')->with('success_message', 'Registration Completed Successfully');
        // }
        // else
        // {
        //     // echo 'return home cz refered not valid';
        //     return redirect()->route('userRegister')->with('error_message', 'Reffered User Not Found');
        // }
        // }
        // else{
            
        // }
        
    }

    public function get_reffered_link($link)
    {
       // return $link;

        $link = url("user/register/$link");

         $data['link'] = $link;
         return view('user.user_invitation_link', $data);
    }

    public function manage_profile()
    {
        $user_id = Auth::user()->id;
        $user_profile = User::where('id', $user_id)->first();
        $data['user_profile'] = $user_profile;
        return view('user.user_profile', $data);
    }

    public function edit_profile()
    {
        echo 'success';
    }

    public function register_user_by_reffered($id)
    {

        // return $id;
          $check_reffered_user = User::where('user_unique_id', $id)->first();
         if($check_reffered_user)
         {
             $user_unique_id = $check_reffered_user->user_unique_id;
             $data['user_unique_id'] = $user_unique_id;
            return view('user.user_registerd_by_reffered', $data);
         }
      else
      {
         return redirect()->route('userRegister')->with('error_message', 'Link Not Valid, Please Try Normal Registration');
      } 
        // return $validate_reffered_user = User::find($id);
        // $reffered_current_balance = $validate_reffered_user->ammount;
        // return view('user.user_registerd_by_reffered');
    }

    public function save_user_by_reffered(Request $request)
    {
        $request->validate([
            "username"=>'required',
            "password"=>'required'
        ]);

        $username = $request->input('username');
        $name = $request->input('name');
        $reffered_user_unique_id = $request->input('user_unique_id');
        $email = $request->input('email');
        $password = $request->input('password');
        $hased_password = Hash::make($password);
        $unique_id_for_user = substr(sha1($username), 0, 10);

        if ($this->check_username($username)) {
            
        return redirect()->route('userRegisterdByReffered',$reffered_user_unique_id)->with('error_message','Username/Emil Already Exist');

        }
        else
        {
         
        $settings = adminSupport::first();
        $reffered_bouns = $settings->reffered_bouns_ammount;
        $signup_bonus = $settings->signup_bonus;
        $total_ammount = $reffered_bouns + $signup_bonus;


          $check_reffered_user = User::where('user_unique_id', $reffered_user_unique_id)->first();


         $reffered_user_unique_id = $check_reffered_user->user_unique_id;
         $reffered_user_id = $check_reffered_user->id;
         $reffered_user_current_ammount = $check_reffered_user->ammount;
         
         $check_reffered_user->ammount = $reffered_user_current_ammount + $reffered_bouns;
         $check_reffered_user->save();




        $user = User::create([
        'name' => $name,
        'username' => $username,
        'email' => $email,
        'password' => $hased_password,  
        'user_unique_id' => $unique_id_for_user,     
        'reffered_user_id' => $reffered_user_id,     
        'sign_up_bonus' => $signup_bonus,
        'ammount' => $signup_bonus,
        ]);


            

        $reffered = Reffered::create([
            'reffered_id' => $reffered_user_id,
            'reffered_bonus' => $reffered_bouns,
        ]);
         return redirect()->route('userLogin')->with('success_message', 'Registration Completed Successfully');

        }

        
    }

    public function check_username($username)
    {
        
        // $username = 'user';
        $check_user_name = User::where('username', $username)->first();
        if($check_user_name)
        {
           return true;
        }
        else
        {
            return false;
        }
    }

    public function test()
    {
        echo 'success';
    }

    public function user_dashboard()
    {
        $settings = adminSupport::first();
        $data['currency_name'] = $settings->currency_name;

        return view('user.user_main_content', $data);
    }

    public function check_user(Request $request)
    {
        // return $request->all();
         $request->validate([
            "username"=>'required',
            "password"=>'required'
        ]);

         $name = $request->input('username');
         $password = $request->input('password');


        // dd(Auth::attempt(['username' => $name, 'password' => $password]));
        
        if(Auth::guard()->attempt(['username' => $name, 'password' => $password]))
         
        {
            
            return redirect()->route('userDashboard'); 
            // echo 'success';
        }
        else
        {
            return redirect()->route('userLogin')->with('error_message', 'Something Wrong');
        }
    }

    public function user_logout()
    {
         Auth::logout();
        
        return redirect()->route('userLogin');
    }

    public function user_send_money()
    {
        return view('user.user_send_money');
    }

    public function transfer_money(Request $request)
    {
        $settings = adminSupport::first();
        $transfer_fixed_charge = $settings->transfer_charge;
        $transfer_percentige_charge = $settings->transfer_percentige_charge;
       

        $sender_id = Auth::user()->id;
        $sender_current_balance = Auth::user()->ammount;
        $receiver_id = $request->input('user_id');
        $transfer_ammount = $request->input('transfer_ammount');
        $total_transfer_charge =(($transfer_percentige_charge*$transfer_ammount)/100);
        $final_transfer_charge= $total_transfer_charge+$transfer_percentige_charge;
        $need_min_money_for_transfer = $final_transfer_charge+ $transfer_ammount;

        $validate_reffered_user = User::find($receiver_id);
        $current_balance_of_reffered_user = $validate_reffered_user->ammount;
        $final_balance_of_reffered_user = $current_balance_of_reffered_user + $transfer_ammount;

        if($validate_reffered_user && $sender_current_balance > $need_min_money_for_transfer)
        {

             // echo 'transfer avaialble';
            
             $after_transaction_balance = $final_transfer_charge + $transfer_ammount;
             $sender_final_balance = $sender_current_balance - $after_transaction_balance;

             $transaction = Transaction::create([
            'user_id' => $sender_id,
            'sender_comment' => 'Your Account is Debited',
            'transferred_user_id' => $receiver_id,
            'receiver_comment' => 'Your Account is Credit',
            'transfer_ammount' => $transfer_ammount,        
            'transfer_charge' => $total_transfer_charge,
            ]);

             $sender_balance_update=User::find($sender_id);
            $sender_balance_update->ammount = $sender_final_balance;
            $sender_balance_update->save();

            $receiver_balance_update=User::find($receiver_id);
            $receiver_balance_update->ammount = $current_balance_of_reffered_user + $transfer_ammount;
            $receiver_balance_update->save();

             return redirect()->route('sendMoney')->with('success_message', 'Balance Transfer Successfully');
        }

        
        else
        {
            return redirect()->route('sendMoney')->with('error_message', 'Pleae Check SenderId/Balance');
        }
    }

  

    
    
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
