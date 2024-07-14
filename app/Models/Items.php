<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $fillable = [
        'user_id',
        'nama_item',
        'catatan_tambahan',
        'image',
        'lokasi',
    ];

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
