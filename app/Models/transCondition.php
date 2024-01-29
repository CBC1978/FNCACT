<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transCondition extends Model
{
    use HasFactory;
    protected $table = 'transporteur_conditionnement';

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
        'fk_transporteur',
        'fk_conditionnement',
        'created_by',
        'updated_by',
    ];

    public function Conditionnement()
    {
        return $this->belongsTo(Conditionnement::class, 'fk_conditionnement', 'id');
    }
}
