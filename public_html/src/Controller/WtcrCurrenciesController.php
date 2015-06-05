<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrCurrencies Controller
 *
 * @property \App\Model\Table\WtcrCurrenciesTable $WtcrCurrencies
 */
class WtcrCurrenciesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['WtcrCurrencyProviders']
        ];
        $this->set('wtcrCurrencies', $this->paginate($this->WtcrCurrencies));
        $this->set('_serialize', ['wtcrCurrencies']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Currency id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrCurrency = $this->WtcrCurrencies->get($id, [
            'contain' => ['WtcrCurrencyProviders', 'WtcrOrders']
        ]);
        $this->set('wtcrCurrency', $wtcrCurrency);
        $this->set('_serialize', ['wtcrCurrency']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrCurrency = $this->WtcrCurrencies->newEntity();
        if ($this->request->is('post')) {
            $wtcrCurrency = $this->WtcrCurrencies->patchEntity($wtcrCurrency, $this->request->data);
            if ($this->WtcrCurrencies->save($wtcrCurrency)) {
                $this->Flash->success(__('The wtcr currency has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wtcr currency could not be saved. Please, try again.'));
            }
        }
        $wtcrCurrencyProviders = $this->WtcrCurrencies->WtcrCurrencyProviders->find('list', ['limit' => 200]);
        $this->set(compact('wtcrCurrency', 'wtcrCurrencyProviders'));
        $this->set('_serialize', ['wtcrCurrency']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Currency id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrCurrency = $this->WtcrCurrencies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrCurrency = $this->WtcrCurrencies->patchEntity($wtcrCurrency, $this->request->data);
            if ($this->WtcrCurrencies->save($wtcrCurrency)) {
                $this->Flash->success(__('The wtcr currency has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wtcr currency could not be saved. Please, try again.'));
            }
        }
        $wtcrCurrencyProviders = $this->WtcrCurrencies->WtcrCurrencyProviders->find('list', ['limit' => 200]);
        $this->set(compact('wtcrCurrency', 'wtcrCurrencyProviders'));
        $this->set('_serialize', ['wtcrCurrency']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Currency id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrCurrency = $this->WtcrCurrencies->get($id);
        if ($this->WtcrCurrencies->delete($wtcrCurrency)) {
            $this->Flash->success(__('The wtcr currency has been deleted.'));
        } else {
            $this->Flash->error(__('The wtcr currency could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
