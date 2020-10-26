

    public function registerSave(Request $request){

        if($request->register_as=="farmer") {

            $this->validate($request,[
                'register_as'=>'not_in:0',
                'username'=>'alpha_num|min:3|unique:farmer_registers,username',
                'email'=>'email|unique:farmer_registers,email',
                'mobile'=>'numeric|digits:11',
                'division'=>'not_in:0',
                'zip_code'=>'max:5|string',
                'password'=>[
                    'string',
                    'min:5',             // must be at least 5 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                ],
                'password_confirm'=>'same:password'
            ]);

            $regis = new farmer_register();
            $regis->register_as = $request->register_as;
            $regis->username = $request->username;
            $regis->email = $request->email;
            $regis->mobile = $request->mobile;
            $regis->division = $request->division;
            $regis->zip_code = $request->zip_code;
            $regis->password = $request->password;
            $regis->password_confirm = $request->password_confirm;
            $regis->profile_pic ="null";
            $regis->action ="active";
            $regis->condition ="unverified";
            $regis->save();

//        $data=$regis->toArray();
//        Mail::send('farmer.verification_mail',$data,function($message) use ($data){
//            $message->to($data['email']);
//            $message->subject('verification_mail');
//        });

            return redirect('/login')->with('reg_success','Registration as farmer successfully,Now Login and Import Crops');
        }else{

            $this->validate($request,[
                'register_as'=>'not_in:0',
                'username'=>'alpha_num|min:3|unique:user_registers,username',
                'email'=>'email|unique:user_registers,email',
                'mobile'=>'numeric|digits:11',
                'division'=>'not_in:0',
                'zip_code'=>'max:5|string',
                'password'=>[
                    'string',
                    'min:5',             // must be at least 5 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                ],
                'password_confirm'=>'same:password'
            ]);

            $regis = new user_register();
            $regis->register_as = $request->register_as;
            $regis->username = $request->username;
            $regis->email = $request->email;
            $regis->mobile = $request->mobile;
            $regis->division = $request->division;
            $regis->zip_code = $request->zip_code;
            $regis->password = $request->password;
            $regis->password_confirm = $request->password_confirm;
            $regis->profile_pic ="null";
            $regis->action ="active";
            $regis->condition ="unverified";
            $regis->save();

//        $data=$regis->toArray();
//        Mail::send('farmer.verification_mail',$data,function($message) use ($data){
//            $message->to($data['email']);
//            $message->subject('verification_mail');
//        });
            return redirect('/login')->with('reg_success','Registration as user successfully,Now Login and Bid ');
        }

    }