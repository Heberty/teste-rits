<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MainRequest;
use App\Models\Main;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function edit(Main $main)
    {
        $mains = Main::get();

    	return view('admin.main.edit', compact('main', 'mains'));
    }

    public function update(MainRequest $request, Main $main)
    {
        try {
            $main->update($request->all());

            if($request->hasFile('image')) {
                $main->image = Str::random(24) . '.' . $request->file('image')->getClientOriginalExtension();
            }

            $main->save();

            if($request->hasFile('image')) {
                Storage::putFileAs('main', $request->file('image'), $main->image);
            }

            return redirect()->to('admin/main/edit/1')->with('success', 'Seção Main atualizada');

        } catch (\Exception $e) {

            return redirect()->to('admin/main/edit/1')->with('error', 'Erro ao atualizar a seção');

        }
    }
}
