<?php

namespace app;
use App\category;
use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public function sub_category()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function parent_category()
    {
        return $this->hasMany(self::class, 'id', 'parent_id');
    }

}