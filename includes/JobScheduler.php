<?php namespace Cronos;

defined('CRONOS_DIR') || exit;

use Cronos\Job,
    Cronos\JobRunner,
    Cronos\JobScheduler;

class JobManager
{
    private array $jobs = [];
    private JobRunner $runner;

    public function __construct()
    {
        $this->runner = new JobRunner();
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