<?php

namespace App\Models;

class Categoria extends \TCG\Voyager\Models\Category
{
    protected $table = 'categories';
    /**
     * Relacionamento Um para Muitos (tem muitos)
     */
    public function postagens()
    {
        return $this->hasMany(Postagem::class,'category_id','id')->orderBy('created_at', 'DESC');
    }
}
