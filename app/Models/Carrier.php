<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    use HasFactory;
    protected $table = 'transporteur';

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
        'numero_rccm',
        'numero_ifu',
        'numero_cnss',
        'numero_licence',
        'annee_creation',
        'raison_sociale',
        'sigle',
        'boite_postale',
        'site_web',
        'email',
        'contact_1',
        'contact_2',
        'fax',
        'adressage',
        'nom_responsable',
        'created_by',
        'updated_by',
        'fk_ville',
        'fk_statut_juridique'
    ];

    public function Conditionnement()
    {
        return $this->hasMany(transCondition::class, 'fk_transporteur','id');
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'fk_ville', 'id');
    }

    public function statutJuridique()
    {
        return $this->belongsTo(StatutJuridique::class, 'fk_statut_juridique', 'id');
    }

}
