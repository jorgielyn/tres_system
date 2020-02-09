<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class tblscholars extends Model
{
    public $timestamps = false;
    protected $fillable =[
        'first_name',
        'middle_name',
        'last_name',
        'batch',
        'contact_number',
        'email',
        


    ];
    public function payment()
    {
        return $this->hasMany('App\tblpayments', 'payid', 'id');
    }
    public function getuser(){
        $records = DB::table('tblscholars')->all()->get()->toArray();
        return $records;
    }
    
}

