<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Duck;

class DuckController extends Controller
{

    public function index()
    {
        $ducks = Duck::where('is_alive', 1)->get();
        return view('index', compact('ducks'));

    }

    public function store(Request $request)
    {
        $duck_name = $this->validate($request, [
            'duck_name' => 'required|min:2',
        ]);

        Duck::create($duck_name);

        return redirect('/');
    }

    public function create()
    {
        return view('create');
    }

    public function edit(Duck $duck)
    {
        //
    }

    public function update(int $id, $column)
    {
        Duck::where('id', $id)->update([$column => 0]);
    }

    public function destroy(int $id)
    {
        $dead = Duck::where('id', '=', $id)->update(['is_alive' => 0]);
        return redirect('/');
    }

    public function feed($id)
    {
        $this->update($id, 'hunger');
        return redirect('/');
    }

    public function play($id)
    {
        $this->update($id, 'sadness');
        return redirect('/');
    }

    public function clean($id)
    {
        $this->update($id, 'dirtyness');
        return redirect('/');
    }


}
