<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Drawer;

class ActionController extends Controller
{
    public function addComic(Request $request) {
        $comic = new Comic;
        $comic->title = $request->title;
        $comic->comic_title = $request->comic_title;
        $comic->drawer_id = $request->drawer_id;
        $comic->creation_year = $request->creation_year;
        $comic->save();
        return redirect('comics');
    }

    public function deleteComic(Request $request) {
        $comic = Comic::findOrFail($request->id);
        $comic->delete();
        return redirect('comics');
    }

    public function updateComic(Request $request) {
        $drawer = drawer::findOrFail($request->id);
        $drawer->name = $request->name;
        $drawer->nationality = $request->nationality;
        $drawer->birth_year = $request->birth_year;
        $drawer->save();
        return redirect('drawers');
    }


    public function addDrawer(Request $request) {
        $drawer = new Drawer;
        $drawer->name = $request->name;
        $drawer->nationality = $request->nationality;
        $drawer->birth_year = $request->birth_year;
        $drawer->save();
        return redirect('drawers');
    }

    public function deleteDrawer(Request $request) {
        $drawer = Drawer::findOrFail($request->id);
        $drawer->delete();
        return redirect('drawers');
    }

    public function updateDrawer(Request $request) {
        $drawer = Drawer::findOrFail($request->id);
        $drawer->name = $request->name;
        $drawer->nationality = $request->nationality;
        $drawer->birth_year = $request->birth_year;
        $drawer->save();
        return redirect('drawers');
    }
}