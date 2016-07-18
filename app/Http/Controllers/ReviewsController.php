<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
//use Request;
use App\ClientQuestion;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Input; //Illuminate\Support\Facades\Input
use Intervention\Image\Facades\Image as Image;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

class ReviewsController extends Controller
{
    /**
     * Initialize the review controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
    }

    /**
     * Display homepage.
     *
     * @return response
     */
    public function index()
    {
        $this->theme->layout('home');

        return $this->theme->of('public::reviews', compact('page'))->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
//        $request->files->all()
//        $file = $request->file('myfile');
//        $file->getRealPath()
//        $img = Image::make('foo.jpg')->resize(320, 240)->insert('watermark.png');
//Session::flash('flash_message', 'Task successfully added!');
        /*$request->file('img')->move(public_path('thumb/items'), $request->file('img')->getClientOriginalName());
        $data = $request->except(['img']);
        $data['img'] = '/thumb/items/' . $request->file('img')->getClientOriginalName();*/

        /*if ($image = Input::file('photo'))
        {
            $filename  = str_random(6) . '.' . $image->getClientOriginalExtension();
            $path = public_path('/uploads/' . $filename);
            $resizedImage = Image::make($image->getRealPath())->resize(200, 200);
            $resizedImage->response('jpg');
            Storage::put('uploads/' . $filename,  $resizedImage);
        }*/

        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'review' => 'required',
            'image' => 'mimes:jpeg,bmp,png,jpg|max:5000'
        );
        $validator = Validator::make($request->all(), $rules);
//        dd($request->all(), $validator->fails(), $validator->errors(), $validator->messages());
        // process the login
        if ($validator->fails()) {
//            $messages = $validator->messages();
//            dd($messages, $validator->errors());
//            return response()->json($validator->errors(), 500);
//            return redirect()->back()->withInput()->withErrors($validator);
//            Session::flash('message_error', $validator->messages());
//            dd($validator->messages());
            return Redirect::back()->with('message', true)->withErrors($validator)->withInput($request->all());
        }
        else
        {
            if($request->hasFile('image')) //Проверяем была ли передана картинка, ведь статья может быть и без картинки.
            {
                $image = Input::file('image');
                $filename  = time() . '.' . $image->getClientOriginalExtension();
                $filename_thumb  = time() . 'x250_thumb.' . $image->getClientOriginalExtension();
                $path = public_path('images/' . $filename);
                $path_thumb = public_path('images/' . $filename_thumb);

                $img = Image::make($image->getRealPath());

                // resize if size is too big
                if($img->getWidth() > 1024) {
                    $img->resize(1024, null, function ($constraint) {
                        $constraint->aspectRatio();// resize the image to a width of 300 and constrain aspect ratio (auto height)
                        $constraint->upsize();// prevent possible upsizing
                    });
                }

                // Save, still need throw exception
                $img->save($path);

                $this->cropImage($path, $path_thumb);

//                Image::make($image->getRealPath())->resize(200)->save($path);
                $all = $request->all(); //в переменой $all будет массив, который содержит все введенные данные в форме
                $all['image'] = "/images/".$filename_thumb;// меняем значение preview на нашу ссылку, иначе в базу попадет что-то вроде /tmp/sdfWEsf.tmp
                $all['ip_address'] = $request->ip();

                Review::create($all); //сохраняем массив в базу
            }
            else
            {
                $all = $request->all();
                $all['ip_address'] = $request->ip();
                Review::create($all); // если картинка не передана, то сохраняем запрос, как есть.
            }

            return back()->with('message_success', 'Ваше мнение было добавлена успешно!');//            return Redirect::to('/');
        }
    }

    /**
     * @param $image_path
     * @param $path_thumb
     * @param int $new_w
     * @param int $new_h
     * @param string $focus
     * @return mixed
     */
    private function cropImage($image_path, $path_thumb, $new_w = 250, $new_h = 250, $focus = 'center')
    {
        // create an image manager instance with favored driver

        $imageManager = new ImageManager(array('driver' => 'gd'));//imagick
        $img = $imageManager->make($image_path);
        $w = $img->getWidth();
        $h = $img->getHeight();
        if ($w > $h) {
            $resize_w = $w * $new_h / $h;
            $resize_h = $new_h;
        }
        else {
            $resize_w = $new_w;
            $resize_h = $h * $new_w / $w;
        }

        switch ($focus) {
            case 'top-left':
                $img->resize($resize_w, $resize_h)->crop($new_w, $new_h, 0, 0);
                break;

            case 'center':
                $img->resize($resize_w, $resize_h)->crop($new_w, $new_h, round(($resize_w - $new_w) / 2), round(($resize_h - $new_h) / 2));
                break;

            case 'top-right':
                $img->resize($resize_w, $resize_h)->crop($new_w, $new_h, round($resize_w - $new_w), 0);
                break;

            case 'bottom-left':
                $img->resize($resize_w, $resize_h)->crop($new_w, $new_h, 0, round($resize_h - $new_h));
                break;

            case 'bottom-right':
                $img->resize($resize_w, $resize_h)->crop($new_w, $new_h, round($resize_w - $new_w), round($resize_h - $new_h));
                break;
        }

        $img->save($path_thumb);
        return $path_thumb;

        /*$date = date('d.m.Y'); //опеределяем текущую дату, она же будет именем каталога для картинок
                $root = $_SERVER['DOCUMENT_ROOT']."/images/"; // это корневая папка для загрузки картинок
                if(!file_exists($root.$date)){mkdir($root.$date);} // если папка с датой не существует, то создаем ее
                $f_name = str_random(6). '_' .$request->file('image')->getClientOriginalName();//определяем имя файла
                $request->file('image')->move($root.$date, $f_name); //перемещаем файл в папку с оригинальным именем
                $image = Image::make(sprintf('images/%s', $f_name))->resize(200, 200)->save();*/

        /*
        // Picture ratio
        $ratio = 4/3;
        // Check the current size of img is appropriate or not, if ratio of current img is greater than 1.33, then crop
        if(intval($img->width()/$ratio > $img->height())) {
            // Fit the img to ratio of 4:3, based on the height
            $img->fit(intval($img->height() * $ratio), $img->height());
        } else {
            // Fit the img to ratio of 4:3, based on the width
            $img->fit($img->width(), intval($img->width()/$ratio));
        }*/
    }


}
