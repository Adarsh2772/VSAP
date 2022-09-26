<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;
use App\Models\Homepage;
use App\Models\Value;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Footer;
use App\Models\Client;

class EmailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mail(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:50',
            'message'=>'max:255',
            'email'=>'required|max:50',
        ]);

            $name= $request->input('name');
             $email = $request->input('email');
             $message = $request->input('message');

        $subject = "New Client Enquiry.";
        $email2 = "vsap.company@gmail.com";
        $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers  .= "From:".$email2 . "\r\n";
// // Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = "<htmL>
<head>
<title>
</title>
</head>
<body>

 <span style='text-align:justify;'>You have new customer enquiry.</span><br>
 <div>
   <table>
        <tr><td style='border: 1px solid;'>Name</td><td style='border: 1px solid;border-left: none;'>".$request->input('name')."</td></tr>
        <tr><td style='border: 1px solid;'>Email</td><td style='border: 1px solid;border-left: none;'>".$request->input('email')."</td></tr>
        <tr><td style='border: 1px solid;'>Message</td><td style='border: 1px solid;border-left: none;'>".$request->input('message')."</td></tr>
    </table>
 </div>


</body>
</html>";
$msg = $message;

// // Send Mail By PHP Mail Function
$msg = wordwrap($msg,70);
 $success = "Your mail has been sent successfuly. Thank You..! ";
 $error = "Error in sending mail";
 if(mail("$email2", $subject, $msg, $headers))
{
    return redirect('/contactalert');

 }else{
  echo"Failed";
}


    }

}
