<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketTypes Controller
 *
 * @property \App\Model\Table\TicketTypesTable $TicketTypes
 */
class TicketTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ticketTypes', $this->paginate($this->TicketTypes));
        $this->set('_serialize', ['ticketTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketType = $this->TicketTypes->get($id, [
            'contain' => ['Tickets']
        ]);
        $this->set('ticketType', $ticketType);
        $this->set('_serialize', ['ticketType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketType = $this->TicketTypes->newEntity();
        if ($this->request->is('post')) {
            $ticketType = $this->TicketTypes->patchEntity($ticketType, $this->request->data);
            if ($this->TicketTypes->save($ticketType)) {
                $this->Flash->success(__('The ticket type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ticketType'));
        $this->set('_serialize', ['ticketType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketType = $this->TicketTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketType = $this->TicketTypes->patchEntity($ticketType, $this->request->data);
            if ($this->TicketTypes->save($ticketType)) {
                $this->Flash->success(__('The ticket type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ticket type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ticketType'));
        $this->set('_serialize', ['ticketType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketType = $this->TicketTypes->get($id);
        if ($this->TicketTypes->delete($ticketType)) {
            $this->Flash->success(__('The ticket type has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
