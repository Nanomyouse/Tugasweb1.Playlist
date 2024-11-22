<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistItem extends Model
{
    public function playlist()
{
    return $this->belongsTo(Playlist::class);
}

}