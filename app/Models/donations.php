<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\userinfos;
use App\Models\projects;

class donations extends Model
{
    use HasFactory;
    public $timestamps   = false;
    public function donordetails(){
        return $this->belongsTo(userinfos::class,'d_id');
    }
    public function donation(){
        return $this->belongsTo(projects::class,'p_id','p_id');
    }
}
