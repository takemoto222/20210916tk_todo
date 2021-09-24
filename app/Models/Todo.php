<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TodoController;

class Todo extends Model
{
        protected $fillable = ['id', 'content'];

        public static $rules = array(
            'content' => 'required'
        );
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->content . ' ' ;
        return $txt;
    }
}