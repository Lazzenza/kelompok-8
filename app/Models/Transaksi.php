<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use PHPUnit\Framework\Attributes\Before;

class Transaksi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='transaksi';
    protected $primaryKey='id';
    protected $fillable=['id','user_id','modil_id','nama','ponsel','alamat','lama','tgl_pesan','total','status'];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function mobil():BelongsTo{
        return $this->belongsTo(mobil::class);
    }
}
