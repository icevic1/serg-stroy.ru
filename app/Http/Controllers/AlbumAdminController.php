<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController as AdminController;
use Form;
use App\Http\Requests\AlbumAdminRequest;
use App\Interfaces\AlbumRepositoryInterface;
use App\Models\Album;
//use Lavalite\Page\Interfaces\PageRepositoryInterface;

/**
 *
 */
class AlbumAdminController extends AdminController
{
    /**
     * Initialize page controller.
     *
     * @param type AlbumRepositoryInterface $album
     *
     * @return type
     */
    public function __construct(AlbumRepositoryInterface $album)
//    public function __construct(PageRepositoryInterface $page)
    {
//        dd('show', $album   );
//        dd(\Request::route()->getName());
//        $this->model = $page;
        $this->model = $album;
//        dd("AlbumAdminController", $album);
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(AlbumAdminRequest $request)
    {
//        dd('index');

//        $pages  = $this->model->setPresenter('\\Lavalite\\Page\\Repositories\\Presenter\\PageListPresenter')->paginate(NULL, ['*']);
        $this->theme->prependTitle('Фото Галерея :: ');
        $view   = $this->theme->of('admin::album.index')->render();

        $this->responseCode = 200;
        $this->responseMessage = trans('messages.success.loaded', ['Module' => 'Page']);
//        $this->responseData = $pages['data'];
//        $this->responseMeta = $pages['meta'];
        $this->responseView = $view;
        $this->responseRedirect = '';
        return $this->respond($request);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(AlbumAdminRequest $request, Album $album) //, Album $album
    {
        if (!$album->exists) {
            $this->responseCode = 404;
            $this->responseMessage = trans('messages.success.notfound', ['Module' => 'Album']);
            $this->responseView = view('admin::album.new');//Album::album.new

            return $this->respond($request);
        }

        Form::populate($album);
        $this->responseCode = 200;
        $this->responseMessage = trans('messages.success.loaded', ['Module' => 'Album']);
        $this->responseView = view('album::album.show', compact('album'));

        return $this->respond($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(AlbumAdminRequest $request)
    {
        $album = $this->model->newInstance([]);

        Form::populate($album);

        $this->responseCode = 200;
        $this->responseMessage = "ceva text la raspuns"; //trans('messages.success.loaded', ['Module' => 'Permission']);
        $this->responseData = $album;
        $this->responseView = view('admin::album.create', compact('album'));

        return $this->respond($request);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(AlbumAdminRequest $request)
    {
        try {
            $attributes = $request->all();
            $album = $this->model->create($attributes);

            $this->responseCode = 201;
            $this->responseMessage = trans('messages.success.created', ['Module' => 'Album']);
            $this->responseRedirect = trans_url('/admin/album/album/'.$album->getRouteKey());

            return $this->respond($request);
        } catch (Exception $e) {
            $this->responseCode = 400;
            $this->responseMessage = $e->getMessage();

            return $this->respond($request);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function edit(AlbumAdminRequest $request, Album $album)
    {
        Form::populate($album);
        $this->responseCode = 200;
        $this->responseMessage = trans('messages.success.loaded', ['Module' => 'Permission']);
        $this->responseData = $album;
        $this->responseView = view('admin::album.edit', compact('album'));

        return $this->respond($request);
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(AlbumAdminRequest $request, Album $album)
    {
        try {
            $attributes = $request->all();

            $album->update($attributes);

            $this->responseCode = 204;
            $this->responseMessage = trans('messages.success.updated', ['Module' => 'Album']);
            $this->responseRedirect = trans_url('/admin/album/album/'.$album->getRouteKey());

            return $this->respond($request);
        } catch (Exception $e) {
            $this->responseCode = 400;
            $this->responseMessage = $e->getMessage();
            $this->responseRedirect = trans_url('/admin/album/album/'.$album->getRouteKey());

            return $this->respond($request);
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(AlbumAdminRequest $request, Album $album)
    {
        try {
            $t = $album->delete();

            $this->responseCode = 202;
            $this->responseMessage = trans('messages.success.deleted', ['Module' => 'Album']);
            $this->responseRedirect = trans_url('/admin/album/album/0');

            return $this->respond($request);
        } catch (Exception $e) {
            $this->responseCode = 400;
            $this->responseMessage = $e->getMessage();
            $this->responseRedirect = trans_url('/admin/album/album/'.$album->getRouteKey());

            return $this->respond($request);
        }
    }
}
