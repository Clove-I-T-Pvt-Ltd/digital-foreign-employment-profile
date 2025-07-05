<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caste extends Model
{
    protected $fillable = ['caste_category_id', 'name'];

    public function casteCategory()
    {
        return $this->belongsTo(CasteCategory::class);
    }
}
