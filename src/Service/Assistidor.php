<?php

namespace antonio\solid_php\Service;

use antonio\solid_php\Model\AluraMais;
use antonio\solid_php\Model\Curso;

class Assistidor
{
    public function assisteCurso(Curso $curso)
    {
        foreach ($curso->recuperarVideos() as $video) {
            $video->assistir();
        }
    }

    public function assisteAluraMais(AluraMais $aluraMais)
    {
        $aluraMais->assistir();
    }
}
