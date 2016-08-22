<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Package modules
    |--------------------------------------------------------------------------
    |
    | Here is the modules included in this package which can be used in this package.
    |
    */
    'modules'       => ['album'],

    /*
    |--------------------------------------------------------------------------
    | User's roles on public side
    |--------------------------------------------------------------------------
    |
    | This array contains the roles which a user can be assigned while creating a
    | user form public side, donot include admin or superuser  role in thia array.
    |
    */
    /*'roles'         => ['user'],*/

    /*
    |--------------------------------------------------------------------------
    | User's default role
    |--------------------------------------------------------------------------
    |
    | Deafult role for a user if it is not specifyed explicitly.
    |
    */
   /* 'default_roles' => ['user'],*/

    /*
    |--------------------------------------------------------------------------
    | Superuser role
    |--------------------------------------------------------------------------
    |
    | Super user role name for a user, a super user can perform all functionalities
    | on the website.
    |
    */
    /*'superuser_role' => 'superuser',*/

    /*
    |--------------------------------------------------------------------------
    | Image sizes
    |--------------------------------------------------------------------------
    |
    | Size of image which can be used in this package.
    |
    */
    /*'image'         => [
                        'xs'        => ['width' => '60',     'height' => '45'],
                        'sm'        => ['width' => '100',    'height' => '75'],
                        'md'        => ['width' => '460',    'height' => '345'],
                        'lg'        => ['width' => '800',    'height' => '600'],
                        'xl'        => ['width' => '1000',   'height' => '750'],
    ],*/

    /*
    |--------------------------------------------------------------------------
    | Album module
    |--------------------------------------------------------------------------
    |
    | Configuration for the user module.
    |
    */
    'album' => [
        'name'              => 'Album',
        'table'         => 'albums',
        'model'         => 'App\Models\Album',
        'primaryKey'    => 'id',
       /* 'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => [],
        'dates'         => ['deleted_at'],
        'appends'       => [''],*/
        'fillable'      => ['name','user_id','description','views'],
        'listfields'    => ['id', 'name','user_id','description','views'],
        'perPage'       => '20',
        'uploadfolder'  => '/uploads/users',
        'uploadable'    => [
                                'single'   => ['photo'],
                                'multiple' => [],
                            ],
        /*'casts'         => [
                            'albums'   => 'array',
                           ],*/

        ],


];
