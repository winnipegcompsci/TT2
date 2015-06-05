<?php
namespace App\Shell;

use Cake\Console\Shell;

class GetUserShell extends Shell
{
    public function main()
    {
        $this->out('Getting Users from WTCR Drupal Database....');
    }
}