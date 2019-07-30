<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Position extends Model
{
    use Searchable;

    protected $table = 'position';
    public $timestamps = false;
    protected $fillable = [
        'recruit_type','position','user_id','position_type','type','province','city','addr','cid'
        ,'year','education','min_salary','max_salary','description','status','create_time','update_time'
    ];
}
