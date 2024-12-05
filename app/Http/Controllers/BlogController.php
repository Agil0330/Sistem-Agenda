<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class BlogController extends Controller
{
    public function index(){
        $data_event=event::all();
        return view ('content.contentmaster', compact('data_event'));
    }
    
    public function home(){
        return view ('content.contenthome');
    }
    public function add(){
        return view('content.addevent');
    }

// menambahkan data Event
    public function push(Request $request){
        Event::create($request->all());
        // $data_event['nama_event'] = $request->nama_event;
        // $data_event['waktu'] = $request->waktu;
        // $data_event['tanggal'] = $request->tanggal;
        // $data_event['lokasi'] = $request->lokasi;
        // $data_event['keterangan'] = $request->keterangan;
        // Event::create($data_event);
        return redirect() -> route('event');
    }
// mengedit data Event
    public function edit(Request $request,$id){
        $data_event=Event::find($id);
        return view('content.editevent', compact('data_event'));
    }
    public function update(Request $request,$id){
        // Event::where($id)->update($data_event);
        $data_event = Event::findorfail($id);
        $data_event->update($request->all());
        return redirect() -> route('event');
    }
}
