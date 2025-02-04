<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Setting;
use illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Console\Command;

class BlogController extends Controller
{
    public function index(Request $request){
        $cari=$request->query('cari');
        if(!empty($cari)){
            $data_event=event::sortable()
            ->where('nama_event','LIKE','%'.$cari.'%')
            ->orwhere('lokasi','LIKE','%'.$cari.'%')
            ->orwhere('keterangan','LIKE','%'.$cari.'%')
            ->paginate(10)->onEachSide(2);
        }else{
            $data_event=event::sortable()->paginate(10)->onEachSide(2);
        }

        $today=Carbon::today();

        $update=event::where('status', 'Belum Terlaksana')
                     ->where('tanggal', '<', $today)
                     ->where('waktu', '<', $today)
                     ->get();
        foreach ($update as $event) {
           $event->status = 'Terlaksana'; // Mengubah status menjadi 'Terlaksana'
           $event->save(); // Menyimpan perubahan
        }

        // $data_event=event::sortable()->paginate(10)->onEachSide(2);
        return view ('content.contentmaster', compact('data_event'))->with([
            'cari' => $cari,
        ]);

    }
    
    public function home(){
        $jumlah=event::count();
        $terlaksana=event::where('status','Terlaksana')->count();
        $blmter=event::where('status','Belum Terlaksana')->count();
        return view ('content.contenthome', compact('jumlah','terlaksana','blmter'));
    }
    public function add(){
        return view('content.addevent');
    }

// menambahkan data Event
    public function push(Request $request){
        Event::create($request->all());
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

// menampilkan data untuk User Form
    public function view(){ 
        $setting=setting::all();
        $data=event::all()->where('status','Belum Terlaksana');
        // Mengambil waktu saat ini menggunakan Carbon
        $currentTime = Carbon::now()->locale('id');
        return view ('user', compact('data','currentTime','setting'));
    }


// mengedit settingan pada View
    public function layout(){
        return view('content.contentsetting');
    }
    public function stt(Request $request){
        $request->validate([

            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // $setting = Setting::create($request->all());
        // if($request->hasFile('logo')){
        //     $request->file('logo')->move('image/',$request->file('logo')->getClientOriginalName());
        //     $setting->logo = $request->file('logo')->getClientOriginalName();
        //     $setting->save();
        // }

        $nm = $request->logo;
        $logo =time().rand(100,999).".".$nm->getClientOriginalExtension();
        $nw = new setting;
        $nw -> judul = $request->judul;
        $nw->text = $request->text;
        $nw->logo = $logo;

        $nm->move(public_path().'/image',$logo);
        $nw->save();
        return redirect()->route('adminsetting');
    }

}
