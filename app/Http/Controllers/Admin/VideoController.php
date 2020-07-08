<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function edit(Video $video)
    {
    	return view('admin.video.edit', compact('video'));
    }

    public function update(VideoRequest $request, Video $video)
    {
        try {
            $video->update($request->all());

            $video->save();

            return redirect()->to('admin/video/edit/1')->with('success', 'Seção Video atualizada');

        } catch (\Exception $e) {

            return redirect()->to('admin/video/edit/1')->with('error', 'Erro ao atualizar a seção');

        }
    }
}
