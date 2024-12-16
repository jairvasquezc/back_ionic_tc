<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function ventasPasajes()
    {
        return $this->hasMany(VentaPasaje::class, 'id_cliente');
    }

    public function encomiendasRemitente()
    {
        return $this->hasMany(Encomienda::class, 'id_remitente');
    }

    public function encomiendasDestinatario()
    {
        return $this->hasMany(Encomienda::class, 'id_destinatario');
    }

    protected $fillable = ['persona_id'];
}
