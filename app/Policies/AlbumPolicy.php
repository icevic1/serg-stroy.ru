<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Album;

class AlbumPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can view the permission.
     *
     * @param User       $user
     * @param Album $album
     *
     * @return bool
     */
    public function view(User $user, Album $album)
    {
        return false;
    }

    /**
     * Determine if the given user can create a permission.
     *
     * @param User       $user
     * @param Album $album
     *
     * @return bool
     */
    public function create(User $user, Album $album)
    {
        return false;
    }

    /**
     * Determine if the given user can update the given permission.
     *
     * @param User       $user
     * @param Permission $permission
     *
     * @return bool
     */
    public function update(User $user, Album $album)
    {
        return false;
    }

    /**
     * Determine if the given user can delete the given permission.
     *
     * @param User       $user
     * @param Permission $permission
     *
     * @return bool
     */
    public function destroy(User $user, Album $album)
    {
        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperUser()) {
            return true;
        }
    }
}
