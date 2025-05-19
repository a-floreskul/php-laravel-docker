<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class Cars extends Controller
{
    public function create(Request $request)
    {
        $model = new Car();
        $model->marka = $request->input('marka');
        $model->model = $request->input('model');
        $model->price = $request->input('price');
        $model->save();

        return response()->json(([
            'status' => true,
            'id' => $model->id
        ]));
    }
    public function get($id)
    {
        $model = Car::find($id);
        return response()->json(([
            'status' => true,
            'body' => $model
        ]));
    }
    public function update($id, Request $request)
    {
        $model = Car::find($id);
        $model->marka = $request->input('marka');
        $model->model = $request->input('model');
        $model->price = $request->input('price');
        $model->save();
        return response()->json(([
            'status' => true,
            'id' => $model->id
        ]));
    }
    public function delete($id)
    {
        $model = Car::find($id);
        $model->delete();
        return response()->json(([
            'status' => true,
        ]));
    }
}
