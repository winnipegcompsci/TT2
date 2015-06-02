<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketEventTypes Controller
 *
 * @property \App\Model\Table\TicketEventTypesTable $TicketEventTypes
 */
class TicketEventTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ticketEventTypes', $this->paginate($this->TicketEventTypes));
        $this->set('_serialize', ['ticketEventTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Event Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketEventType = $this->TicketEventTypes->get($id, [
            'contain' => ['TicketEvents']
        ]);
        $this->set('ticketEventType', $ticketEventType);
        $this->set('_serialize', ['ticketEventType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketEventType = $this->TicketEventTypes->newEntity();
        if ($this->request->is('post')) {
            $ticketEventType = $this->TicketEventTypes->patchEntity($ticketEventType, $this->request->data);
            if ($this->TicketEventTypes->save($ticketEventType)) {
                $this->Flash->success(__('The ticket event type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket event type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ticketEventType'));
        $this->set('_serialize', ['ticketEventType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Event Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketEventType = $this->TicketEventTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketEventType = $this->TicketEventTypes->patchEntity($ticketEventType, $this->request->data);
            if ($this->TicketEventTypes->save($ticketEventType)) {
                $this->Flash->success(__('The ticket event type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket event type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ticketEventType'));
        $this->set('_serialize', ['ticketEventType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Event Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketEventType = $this->TicketEventTypes->get($id);
        if ($this->TicketEventTypes->delete($ticketEventType)) {
            $this->Flash->success(__('The ticket event type has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket event type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
