<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipperProduct extends Model
{
    use HasFactory;
    protected $table = 'chargeur_produit';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fk_chargeur',
        'fk_produit',
        'type_produit',
        'created_by',
        'updated_by',
    ];
    public function Product()
    {
        return $this->belongsTo(Produit::class, 'fk_produit', 'id');
    }
}
