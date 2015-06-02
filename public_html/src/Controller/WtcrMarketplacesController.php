<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrMarketplaces Controller
 *
 * @property \App\Model\Table\WtcrMarketplacesTable $WtcrMarketplaces
 */
class WtcrMarketplacesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrMarketplaces', $this->paginate($this->WtcrMarketplaces));
        $this->set('_serialize', ['wtcrMarketplaces']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Marketplace id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrMarketplace = $this->WtcrMarketplaces->get($id, [
            'contain' => ['WtcrMarketplaceTemplates']
        ]);
        $this->set('wtcrMarketplace', $wtcrMarketplace);
        $this->set('_serialize', ['wtcrMarketplace']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrMarketplace = $this->WtcrMarketplaces->newEntity();
        if ($this->request->is('post')) {
            $wtcrMarketplace = $this->WtcrMarketplaces->patchEntity($wtcrMarketplace, $this->request->data);
            if ($this->WtcrMarketplaces->save($wtcrMarketplace)) {
                $this->Flash->success(__('The wtcr marketplace has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wtcr marketplace could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('wtcrMarketplace'));
        $this->set('_serialize', ['wtcrMarketplace']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Marketplace id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrMarketplace = $this->WtcrMarketplaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrMarketplace = $this->WtcrMarketplaces->patchEntity($wtcrMarketplace, $this->request->data);
            if ($this->WtcrMarketplaces->save($wtcrMarketplace)) {
                $this->Flash->success(__('The wtcr marketplace has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wtcr marketplace could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('wtcrMarketplace'));
        $this->set('_serialize', ['wtcrMarketplace']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Marketplace id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrMarketplace = $this->WtcrMarketplaces->get($id);
        if ($this->WtcrMarketplaces->delete($wtcrMarketplace)) {
            $this->Flash->success(__('The wtcr marketplace has been deleted.'));
        } else {
            $this->Flash->error(__('The wtcr marketplace could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
