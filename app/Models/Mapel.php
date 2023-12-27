<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'dosen_id', 'kode', 'matkul'
    ];

    public function dosen(){
    	return $this->belongsTo(Dosen::Class);
    }

}
