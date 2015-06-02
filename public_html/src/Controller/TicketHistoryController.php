<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketHistory Controller
 *
 * @property \App\Model\Table\TicketHistoryTable $TicketHistory
 */
class TicketHistoryController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tickets', 'Users']
        ];
        $this->set('ticketHistory', $this->paginate($this->TicketHistory));
        $this->set('_serialize', ['ticketHistory']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket History id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketHistory = $this->TicketHistory->get($id, [
            'contain' => ['Tickets', 'Users']
        ]);
        $this->set('ticketHistory', $ticketHistory);
        $this->set('_serialize', ['ticketHistory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketHistory = $this->TicketHistory->newEntity();
        if ($this->request->is('post')) {
            $ticketHistory = $this->TicketHistory->patchEntity($ticketHistory, $this->request->data);
            if ($this->TicketHistory->save($ticketHistory)) {
                $this->Flash->success(__('The ticket history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket history could not be saved. Please, try again.'));
            }
        }
        $tickets = $this->TicketHistory->Tickets->find('list', ['limit' => 200]);
        $users = $this->TicketHistory->Users->find('list', ['limit' => 200]);
        $this->set(compact('ticketHistory', 'tickets', 'users'));
        $this->set('_serialize', ['ticketHistory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket History id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketHistory = $this->TicketHistory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketHistory = $this->TicketHistory->patchEntity($ticketHistory, $this->request->data);
            if ($this->TicketHistory->save($ticketHistory)) {
                $this->Flash->success(__('The ticket history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket history could not be saved. Please, try again.'));
            }
        }
        $tickets = $this->TicketHistory->Tickets->find('list', ['limit' => 200]);
        $users = $this->TicketHistory->Users->find('list', ['limit' => 200]);
        $this->set(compact('ticketHistory', 'tickets', 'users'));
        $this->set('_serialize', ['ticketHistory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket History id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketHistory = $this->TicketHistory->get($id);
        if ($this->TicketHistory->delete($ticketHistory)) {
            $this->Flash->success(__('The ticket history has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket history could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
