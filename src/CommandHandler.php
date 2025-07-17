<?php
require_once 'command/AddCommand.php';
require_once 'command/SortAscCommand.php';
require_once 'command/RepoDescCommand.php';

class CommandHandler {
    private $commands = [];

    public function __construct() {
        
        /**
         * Initialize available commands.
         * 
         * add new impelented commands in the commands array to make them available
         */

        $this->commands = [
            'add' => new AddCommand(),
            'sort-asc' => new SortAscCommand(),
            'repo-desc' => new RepoDescCommand(),
        ];
    }

    public function handle(string $input): string {

        // Trim and validate input

        $input = trim($input);

        // check if input is empty
        if (!$input) return "Input is empty";

        // Split input into command and arguments
        $parts = preg_split('/\s+/', $input);
        $command = strtolower(array_shift($parts));

        // Check if command exists
        if (!isset($this->commands[$command])) {
            return "Unknown command: $command";
        }

        // Execute the command with the provided arguments
        return $this->commands[$command]->execute($parts);
    }
}