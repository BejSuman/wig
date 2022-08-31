<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;

class ContactController extends Controller
{
    public function __construct()
    {
                $products = DB::table('products')->pluck('title','id');
        View::share('products', $products);
    }
    public function index()
    {
        // $products = DB::table('products')->pluck('title','id');
        return view('pages.contact-us');
    }
    public function submitContactForm(Request $request)
    {
        try {

        // Please use only validation fields to create validation rules.
        $validate_value['name'] = $request->post('name');
        $validate_rule['name'] = 'required';

        $validate_value['phone'] = $request->post('phone');
        $validate_rule['phone'] = 'required';

        $validate_value['subject'] = $request->post('subject');
        $validate_rule['subject'] = 'required';


        $validator = Validator::make($validate_value, $validate_rule);

        if ($validator->fails()) {
            //            $validation_errors = $validator->errors()->all();
            return json_encode(['status' => false, 'msg' => 'invalid input given.', 'data' => '']);
        } else {

            $Contact = new Contact();
            $Contact->fill([
                'name' => $request->post('name'),
                'phone' => $request->post('phone'),
                'email' => $request->post('email'),
                'subject' => $request->post('subject'),
                'message' => $request->post('message'),
            ]);
            $Contact->save();
            return redirect()->back();
            // return json_encode(['status' => true, 'msg' => 'Appointment booking successful. We will contact you soon', 'data' => '']);
        }
    } catch (\Exception $exception) {
    return json_encode(['status' => false, 'msg' => 'Error while submitting.', 'data' => $exception->getMessage()]);
    }
}
}

