<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews():array
    {
        return \DB::table($this->table)
            ->get()
            ->toArray();
    }

    public function getNewsByID(int $id)
    {
        return \DB::table($this->table)->find($id);
    }
}
