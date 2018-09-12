<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\FornecedorDocs;

class NewDocUpload
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $fornecedordocs;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(FornecedorDocs $fornecedordocs)
    {
        $this->fornecedordocs = $fornecedordocs;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
