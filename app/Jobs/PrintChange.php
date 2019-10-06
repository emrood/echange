<?php

namespace App\Jobs;

use Barryvdh\DomPDF\PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class PrintChange implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $change_id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($change_id)
    {
        //
        $this->change_id = $change_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $change = Change::find($this->change_id);

        if($change){
            $pdf = PDF::loadView('change.print', compact('change'));
            return $pdf->download('operation de change - '.$change->created_at.'.pdf');
        }
    }
}
