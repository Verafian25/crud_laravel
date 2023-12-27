<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nip', 'nama_dosen', 'email', 'jenis_kelamin', 'alamat'
    ];

    public function mapel(){
    	return $this->hasMany(Mapel::Class);
    }
}
