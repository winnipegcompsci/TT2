<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerSites Controller
 *
 * @property \App\Model\Table\CustomerSitesTable $CustomerSites
 */
class CustomerSitesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers']
        ];
        $this->set('customerSites', $this->paginate($this->CustomerSites));
        $this->set('_serialize', ['customerSites']);
    }

    /**
     * View method
     *
     * @param string|null $id Customer Site id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerSite = $this->CustomerSites->get($id, [
            'contain' => ['Customers', 'Tickets']
        ]);
        $this->set('customerSite', $customerSite);
        $this->set('_serialize', ['customerSite']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerSite = $this->CustomerSites->newEntity();
        if ($this->request->is('post')) {
            $customerSite = $this->CustomerSites->patchEntity($customerSite, $this->request->data);
            if ($this->CustomerSites->save($customerSite)) {
                $this->Flash->success(__('The customer site has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The customer site could not be saved. Please, try again.'));
            }
        }
        $customers = $this->CustomerSites->Customers->find('list', ['limit' => 200]);
        $this->set(compact('customerSite', 'customers'));
        $this->set('_serialize', ['customerSite']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Site id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerSite = $this->CustomerSites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerSite = $this->CustomerSites->patchEntity($customerSite, $this->request->data);
            if ($this->CustomerSites->save($customerSite)) {
                $this->Flash->success(__('The customer site has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The customer site could not be saved. Please, try again.'));
            }
        }
        $customers = $this->CustomerSites->Customers->find('list', ['limit' => 200]);
        $this->set(compact('customerSite', 'customers'));
        $this->set('_serialize', ['customerSite']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Site id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerSite = $this->CustomerSites->get($id);
        if ($this->CustomerSites->delete($customerSite)) {
            $this->Flash->success(__('The customer site has been deleted.'));
        } else {
            $this->Flash->error(__('The customer site could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
