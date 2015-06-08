<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Pages', 
                'action' => 'enigma_dashboard',
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
            ]
        ]);
        
        $numTickets = 0;
        foreach(TableRegistry::get('Tickets')->find('all', ['conditions' => ['ticket_status_id <>' => '2'] ]) as $ticket) {
            if($ticket->ticket_status_id != 2) {
                $numTickets++;
            } else {
                echo "FALSE";
            }
        }
        
        // SET VARIABLES //
        
        
        $this->set('logged_in_id', $this->Auth->user('id'));
        // Number open Tickets
        $this->set('num_open_tickets', TableRegistry::get('Tickets')->find('all', [
            'conditions' => ['ticket_status_id <>' => '2']
        ])->count());
        
        // Number of Open Projects
        $this->set('num_open_projects', TableRegistry::get('Projects')->find('all', [
            'conditions' => ['project_status_id' => '0']
        ])->count());
        
        $this->set('num_customers_can_bill', TableRegistry::get('Tickets')->find('all', [
            'conditions' => ['billing_status_id' => '2']
        ])->count());
        
        $this->set('_ProjectTable', TableRegistry::get('Projects'));
        $this->set('_TicketTable', TableRegistry::get('Tickets'));
        
        $this->set('usersList', TableRegistry::get('Users')->find('list', [
            'condition' => ['disabled' => false]
        ]));
        
        
    }
        
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['login']);
        // $this->Auth->allow(['index','view','display']);
    }
    
}
