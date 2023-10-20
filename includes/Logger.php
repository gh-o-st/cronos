<?php namespace Cronos;

defined('CRONOS_DIR') || exit;

use Cronos\Job;

class Logger
{
    private array $logs = [];

    public function __construct()
    {
        add_action('cronos_log', [$this, 'log']);
    }

    public function addEntry(string $type, string $message, ?Job $associatedJob, ?array $context = null): void
    {
        if ($associatedJob) {
            $logEntry['job'] = [
                'name' => $associatedJob->getName(),
                'schedule' => $associatedJob->getSchedule(),
                'callback' => $associatedJob->getCallback(),
                'status' => [
                    'last_run' => $associatedJob->getLastRun(),
                    'next_run' => $associatedJob->getNextRun(),
                    'last_result' => $associatedJob->getLastResult(),
                    'last_result_message' => $associatedJob->getLastResultMessage(),
                ],
            ];
        }


    }

    public function getLogs(): array
    {
        return $this->logs;
    }

    public function clearLogs(): void
    {
        $this->logs = [];
    }
}