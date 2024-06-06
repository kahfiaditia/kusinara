<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "blog";

    public function user()
    {
        return $this->belongsTo(User::class, 'user_create');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'id_kategori');
    }
}
