<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DosenModel extends Model
{

    use HasFactory;

    protected $fillable = [
        'id_dosen', 'nip', 'nama_dosen', 'foto_dosen',
    ];
    public static function getIDBy($id)
    {
        return DB::table('tb_dosen')->where('id', $id)->get();
    }
}
