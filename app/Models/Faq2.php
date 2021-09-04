<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq2 extends Model
{
    public function language() {
        return $this->belongsTo('App\Language');
    }
}
