<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BillingPlanLines Controller
 *
 * @property \App\Model\Table\BillingPlanLinesTable $BillingPlanLines
 */
class BillingPlanLinesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BillingPlans', 'TimeTypes']
        ];
        $this->set('billingPlanLines', $this->paginate($this->BillingPlanLines));
        $this->set('_serialize', ['billingPlanLines']);
    }

    /**
     * View method
     *
     * @param string|null $id Billing Plan Line id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billingPlanLine = $this->BillingPlanLines->get($id, [
            'contain' => ['BillingPlans', 'TimeTypes']
        ]);
        $this->set('billingPlanLine', $billingPlanLine);
        $this->set('_serialize', ['billingPlanLine']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billingPlanLine = $this->BillingPlanLines->newEntity();
        if ($this->request->is('post')) {
            $billingPlanLine = $this->BillingPlanLines->patchEntity($billingPlanLine, $this->request->data);
            if ($this->BillingPlanLines->save($billingPlanLine)) {
                $this->Flash->success(__('The billing plan line has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The billing plan line could not be saved. Please, try again.'));
            }
        }
        $billingPlans = $this->BillingPlanLines->BillingPlans->find('list', ['limit' => 200]);
        $timeTypes = $this->BillingPlanLines->TimeTypes->find('list', ['limit' => 200]);
        $this->set(compact('billingPlanLine', 'billingPlans', 'timeTypes'));
        $this->set('_serialize', ['billingPlanLine']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Billing Plan Line id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billingPlanLine = $this->BillingPlanLines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billingPlanLine = $this->BillingPlanLines->patchEntity($billingPlanLine, $this->request->data);
            if ($this->BillingPlanLines->save($billingPlanLine)) {
                $this->Flash->success(__('The billing plan line has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The billing plan line could not be saved. Please, try again.'));
            }
        }
        $billingPlans = $this->BillingPlanLines->BillingPlans->find('list', ['limit' => 200]);
        $timeTypes = $this->BillingPlanLines->TimeTypes->find('list', ['limit' => 200]);
        $this->set(compact('billingPlanLine', 'billingPlans', 'timeTypes'));
        $this->set('_serialize', ['billingPlanLine']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Billing Plan Line id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billingPlanLine = $this->BillingPlanLines->get($id);
        if ($this->BillingPlanLines->delete($billingPlanLine)) {
            $this->Flash->success(__('The billing plan line has been deleted.'));
        } else {
            $this->Flash->error(__('The billing plan line could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
