<?php

namespace App\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use App\User;

class AlbumListTransformer extends TransformerAbstract
{
    public function transform(\App\Models\Album $album)
    {
        return [
            'id'            => $album->getRouteKey(),
            'name'          => $album->name,
            'user_id'       => $album->user_id,
            'user_name'     => $album->user_id ? User::find($album->user_id)->name: '',
            'description'   => $album->description,
            'created_at'    => $album->created_at->toDateTimeString(),/*->format('Y-m-d')*/
        ];
    }
}
