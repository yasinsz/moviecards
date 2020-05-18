<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Card extends Model
{
    protected $fillable = ['title', 'vote_average', 'release_date', 'name', 'poster_path'];


    public function imageUrl()
    {
        if ($this->poster_path) {
            return Storage::url($this->poster_path);
        }

        return 'https://via.placeholder.com/92x136';
    }
}
