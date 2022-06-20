<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'price',
        'color',
        'size',
        'population',
        'description',
        'highlighted',
    ];


    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function highlighted()
    {
        return $this->where('highlighted', 1);
    }
}
