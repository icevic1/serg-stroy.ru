<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Litepie\Database\Model;
//use Litepie\Database\Traits\Slugger;
//use Litepie\Filer\Traits\Filer;
//use Litepie\Hashids\Traits\Hashids;
//use Litepie\Trans\Traits\Trans;

class Album extends Model
{
//    use Filer, Hashids, Slugger, Trans;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'album.album';

    /**
     * Many-to-many permission-role relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
/*    public function roles()
    {
        return $this->belongsToMany('Litepie\User\Models\Role');
    }*/
}
