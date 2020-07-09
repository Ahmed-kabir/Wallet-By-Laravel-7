<?php

namespace App\Http\Controllers;

use App\User;
use App\adminSupport;
use App\Reffered;
use App\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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

    public function forgot_password()
    {
        return view('user.forgot_password');
    }

    public function check_forgot_password(Request $request)
    {
//            dd($request->all());
          $token = Str::random(12);

        $request->validate([
            "email"=>'required|email'
            ]);

        $email = $request->input('email');
           $check_email = User::where('email', $email)->first();
        if($check_email)
        {
             $user_id = $check_email->id;
            $to      = $email;
            $subject = 'Reset Password';
//            $message="Click this link for reset password:". $link = url("user/password/reset/$user_id");
            $message="Use this token for password reset form:"  .$token;
            $headers = 'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);

            $check_email->remember_token = $token;
            $check_email->save();

            return redirect()->route('resetPasswordByToken')->with('success_message','Please Check Your Email');
        }

        else
        {
            return redirect()->route('forgotPassword')->with('error_message','This Email Doesnt Exists');
        }

    }

    public function reset_password($id)
    {
        $data['user_id'] = $id;
        return view('user.reset_password', $data);
    }

    public function reset_password_token()
    {
        return view('user.reset_password_by_token');
    }
    public function update_forgot_password(Request $request)
    {

        $request->validate([
            "token"=>'required',
            "password"=>'required',
            "retype_password"=>'required'
        ]);

        $user_id = $request->input('user_id');
        $password = $request->input('password');
        $retype_password = $request->input('retype_password');
        if($password == $retype_password)
        {
              $user_profile = User::where('id', $user_id)->first();
              if($user_profile)
              {
                 $hased_password = Hash::make($retype_password);
                 $user_profile->password = $hased_password;
                 $user_profile->save();
              }
              return redirect()->route('userLogin')->with('success_message','Password Updated Successfully');
        }
        else
        {
            return redirect()->route('resetPassword',$user_id)->with('error_message','Both Password Did Not Match');
        }
    }

    public function update_forgot_password_by_token(Request $request)
    {
        $request->validate([
            "token"=>'required',
            "password"=>'required',
            "retype_password"=>'required'
        ]);
         $token = $request->input('token');
        $password = $request->input('password');
        $retype_password = $request->input('retype_password');

        $user_profile = User::where('remember_token', $token)->first();

        if( $password != $retype_password )
        {
            return redirect()->route('resetPasswordByToken')->with('error_message','Password Miss Match');
        }
        elseif (empty($user_profile ))
        {
            return redirect()->route('resetPasswordByToken')->with('error_message','Token Miss Match');
        }

        else
        {
            $hased_password = Hash::make($retype_password);
            $user_profile->password = $hased_password;
            $user_profile->remember_token = $token;
            $user_profile->save();
            return redirect()->route('userLogin')->with('success_message','Password Updated Successfully');
        }
    }


    public function user_save(Request $request)
    {

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

        return view('user.user_profile');
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
            'referral_name' => $username,
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
        $currency = $settings->currency_name;
        session()->put('currency', $currency);
        return view('user.user_main_content');
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
            echo $user_id = Auth::user()->id;
              $transaction_by_user =Transaction::where('user_id',$user_id)->orderBy('id', 'desc')->first();
             $total_transaction_by_user = Transaction::where('user_id',$user_id)->orderBy('id', 'desc')->count();
             $last_transaction_ammount = $transaction_by_user->transfer_ammount;
             $last_transaction_time = $transaction_by_user->updated_at;

            session()->put('user_detail',[
                "last_transaction_ammount"=>$last_transaction_ammount,
                "total_transaction_by_user"=>$total_transaction_by_user,
                "last_transaction_time"=>$last_transaction_time->diffForHumans()
            ]);

//            Session::put('last_transaction_ammount', $last_transaction_ammount);
            return redirect()->route('userDashboard');
            // echo 'success';
        }
        else
        {
            return redirect()->route('userLogin')->with('error_message', 'Username/Password Is Incorrect');
        }
    }

    public function user_logout()
    {
         Auth::logout();

        return redirect()->route('home');
    }

    public function user_send_money()
    {
        return view('user.user_send_money');
    }

    public function transfer_money(Request $request)
    {
        $request->validate([
            "user_id"=>'required|integer',
            "transfer_ammount"=>'required|integer|min:3'
        ]);

        $settings = adminSupport::first();
        $transfer_fixed_charge = $settings->transfer_charge;
        $transfer_percentige_charge = $settings->transfer_percentige_charge;
        $ref_tran_chrage = $settings->ref_tran_chrage;


        $sender_id = Auth::user()->id;
        $reffered_user_id = Auth::user()->reffered_user_id;
        $sender_current_balance = Auth::user()->ammount;
        $receiver_id = $request->input('user_id');
        $transfer_ammount = $request->input('transfer_ammount');
        $total_transfer_charge =(($transfer_percentige_charge*$transfer_ammount)/100);
        $final_transfer_charge= $total_transfer_charge+$transfer_percentige_charge;
        $need_min_money_for_transfer = $final_transfer_charge+ $transfer_ammount;

        $validate_reffered_user = User::find($receiver_id);


        if($validate_reffered_user && $sender_current_balance > $need_min_money_for_transfer && $receiver_id != $sender_id)
        {
            $current_balance_of_reffered_user = $validate_reffered_user->ammount;
            $final_balance_of_reffered_user = $current_balance_of_reffered_user + $transfer_ammount;
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
            $last_transaction_time = $sender_balance_update->updated_at;

            $receiver_balance_update=User::find($receiver_id);
            $receiver_balance_update->ammount = $current_balance_of_reffered_user + $transfer_ammount;
            $receiver_balance_update->save();

            if($reffered_user_id)
            {
                $reffered_user_info = User::find($reffered_user_id);
                $reffered_user_info_balance = $reffered_user_info->ammount;
                $reffered_user_info->ammount = $reffered_user_info_balance + $ref_tran_chrage;
                $reffered_user_info->save();
            }
            $total_transaction_by_user = Transaction::where('user_id',$sender_id)->count();
            Session::forget('user_detail');
            session()->put('user_detail',[
                "last_transaction_ammount"=>$transfer_ammount,
                "total_transaction_by_user"=>$total_transaction_by_user,
                "last_transaction_time"=>$last_transaction_time->diffForHumans()


            ]);

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
