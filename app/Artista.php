<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

    //ESTABLECER RELACION 1 ARTISTA - M ARTISTA

    public function discos(){
        // metodo hasmany:
        //1. modelo a relacion
        //2. FK del artista(papa) en los discos(hijo)

        return $this->hasMany('App\Disco', 'ArtistId');

    }

    public function canciones(){
        //PARAMETRO 1: Modelo Destino/TercerModelo/Niet
        //PARAMETRO 2: Modelo Intermedio/ SegundoModelo/Papá


        return $this->hasManyThrough('App\Cancion', 'App\Disco', 'ArtistId', 'AlbumId', 'ArtistId','AlbumId');

    }
}
