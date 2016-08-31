<?php

namespace App\Repositories\Presenter;

use Litepie\Database\Presenter\FractalPresenter;

class AlbumItemPresenter extends FractalPresenter
{
    /**
     * Prepare data to present.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AlbumShowTransformer();
    }
}
