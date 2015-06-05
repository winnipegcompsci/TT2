<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrCustomers Controller
 *
 * @property \App\Model\Table\WtcrCustomersTable $WtcrCustomers
 */
class WtcrCustomersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrCustomers', $this->paginate($this->WtcrCustomers));
        $this->set('_serialize', ['wtcrCustomers']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Customer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrCustomer = $this->WtcrCustomers->get($id, [
            'contain' => ['WtcrOrders']
        ]);
        $this->set('wtcrCustomer', $wtcrCustomer);
        $this->set('_serialize', ['wtcrCustomer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrCustomer = $this->WtcrCustomers->newEntity();
        if ($this->request->is('post')) {
            $wtcrCustomer = $this->WtcrCustomers->patchEntity($wtcrCustomer, $this->request->data);
            if ($this->WtcrCustomers->save($wtcrCustomer)) {
                $this->Flash->success(__('The wtcr customer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wtcr customer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('wtcrCustomer'));
        $this->set('_serialize', ['wtcrCustomer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Customer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrCustomer = $this->WtcrCustomers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrCustomer = $this->WtcrCustomers->patchEntity($wtcrCustomer, $this->request->data);
            if ($this->WtcrCustomers->save($wtcrCustomer)) {
                $this->Flash->success(__('The wtcr customer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wtcr customer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('wtcrCustomer'));
        $this->set('_serialize', ['wtcrCustomer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Customer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrCustomer = $this->WtcrCustomers->get($id);
        if ($this->WtcrCustomers->delete($wtcrCustomer)) {
            $this->Flash->success(__('The wtcr customer has been deleted.'));
        } else {
            $this->Flash->error(__('The wtcr customer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
