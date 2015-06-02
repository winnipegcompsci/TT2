<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketEvents Controller
 *
 * @property \App\Model\Table\TicketEventsTable $TicketEvents
 */
class TicketEventsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tickets', 'TicketEventTypes', 'Users', 'BillingTypes', 'TimeTypes']
        ];
        $this->set('ticketEvents', $this->paginate($this->TicketEvents));
        $this->set('_serialize', ['ticketEvents']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Event id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketEvent = $this->TicketEvents->get($id, [
            'contain' => ['Tickets', 'TicketEventTypes', 'Users', 'BillingTypes', 'TimeTypes']
        ]);
        $this->set('ticketEvent', $ticketEvent);
        $this->set('_serialize', ['ticketEvent']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketEvent = $this->TicketEvents->newEntity();
        if ($this->request->is('post')) {
            $ticketEvent = $this->TicketEvents->patchEntity($ticketEvent, $this->request->data);
            if ($this->TicketEvents->save($ticketEvent)) {
                $this->Flash->success(__('The ticket event has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket event could not be saved. Please, try again.'));
            }
        }
        $tickets = $this->TicketEvents->Tickets->find('list', ['limit' => 200]);
        $ticketEventTypes = $this->TicketEvents->TicketEventTypes->find('list', ['limit' => 200]);
        $users = $this->TicketEvents->Users->find('list', ['limit' => 200]);
        $billingTypes = $this->TicketEvents->BillingTypes->find('list', ['limit' => 200]);
        $timeTypes = $this->TicketEvents->TimeTypes->find('list', ['limit' => 200]);
        $this->set(compact('ticketEvent', 'tickets', 'ticketEventTypes', 'users', 'billingTypes', 'timeTypes'));
        $this->set('_serialize', ['ticketEvent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Event id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketEvent = $this->TicketEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketEvent = $this->TicketEvents->patchEntity($ticketEvent, $this->request->data);
            if ($this->TicketEvents->save($ticketEvent)) {
                $this->Flash->success(__('The ticket event has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket event could not be saved. Please, try again.'));
            }
        }
        $tickets = $this->TicketEvents->Tickets->find('list', ['limit' => 200]);
        $ticketEventTypes = $this->TicketEvents->TicketEventTypes->find('list', ['limit' => 200]);
        $users = $this->TicketEvents->Users->find('list', ['limit' => 200]);
        $billingTypes = $this->TicketEvents->BillingTypes->find('list', ['limit' => 200]);
        $timeTypes = $this->TicketEvents->TimeTypes->find('list', ['limit' => 200]);
        $this->set(compact('ticketEvent', 'tickets', 'ticketEventTypes', 'users', 'billingTypes', 'timeTypes'));
        $this->set('_serialize', ['ticketEvent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Event id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketEvent = $this->TicketEvents->get($id);
        if ($this->TicketEvents->delete($ticketEvent)) {
            $this->Flash->success(__('The ticket event has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket event could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
