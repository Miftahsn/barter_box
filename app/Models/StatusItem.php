<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_id',
        'status',
    ];

    public function statusItem() {
        return $this->belongsTo(Items::class, 'item_id', 'id');
    }
}
