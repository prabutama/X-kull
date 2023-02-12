<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraSiswa extends Model{
    protected $guarded = [];
    protected $table = 'ekstrasiswa';

    public function ekstra()
    {
        return $this->belongsTo(Ekstra::class, 'ekstra_id', 'id');
    }

}
