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

namespace KodeKeep\VerificationTickets\Providers;

use Illuminate\Support\ServiceProvider;

class VerificationTicketServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../database/migrations/create_verification_tickets_table.stub' => $this->getMigrationPath('create_verification_tickets_table'),
            ], 'migrations');
        }
    }

    private function getMigrationPath(string $file): string
    {
        $timestamp = date('Y_m_d_His');

        return $this->app->databasePath("/migrations/{$timestamp}_{$file}.php");
    }
}
