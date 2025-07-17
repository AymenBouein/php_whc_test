<?php
require_once 'CommandHandler.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['input'])) {
    $input = $_POST['input'];
    
    $commandHandler = new CommandHandler();

    echo $commandHandler->handle($input);

    exit;
}