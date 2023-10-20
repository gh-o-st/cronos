<?php namespace Cronos;

defined('CRONOS_DIR') || exit;

class Job
{
    private string $name;

    private string $schedule;

    private string $callback;

    private bool $isRunning = false;

    private bool $isScheduled = false;

    private bool $isComplete = false;

    private bool $isCancelled = false;

    private bool $isFailed = false;

    private int $lastRunTime = 0;

    private int $nextRunTime = 0;

    private string $lastStatus = '';

    private int $runCount;

    private JobManager $manager;

    public function __construct(string $name, string $schedule, int $count, $callback, JobManager $manager)
    {
        $this->name = $name;
        $this->schedule = $schedule;
        $this->runCount = $count;
        $this->callback = $callback;
        $this->manager = $manager;
    }

    // ... getter and setter methods ...
}