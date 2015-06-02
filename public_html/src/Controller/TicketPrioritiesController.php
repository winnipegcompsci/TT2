<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketPriorities Controller
 *
 * @property \App\Model\Table\TicketPrioritiesTable $TicketPriorities
 */
class TicketPrioritiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ticketPriorities', $this->paginate($this->TicketPriorities));
        $this->set('_serialize', ['ticketPriorities']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Priority id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketPriority = $this->TicketPriorities->get($id, [
            'contain' => ['Tickets']
        ]);
        $this->set('ticketPriority', $ticketPriority);
        $this->set('_serialize', ['ticketPriority']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketPriority = $this->TicketPriorities->newEntity();
        if ($this->request->is('post')) {
            $ticketPriority = $this->TicketPriorities->patchEntity($ticketPriority, $this->request->data);
            if ($this->TicketPriorities->save($ticketPriority)) {
                $this->Flash->success(__('The ticket priority has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket priority could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ticketPriority'));
        $this->set('_serialize', ['ticketPriority']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Priority id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketPriority = $this->TicketPriorities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketPriority = $this->TicketPriorities->patchEntity($ticketPriority, $this->request->data);
            if ($this->TicketPriorities->save($ticketPriority)) {
                $this->Flash->success(__('The ticket priority has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket priority could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ticketPriority'));
        $this->set('_serialize', ['ticketPriority']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Priority id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketPriority = $this->TicketPriorities->get($id);
        if ($this->TicketPriorities->delete($ticketPriority)) {
            $this->Flash->success(__('The ticket priority has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket priority could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
