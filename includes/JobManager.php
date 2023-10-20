<?php namespace Cronos;

defined('CRONOS_DIR') || exit;

use Cronos\JobScheduler,
    Cronos\JobRunner;
    
class JobManager
{
    private array $jobs = [];
    private JobScheduler $scheduler;
    private JobRunner $runner;

    public function __construct()
    {
        $this->scheduler = new JobScheduler();
        $this->runner = new JobRunner();
    }

    public function createNewScheduler(): JobScheduler
    {
        return clone $this->scheduler;
    }

    public function createNewRunner(): JobRunner
    {
        return clone $this->runner;
    }

    public function getJobs(): array
    {
        return $this->jobs;
    }
}
