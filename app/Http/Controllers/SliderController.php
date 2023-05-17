<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SliderController extends Controller
{
    private $pathViewController = 'admin.slider.';
    private $controllerName     = 'slider123';

    public function __construct()
    {
        View()->share('controllerName', $this->controllerName);
    }

    public function index()
    {
        return view($this->pathViewController . 'index', []);
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
