<?php

namespace App\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class AlbumItemTransformer extends TransformerAbstract
{
    public function transform(\App\Models\Album $album)
    {
        return [
            'id'                => $album->getRouteKey(),
            'name'              => $album->name,
//            'slug'              => $album->slug,
        ];
    }
}
