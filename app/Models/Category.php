<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'count',
        'parent_id',
        'name'
    ];
    protected $hidden = ['created_at', 'updated_at'];

    public function scopeParent($query)
    {
        $query->where('parent_id', 0);
    }

    public function subcategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

}
