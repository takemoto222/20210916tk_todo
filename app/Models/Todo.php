<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TodoController;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
        protected $fillable = ['id', 'content'];

        public static $rules = array(
            'content' => 'required|max:20'
        );
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->content . ' ' ;
        return $txt;
    }
}

