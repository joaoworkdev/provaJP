<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto_id',
        'quantidade',
        'preco_total',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}

