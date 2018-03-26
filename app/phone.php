<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    //
    protected $table = 'phones';


    protected $fillable = [
        'Brand', 'Model', 'Storage', 'Warranty', 'Color', 'Year', 'Price', 'Picture1', 'Picture2', 'Picture3', 'Picture4', 'Picture5'
    ];


}


