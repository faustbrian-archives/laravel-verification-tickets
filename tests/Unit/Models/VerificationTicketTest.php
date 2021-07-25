<?php

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Konceiver\VerificationTickets\Models\VerificationTicket;

it('morphs to verifiable', function () {
    $this->assertInstanceOf(MorphTo::class, (new VerificationTicket())->verifiable());
});

it('can determine if the ticket is expired', function () {
    $ticket             = new VerificationTicket();
    $ticket->created_at = Carbon::now()->subWeeks(2);

    $this->assertTrue($ticket->isExpired());

    $ticket->created_at = Carbon::now()->addWeeks(2);

    $this->assertFalse($ticket->isExpired());
});
