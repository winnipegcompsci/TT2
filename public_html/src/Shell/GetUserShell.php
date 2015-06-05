<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Network\Http\Client;

class GetUserShell extends Shell
{
    public function main()
    {
        $http = new Client();
        
        $this->out('Getting Users from WTCR Drupal Database....');
        
        $usersXML = $http->get('http://dev.wtcr.ca/api/user')->body;
        
        $this->out($usersXML);
        // $xmlOBJ = simplexml_load_string($usersXML);
        
        // $this->out(print_r($xmlOBJ, TRUE));
               
        
        $this->out('Finished Getting Users....');
    }
}