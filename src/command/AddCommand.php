<?php
require_once 'CommandInterface.php';
/**
 * AddCOmmand
 * 
 * this will implement the CommandInterface
 */
class AddCommand implements CommandInterface {

    /**
     * Execute the add command with given arguments.
     *
     * @param array $args
     * @return string
     */
    public function execute(array $args): string {
        if (empty($args) || !array_reduce($args, fn($carry, $i) => $carry && is_numeric($i), true)) {
            return "Invalid arguments for add";
        }
        return array_sum($args);
    }
}