<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $newsTable = 'news';

    public function getCategories():array
    {
        return \DB::table($this->table)
            ->get()
            ->toArray();
    }

    public function getCategoryByID(int $id)
    {
        return \DB::table($this->newsTable)
            ->where('category_id', '=', $id)
            ->get()
            ->toArray();
    }
}
