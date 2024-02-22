<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'plazas', 'aeropuerto_origen', 'aeropuerto_destino', 'fecha_salida', 'fecha_llegada'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function aeropuerto()
    {
        return $this->belongsTo(Aeropuerto::class);
    }

    public function companiaAerea()
    {
        return $this->belongsTo(CompaniaAerea::class);
    }
}
