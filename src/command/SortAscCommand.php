<?php
require_once 'CommandInterface.php';
/**
 * SortAscCommand
 * This command sorts an array of numbers in ascending order.
 * 
 * this will implement the CommandInterface
 */
class SortAscCommand implements CommandInterface {

    /**
     * Execute the sort command with given arguments.
     *
     * @param array $args
     * @return string
     */
    public function execute(array $args): string {
        sort($args, SORT_NUMERIC);
        return implode(' ', $args);
    }
}