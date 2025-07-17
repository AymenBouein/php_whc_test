<?php
require_once 'CommandInterface.php';
/**
 * RepoDescCommand
 * Github Reporsitory Description Command
 * 
 * this will implement the CommandInterface
 */
class RepoDescCommand implements CommandInterface {

    /**
     * Execute the repo description command with given arguments.
     *
     * @param array $args
     * @return string
     */
    public function execute(array $args): string {
        if (count($args) !== 2) return "Expected: repo-desc owner repo";
        $owner = htmlspecialchars($args[0]);
        $repo = htmlspecialchars($args[1]);

        $url = "https://api.github.com/repos/{$owner}/{$repo}";

        $opts = ['http' => [
            'method' => 'GET',
            'header' => "User-Agent: PHP"
        ]];
        $context = stream_context_create($opts);
        $json = file_get_contents($url, false, $context);

        if ($json === false) return "Failed to fetch repo";

        $data = json_decode($json, true);
        return $data['description'] ?? 'No description found';
    }
}