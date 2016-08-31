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
     * Returns all users with given role.
     *
     * @return mixed
     */
    public function groupedAlbums($grouped = false)
    {
        $result = $this->model->orderBy('name')->lists('name')->toArray();

        $array = [];

        foreach ($result as $key => $value) {
            $key = explode('.', $key, 2);
            @$array[$key[0]][$key[1]] = $value;
        }

        return $array;
    }

    /**
     * Create a new permission using the given name.
     *
     * @param string $name
     * @param string $slug
     *
     * @throws PermissionExistsException
     *
     * @return Permission
     */
    public function createAlbum($name, $slug = null)
    {
        dd("createAlbum");
        if (!is_null($this->findByName($name))) {
            throw new AlbumExistsException('The album '.$name.' already exists'); // TODO: add translation support
        }

        // Do we have a display_name set?
        $slug = is_null($slug) ? $name : $slug;

        return $album = $this->model->create([
            'name'      => $name,
//            'slug'      => $slug,
        ]);
    }

    /**
     * @param array $rolesIds
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    /*public function getByRoles(array $rolesIds)
    {
        return $this->model->whereHas('roles', function ($query) use ($rolesIds) {
            $query->whereIn('id', $rolesIds);
        })->get();
    }*/

    /**
     * @param $user
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    /*public function getActivesByUser($user)
    {
        $table = $user->permissions()->getTable();

        return $user->permissions()
            ->where($table.'.value', true)
            ->where(function ($q) use ($table) {
                $q->where($table.'.expires', '>=', Carbon::now());
                $q->orWhereNull($table.'.expires');
            })
            ->get();
    }*/
}
