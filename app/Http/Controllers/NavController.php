<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Drawer;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function comics()
    {
        $comics = Comic::all();
        return view('comics', ['comics' => $comics]);
    }

    public function addComic() {
        $drawers = Drawer::all()->sortBy('name');
        return view('addComic', ['drawers' => $drawers]);
    }

    public function comic($id) {
        $comic = Comic::findOrFail($id);
        return view('comic', ['comic' => $comic]);
    }

    public function updateComic(Request $request) {
        $comic = Comic::findOrFail($request->id);
        $drawers = Drawer::all()->sortBy('name');
        return view('updateComic', ['comic' => $comic, 'drawers' => $drawers]);
    }


    public function drawers()
    {
        $drawers = Drawer::all();
        return view('drawers', ['drawers' => $drawers]);
    }

    public function addDrawer() {
        $drawers = Drawer::all()->sortBy('name');
        return view('addDrawer', ['drawers' => $drawers]);
    }

    public function rawer($id) {
        $drawer = Drawer::findOrFail($id);
        return view('drawer', ['drawer' => $drawer]);
    }

    public function updateDrawer(Request $request) {
        $drawer = Drawer::findOrFail($request->id);
        $drawers = Drawer::all()->sortBy('name');
        return view('updateDrawer', ['drawer' => $drawer]);
    }
}