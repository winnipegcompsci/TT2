<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BillingStatuses Controller
 *
 * @property \App\Model\Table\BillingStatusesTable $BillingStatuses
 */
class BillingStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('billingStatuses', $this->paginate($this->BillingStatuses));
        $this->set('_serialize', ['billingStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Billing Status id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billingStatus = $this->BillingStatuses->get($id, [
            'contain' => ['Tickets']
        ]);
        $this->set('billingStatus', $billingStatus);
        $this->set('_serialize', ['billingStatus']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billingStatus = $this->BillingStatuses->newEntity();
        if ($this->request->is('post')) {
            $billingStatus = $this->BillingStatuses->patchEntity($billingStatus, $this->request->data);
            if ($this->BillingStatuses->save($billingStatus)) {
                $this->Flash->success(__('The billing status has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The billing status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('billingStatus'));
        $this->set('_serialize', ['billingStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Billing Status id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billingStatus = $this->BillingStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billingStatus = $this->BillingStatuses->patchEntity($billingStatus, $this->request->data);
            if ($this->BillingStatuses->save($billingStatus)) {
                $this->Flash->success(__('The billing status has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The billing status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('billingStatus'));
        $this->set('_serialize', ['billingStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Billing Status id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billingStatus = $this->BillingStatuses->get($id);
        if ($this->BillingStatuses->delete($billingStatus)) {
            $this->Flash->success(__('The billing status has been deleted.'));
        } else {
            $this->Flash->error(__('The billing status could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
