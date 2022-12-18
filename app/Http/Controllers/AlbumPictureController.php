<?php

namespace App\Http\Controllers;

use App\Models\AlbumPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AlbumPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AlbumPicture::all();
        // dd($data);
        return view('index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        $data = [
            'image' => $request->file('pic')->store('album-picture'),
            'title' => $request->title,
            'description' => $request->desc,
            'picture_taken' => Carbon::parse($request->date),
        ];

        AlbumPicture::create($data);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlbumPicture  $albumPicture
     * @return \Illuminate\Http\Response
     */
    public function destroy($albumPicture)
    {
        $data = AlbumPicture::find($albumPicture);

        if($data->image){
            $tes = Storage::delete($data->image);
        }
        
        $data->destroy($data->id);

        return redirect()->route('index');
    }
}
