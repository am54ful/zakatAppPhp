<?php

namespace App\Http\Controllers;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users= DB::table('users')->join('user_type_district',
                     'users.ic_number', '=', 'user_type_district.ic_number')
                          ->join('zakat_types',
                     'zakat_types.zakat_type', '=', 'user_type_district.zakat_type')
                        ->join('district_codes',
                     'district_codes.district_code', '=', 'user_type_district.district_code')->paginate(20);
        return view('welcome', compact("users"));
    }
    public  function  store(Request $request){
        if($request->file->getClientOriginalExtension() != "txt"){
            return response(null, 406)->header('Content-Type', 'text/plain');
        }
        $fileHandle = fopen($request->file, "r") or die("Something went wrong. Please try again.");
        $data =[];
        $counter=0;
        while (($line = fgets($fileHandle)) !== false) {
            $data[$counter]['ic_number'] = substr($line,0,12);
            $data[$counter]['name'] = trim(substr($line,12,49));
            $data[$counter]['zakat_type'] = substr($line,62,2);
            $data[$counter]['deduct_amt'] = substr($line,64,12);
            $data[$counter]['district_code'] = substr($line,76,2);
            $counter++;
        }
        fclose($fileHandle);
        try{
            User::add($data);
        } catch (Exception $ex){
            return $ex;
        }
        return response(null, 200)->header('Content-Type', 'text/plain');
    }
    public function report()
    {
        $reports= DB::table('users')
            ->select('user_type_district.district_code',
                'user_type_district.zakat_type',
                DB::raw('COUNT(user_type_district.zakat_type) as zakat_count'),
                DB::raw('SUM(user_type_district.deduct_amt) as deduct_total'))
            ->join('user_type_district',
            'users.ic_number', '=', 'user_type_district.ic_number')
            ->join('zakat_types',
                'zakat_types.zakat_type', '=', 'user_type_district.zakat_type')
            ->join('district_codes',
                'district_codes.district_code', '=', 'user_type_district.district_code')
            ->groupBy('user_type_district.district_code','user_type_district.zakat_type')
            ->get();
        return view('report', compact("reports"));
    }
}
