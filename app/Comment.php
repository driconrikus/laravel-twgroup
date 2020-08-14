<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content'
    ];
    
    public function publication()
    {
        return $this->belongsTo(Publication::class, 'publication_id');
    }
}
