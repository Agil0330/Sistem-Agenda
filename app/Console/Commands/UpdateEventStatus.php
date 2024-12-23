<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Event;
use Carbon\Carbon;

class UpdateEventStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-event-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update event status from "Belum Terlaksana" to "Terlaksana" if the event date has passed';

    /**
     * Execute the console command.
     */
    public function handle()
    {
         // Mendapatkan tanggal hari ini
         $today = Carbon::today();

         // Mencari semua event yang statusnya "Belum Terlaksana" dan tanggal eventnya sudah lewat
         $events = Event::where('status', 'Belum Terlaksana')
                        ->where('tanggal_event', '<', $today)
                        ->get();
 
         // Loop untuk memperbarui status setiap event yang ditemukan
         foreach ($events as $event) {
             $event->status = 'Terlaksana'; // Mengubah status menjadi 'Terlaksana'
             $event->save(); // Menyimpan perubahan
             $this->info('Event "' . $event->nama_event . '" status changed to "Terlaksana".');
         }
 
         $this->info('Event status update completed!');
    }
}
