<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Количество попыток выполнения задания.
     *
     * @var int
     */
    // public $tries = 25;

    /**
     * Максимальное количество разрешенных необработанных исключений.
     *
     * @var int
     */
    // public $maxExceptions = 3;

    /**
     * Задать временной предел попыток выполнить задания.
     *
     * @return \DateTime
     */
    // public function retryUntil()
    // {
    //     return now()->addMinutes(5);
    // }


    /**
     * Количество секунд, по истечении которых уникальная блокировка задания будет снята.
     *
     * @var int
     */
    // public $uniqueFor = 3600;

    protected $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Log::info($this->message);
    }
}
