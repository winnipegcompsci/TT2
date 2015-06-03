<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
     
    public function beforeFilter(Event $event) 
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['logout']);
    }    
     
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserRoles', 'Customers']
        ];
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    public function login() 
    {
            $this->layout = "login";
        if($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->Flash->success("Logged in.");
                return $this->redirect($this->Auth->redirectUrl());
            }
            echo $this->Flash->error('Invalid username or password, try again');
        }
    }
    
    public function logout() 
    {
        return $this->redirect($this->Auth->logout());
    }
    
    
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['UserRoles', 'Customers', 'CustomerNotes', 'Messages', 'ProjectTasks', 'TicketEvents', 'TicketHistory', 'Tickets']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                debug($user);
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $userRoles = $this->Users->UserRoles->find('list', ['limit' => 200]);
        $customers = $this->Users->Customers->find('list', ['limit' => 200]);
        $this->set(compact('user', 'userRoles', 'customers'));
        $this->set('_serialize', ['user']);
    }

    public function toggleOnlineStatus($id) {
        $usersTable = TableRegistry::get('Users');
        $thisuser = $usersTable->get($id);
        
        if($thisuser->is_online == false) {
            $thisuser->is_online = true;
            $statustext = "ONLINE";
        } else {
            $thisuser->is_online = false;
            $statustext = "OFFLINE";
        }
        
        if($usersTable->save($thisuser)) {
            $this->Flash->default("Changed User Availability to " . $statustext);
        } else {
            error_log("NOT SAVED");
            $this->Flash->error("Could not update status -- try soon");
        }
        
        // Reload Page
        return $this->redirect($this->referer());
        
    }
    
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $userRoles = $this->Users->UserRoles->find('list', ['limit' => 200]);
        $customers = $this->Users->Customers->find('list', ['limit' => 200]);
        $this->set(compact('user', 'userRoles', 'customers'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
