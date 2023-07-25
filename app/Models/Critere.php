<?php

namespace App\Models;

use App\Enums\CategorieGalerie;
use App\Enums\Forme;
use App\Enums\Taille;
use App\Enums\TypeFile;
use Illuminate\Database\Eloquent\Model;

class Critere extends Model {

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
        'preference',
        'teint',
        'taille',
        'forme',
        'age_min',
        'age_max'
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
        'preference'    => CategorieGalerie::class,
        'teint'     => TypeFile::class,
        'taille'    => Taille::class,
        'forme'     => Forme::class
    ];


    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

}
