<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BillingPlans Controller
 *
 * @property \App\Model\Table\BillingPlansTable $BillingPlans
 */
class BillingPlansController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('billingPlans', $this->paginate($this->BillingPlans));
        $this->set('_serialize', ['billingPlans']);
    }

    /**
     * View method
     *
     * @param string|null $id Billing Plan id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billingPlan = $this->BillingPlans->get($id, [
            'contain' => ['BillingPlanLines', 'Customers']
        ]);
        $this->set('billingPlan', $billingPlan);
        $this->set('_serialize', ['billingPlan']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billingPlan = $this->BillingPlans->newEntity();
        if ($this->request->is('post')) {
            $billingPlan = $this->BillingPlans->patchEntity($billingPlan, $this->request->data);
            if ($this->BillingPlans->save($billingPlan)) {
                $this->Flash->success(__('The billing plan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The billing plan could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('billingPlan'));
        $this->set('_serialize', ['billingPlan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Billing Plan id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billingPlan = $this->BillingPlans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billingPlan = $this->BillingPlans->patchEntity($billingPlan, $this->request->data);
            if ($this->BillingPlans->save($billingPlan)) {
                $this->Flash->success(__('The billing plan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The billing plan could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('billingPlan'));
        $this->set('_serialize', ['billingPlan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Billing Plan id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billingPlan = $this->BillingPlans->get($id);
        if ($this->BillingPlans->delete($billingPlan)) {
            $this->Flash->success(__('The billing plan has been deleted.'));
        } else {
            $this->Flash->error(__('The billing plan could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
