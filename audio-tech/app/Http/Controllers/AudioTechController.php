<?php

namespace App\Http\Controllers;

use App\Models\AudioTech;
use Illuminate\Http\Request;

class AudioTechController extends Controller
{
    public function get()
    {
        $audioTechs = AudioTech::orderBy('id', 'DESC')->get();

        return $audioTechs;
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'power' => 'required',
            'price' => 'required',
        ]);

        $audioTech = new AudioTech();
        $audioTech->title = $request->title;
        $audioTech->description = $request->description;
        $audioTech->type = $request->type;
        $audioTech->power = $request->power;
        $audioTech->price = $request->price;
        $audioTech->save();

        return $audioTech;
    }

    public function delete(Request $request)
    {
        $audioTech = AudioTech::where('id', $request->id)->firstOrFail();
        $audioTech->delete();

        return true;
    }

    public function edit(Request $request)
    {
        $audioTech = AudioTech::where('id', $request->id)->firstOrFail();
        return $audioTech;
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'power' => 'required',
            'price' => 'required',
        ]);

        $audioTech = AudioTech::where('id', $request->id)->firstOrFail();
        $audioTech->title = $request->title;
        $audioTech->description = $request->description;
        $audioTech->type = $request->type;
        $audioTech->power = $request->power;
        $audioTech->price = $request->price;
        $audioTech->save();

        return $audioTech;
    }
}
