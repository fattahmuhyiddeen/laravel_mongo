<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
class Activity extends Model
{
    protected $collection = 'activities_collection';
}
