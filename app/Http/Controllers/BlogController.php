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
        $jumlah=event::count();
        return view ('content.contenthome', compact('jumlah'));
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
        return redirect() -> route('adminevent');
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
        return redirect() -> route('adminevent');
    }

// menghapus data Event
    public function hapus(Request $request,$id){
        $data_event = Event::findorfail($id);
        $data_event->delete();
        return back();
    }
}
