<?php
/*
  Authors : initappz (Rahul Jograna)
  Website : https://initappz.com/
  App Name : Grocery Delivery App
  This App Template Source code is licensed as per the
  terms found in the Website https://initappz.com/license
  Copyright and Good Faith Purchasers © 2021-present initappz.
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['name','env','status','currency_code','cover','extra_field','creds'];

    protected $hidden = [
        'updated_at', 'created_at','creds'
    ];

    protected $casts = [
        'status' => 'integer',
        'env' => 'integer'
    ];
}
