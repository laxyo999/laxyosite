<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['jobtitle','location','description','experience','resume','salaryfrom','salaryto','closingdate','condidatecount'];
}
