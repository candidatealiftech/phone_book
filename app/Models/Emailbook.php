<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emailbook extends Model
{
    use HasFactory;
    protected $fillable = ['email_address', 'contact_id'];

    public function contact (){
        return $this->belongTo(Contact::class, 'contact_id', 'id');
    }
}
