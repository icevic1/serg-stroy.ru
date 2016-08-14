<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Interfaces\AlbumRepositoryInterface;
use Litepie\Database\Eloquent\BaseRepository;

class AlbumRepository extends BaseRepository implements AlbumRepositoryInterface
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    /*public function model()
    {
        dd('AlbumRepository', config('package.page.page.model'));

        return config('package.page.page.model');
    }*/
    public function model()
    {
        return 'App\\Models\\Album';
    }
    /**
     * Get page by id or slug.
     *
     * @return void
     */
    /*public function getPage($var)
    {
        return $this->findBySlug($var);
    }*/
}
