<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=['name','desc','duration','user_id' , 'img'];

    public function teacher()
    {
        return $this->belongsTo(User::class);

    }

    public function students()
    {

        return $this->belongsToMany(User::class);

    }


    function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
