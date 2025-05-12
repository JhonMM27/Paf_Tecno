<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // use HasFactory;

    protected $fillable = [
        'nombre', 'codigo_barras', 'categoria_id', 'descripcion', 'unidad', 'precio', 'stock', 'stock_minimo', 'estado'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function detalleVentas()
    {
        return $this->hasMany(DetalleVenta::class);
    }

    public function detalleCompras()
    {
        return $this->hasMany(DetalleCompra::class);
    }
}
