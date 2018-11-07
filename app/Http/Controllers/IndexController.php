<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SqlServer\SqlServerPdo;
use PDO;
use Auth;

class IndexController extends Controller
{
    public function __construct()
    {
        //check if the user has logged in
        if(!Auth::user()) {
            // return redirect('/login')->send();
        }
    }


    public function get_index()
    {
        // try {
        //     $pdo = new PDO('mysql:host=127.0.0.1;dbname=med2', 'root', '');
        //     $statement = $pdo->prepare('select * from pasien_server_2');
        //     $statement->execute();
        //     $this->data['pasien_server_2'] = $statement->fetchAll(PDO::FETCH_OBJ);
        // }
        // catch(PDOException $e)
        // {
        //     die('Could not connect to database');
        // }
        // try {
        //     include "TestFileInclude.php";
        // }
        // catch(Exception $e)
        // {
        //     dd("error");
        // }
        //$berhasil_tersambung = False;
        // include __DIR__."\..\..\ManualConnection\ManualMySQLConnection.php";
        //include __DIR__."\..\..\ManualConnection\ManualSQLServer2000Connection.php";


        // if($berhasil_tersambung) {
        //     $statement = $pdo->prepare('select * from pasien_server_2');
        //     $statement->execute();
        //     $this->data['pasien_server_2'] = $statement->fetchAll(PDO::FETCH_OBJ);
        // }

        $this->data['pasien'] = DB::table('pasien')
        						->join('rincian_pasien', 'rincian_pasien.no_rm', '=', 'pasien.no_rm')
        						->get();

    	return view('index', $this->data);

    }
}
