<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $guarded = 'id';
    protected $table = 'kriteria';
    

    public function datanilai()
    {
        return $this->hasMany(DataNilai::class);
    }
}
