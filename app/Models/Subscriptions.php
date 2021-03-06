<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscriber_id',
        'website_id',
    ];

    public function subscriber()
    {
        return $this->belongsTo(Subscribers::class);
    }
}
