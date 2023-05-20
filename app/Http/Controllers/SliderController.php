<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel as MainModel;

class SliderController extends Controller
{
    private $pathViewController = 'admin.pages.slider.';
    private $controllerName     = 'slider';
    private $params = [];
    private $model;

    public function __construct()
    {
        $this->model = new MainModel();
        $this->params['pagination']['totalItemsPerPage'] = 2;
        view()->share('controllerName', $this->controllerName);
    }

    public function index()
    {
        $items = $this->model->listItems($this->params, ['task' => 'admin-list-items']);
        return view($this->pathViewController . 'index', [
            'items' => $items
        ]);
    }
    public function form($id = null)
    {
        $title = 'SliderController - form';
        return view($this->pathViewController . 'form', [
            'mid' => $id,
            'mtitle' => $title
        ]);
    }
    public function status(Request $request)
    {
        echo '<h3 style="color:red">ID: ' . $request->route('id') . '</h3>';
        echo '<h3 style="color:red">STATUS: ' . $request->route('status') . '</h3>';
        echo '<h3 style="color:red">ID: ' . $request->id . '</h3>';
        echo '<h3 style="color:red">STATUS: ' . $request->status . '</h3>';
        return redirect()->route('slider');
    }
    public function delete()
    {
        return view($this->pathViewController . 'delete');
    }
}
