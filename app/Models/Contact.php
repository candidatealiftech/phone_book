<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'lastname', 'date', 'user_id'];

    public function user (){
        return $this->belongTo(User::class, 'user_id', 'id');
    }

    public function email (){
        return $this->Hasmany(Emailbook::class, 'contact_id', 'id');
    }

    public function phone (){
        return $this->Hasmany(Phonebook::class, 'contact_id', 'id');
    }
}
