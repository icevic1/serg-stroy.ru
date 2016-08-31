<?php

namespace App\Repositories\Presenter;

use Litepie\Database\Presenter\FractalPresenter;

class AlbumListPresenter extends FractalPresenter
{
    /**
     * Prepare data to present.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AlbumListTransformer();
    }
}
