<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inventory Controller
 *
 * @property \App\Model\Table\InventoryTable $Inventory
 */
class InventoryController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['WtcrCategories', 'WtcrManufacturers', 'WtcrVendors']
        ];
        $this->set('inventory', $this->paginate($this->Inventory));
        $this->set('_serialize', ['inventory']);
    }

    /**
     * View method
     *
     * @param string|null $id Inventory id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inventory = $this->Inventory->get($id, [
            'contain' => ['WtcrCategories', 'WtcrManufacturers', 'WtcrVendors']
        ]);
        $this->set('inventory', $inventory);
        $this->set('_serialize', ['inventory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inventory = $this->Inventory->newEntity();
        if ($this->request->is('post')) {
            $inventory = $this->Inventory->patchEntity($inventory, $this->request->data);
            if ($this->Inventory->save($inventory)) {
                $this->Flash->success(__('The inventory has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The inventory could not be saved. Please, try again.'));
            }
        }
        $wtcrCategories = $this->Inventory->WtcrCategories->find('list', ['limit' => 200]);
        $wtcrManufacturers = $this->Inventory->WtcrManufacturers->find('list', ['limit' => 200]);
        $wtcrVendors = $this->Inventory->WtcrVendors->find('list', ['limit' => 200]);
        $this->set(compact('inventory', 'wtcrCategories', 'wtcrManufacturers', 'wtcrVendors'));
        $this->set('_serialize', ['inventory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inventory id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inventory = $this->Inventory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inventory = $this->Inventory->patchEntity($inventory, $this->request->data);
            if ($this->Inventory->save($inventory)) {
                $this->Flash->success(__('The inventory has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The inventory could not be saved. Please, try again.'));
            }
        }
        $wtcrCategories = $this->Inventory->WtcrCategories->find('list', ['limit' => 200]);
        $wtcrManufacturers = $this->Inventory->WtcrManufacturers->find('list', ['limit' => 200]);
        $wtcrVendors = $this->Inventory->WtcrVendors->find('list', ['limit' => 200]);
        $this->set(compact('inventory', 'wtcrCategories', 'wtcrManufacturers', 'wtcrVendors'));
        $this->set('_serialize', ['inventory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inventory id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inventory = $this->Inventory->get($id);
        if ($this->Inventory->delete($inventory)) {
            $this->Flash->success(__('The inventory has been deleted.'));
        } else {
            $this->Flash->error(__('The inventory could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
