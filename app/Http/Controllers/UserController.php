<?php

namespace App\Http\Controllers;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users= User::paginate(20);
        $zakatType = array(
            'Pendapatan'=> 1,
            'Perniagaan'=> 2,
            'Saham'=> 3,
            'Harta'=> 4,
            'Wang Simpanan'=> 5,
            'Emas'=> 6,
            'Perak'=> 7,
            'Pertanian'=> 8,
            'Ternakan'=> 9,
            'Rikaz'=> 10,
            'Qadha'=> 11,
            );

        $dist_code = array(
            'KUANTAN' => 1,
            'PEKAN' => 2,
            'TEMERLOH' => 3,
            'ROMPIN' => 4,
            'MARAN' => 5,
            'BENTONG' => 6,
            'LIPIS' => 7,
            'CAM. HIGHLANDS' => 8,
            'JERANTUT' => 9,
            'BERA' => 10,
            'RAUB' => 11,
        );
        $data = [
            'users' => $users,
            'zakatType' => $zakatType,
            'dist_code' => $dist_code,
        ];
        return view('welcome', $data);
    }
    public  function  store(Request $request){
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
}
