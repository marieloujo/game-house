<?php

namespace App\Models;

use App\Enums\CategorieGalerie;
use App\Enums\TypeFile;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model {

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';


    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'url',
        'type_fichier',
        'categorie'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id'            => 'string',
        'created_at'    => 'datetime:d/m/Y H:i:s',
        'updated_at'    => 'datetime:d/m/Y H:i:s',
        'categorie'     => CategorieGalerie::class,
        'type_fichier'  => TypeFile::class
    ];


    public function proprietaire()
    {
        return $this->belongsTo(User::class, "user_id");
    }

}
