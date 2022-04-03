<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    use HasFactory;

    protected $fillable=['body','user_id','course_id'];

    public function student()
    {
        return (User::find($this->user_id));

       // return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);

    }

}
