<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Card extends Model
{
    protected $fillable = ['title', 'rating', 'date', 'genre', 'image'];


    public function imageUrl()
    {
        if ($this->image) {
            return Storage::url($this->image);
        }

        return 'https://via.placeholder.com/92x136';
    }
}
