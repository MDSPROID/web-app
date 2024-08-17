<?php

/*
|--------------------------------------------------------------------------
| Helpers - Library Pembantu
|--------------------------------------------------------------------------
| MDSPRO
| @filename         : Helpers.php
| @author           : MDS
| @since            : Mei 2023
| @codename         : MDS
|
*/
//namespace Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent as Agent;
use App\Models\Users;
use App\Models\Settings;

/*class Helper {*/

function info_user_login(){
    $id = Session::get('asm_id');
    $get_data_login = Users::where('id',$id)->first();
    return $get_data_login;
} 

function info_user_email(){
    $get_data_email = Settings::where('id_setting',1)->first();
    return $get_data_email;
} 	