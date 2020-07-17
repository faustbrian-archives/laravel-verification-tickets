<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Verification Tickets.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\VerificationTickets\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Str;
use KodeKeep\VerificationTickets\Models\VerificationTicket;

trait HasVerificationTickets
{
    public function verificationTickets(): MorphMany
    {
        return $this->morphMany(VerificationTicket::class, 'verifiable');
    }

    public function createVerificationTicket(string $type): VerificationTicket
    {
        return $this->verificationTickets()->create([
            'type' => $type,
            'code' => Str::random(64),
        ]);
    }

    public function completeVerificationTicket(string $type): void
    {
        $this->verificationTickets()->where('type', $type)->update(['is_completed' => true]);
    }

    public function getVerificationTicket(string $type): VerificationTicket
    {
        return $this->verificationTickets()->where('type', $type)->firstOrFail();
    }

    public function getVerificationTicketCode(string $type): string
    {
        return $this->getVerificationTicket($type)->code;
    }
}
