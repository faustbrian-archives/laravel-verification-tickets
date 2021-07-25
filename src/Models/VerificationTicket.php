<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Verification Tickets.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\VerificationTickets\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class VerificationTicket extends Model
{
    public function verifiable(): MorphTo
    {
        return $this->morphTo();
    }

    public function isExpired(): bool
    {
        return Carbon::now()->subHour()->gte($this->created_at);
    }
}
