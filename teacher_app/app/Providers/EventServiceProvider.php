<?php

namespace App\Providers;

use App\Jobs\HomeworkCreated;
use App\Jobs\HomeworkDeleted;
use App\Jobs\HomeworkSolved;
use App\Jobs\HomeworkUpdated;
use App\Jobs\TestJob;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \App::bindMethod(TestJob::class . '@handle' , fn($job) => $job->handle());
        \App::bindMethod(HomeworkCreated::class . '@handle' , fn($job) => $job->handle());
        \App::bindMethod(HomeworkUpdated::class . '@handle' , fn($job) => $job->handle());
        \App::bindMethod(HomeworkDeleted::class . '@handle' , fn($job) => $job->handle());
        \App::bindMethod(HomeworkSolved::class . '@handle' , fn($job) => $job->handle());
    }
}
