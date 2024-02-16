<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auxiliary extends Model
{
    use HasFactory;
    protected $table = 'auxiliaire_transport';
    /**
    * The primary key associated with the table.
    *
    *@var string
    */
    protected $fillable = [
        'numero_rccm',
        'numero_cnss',
        'numero_licence',
        'numero_ifu',
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
        'fk_statut_juridique',
        'fk_type_auxiliaire',

    ];
    public function ville(){
        return $this->belongsTo(Ville::class,'id');
    }

    public function statutJuridique(){
        return $this->belongsTo(StatutJuridique::class,'fk_statut_juridique','id');
    }

    public function typeAuxiliary(){
        return $this->belongsTo(TypeAuxiliary::class,'fk_type_auxiliaire','id');
    }

}
