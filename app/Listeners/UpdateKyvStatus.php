<?php

namespace App\Listeners;

use App\Events\NewDocUpload;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Fornecedor;
use App\TipoFornecedor;

class UpdateKyvStatus
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewDocUpload  $event
     * @return void
     */
    public function handle(NewDocUpload $event)
    {
        
    }
}
