<?php namespace Cronos;

defined('CRONOS_DIR') || exit;

use Cronos\Includes\Logger,
    Cronos\Includes\Job,
    Cronos\Includes\JobManager,
    Cronos\Includes\JobRunner,
    Cronos\Includes\JobScheduler;

class Cronos
{
    private array $settings;

    private Logger $logger;

    private Job $currentJob;

    private JobManager $jobManager;

    private JobRunner $jobRunner;

    private JobScheduler $jobScheduler;

    public function __construct()
    {
        $this->settings = get_option('cronos_settings') ?: [];
        $this->logger = new Logger();
        $this->jobManager = new JobManager();
        $this->jobRunner = new JobRunner();
        $this->jobScheduler = new JobScheduler();
        if (!wp_next_scheduled('cronos_current_job')) {
            $this->currentJob = new Job([
                'name' => 'cronos_test_job',
                'schedule' => 'once',
                'callback' => [$this, 'testJob'],
            ]);
        }
    }

    public function getRunner(): JobRunner
    {
        return $this->jobRunner;
    }

    public function getScheduler(): JobScheduler
    {
        return $this->jobScheduler;
    }

    public function getManager(): JobManager
    {
        return $this->jobManager;
    }

    public function getLogger(): Logger
    {
        return $this->logger;
    }

    public function getSettings(): array
    {
        return $this->settings;
    }

    public function getCurrentJob(): Job
    {
        return $this->currentJob;
    }

    public function testJob(): void
    {
        $this->logger->log('Test job ran!');
    }

    public function activate(): void
    {
        $this->logger->log('Cronos activated!');
        $this->jobScheduler->schedule($this->currentJob);
    }

    public function deactivate(): void
    {
        $this->logger->log('Cronos deactivated!');
        $this->jobScheduler->unschedule($this->currentJob);
    }

    public function uninstall(): void
    {
        $this->logger->log('Cronos uninstalled!');
        $this->jobScheduler->unschedule($this->currentJob);
    }
}