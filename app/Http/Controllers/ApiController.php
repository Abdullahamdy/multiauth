<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helper;
use App\Helper\Helper as HelperHelper;
use App\Supplier;
use Illuminate\Support\Str;
class ApiController extends Controller
{
use HelperHelper;


    public function register(Request $request){
        $validation = validator()->make($request->all(),[
            'name'=>'required',
            'email'=>'required|unique:suppliers',
            'password'=>'required|confirmed',
        ]);
        if($validation->fails())
        {
            return $this->apiResponse(0,'Validator Error',$validation->errors());
        }
        $request->merge(['password'=>bcrypt($request->password)]);
        $supplier = Supplier::create($request->all());
        $supplier->api_token= Str::random(40);
        $supplier->save();
        return $this->apiResponse(1,'Success',[
            'api_token'=>$supplier->api_token,
            'client'=>$supplier,
        ]);

    }

    public function delete(Request $request)
    {
       $supplier = Supplier::findOrFail($request->id);
       $supplier->delete();
       return $this->apiResponse(1,'data has been Deleted');


   }


}
