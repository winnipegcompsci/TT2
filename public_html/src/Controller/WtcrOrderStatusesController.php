<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WtcrOrderStatuses Controller
 *
 * @property \App\Model\Table\WtcrOrderStatusesTable $WtcrOrderStatuses
 */
class WtcrOrderStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wtcrOrderStatuses', $this->paginate($this->WtcrOrderStatuses));
        $this->set('_serialize', ['wtcrOrderStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Wtcr Order Status id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wtcrOrderStatus = $this->WtcrOrderStatuses->get($id, [
            'contain' => ['WtcrOrders']
        ]);
        $this->set('wtcrOrderStatus', $wtcrOrderStatus);
        $this->set('_serialize', ['wtcrOrderStatus']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wtcrOrderStatus = $this->WtcrOrderStatuses->newEntity();
        if ($this->request->is('post')) {
            $wtcrOrderStatus = $this->WtcrOrderStatuses->patchEntity($wtcrOrderStatus, $this->request->data);
            if ($this->WtcrOrderStatuses->save($wtcrOrderStatus)) {
                $this->Flash->success(__('The wtcr order status has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wtcr order status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('wtcrOrderStatus'));
        $this->set('_serialize', ['wtcrOrderStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wtcr Order Status id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wtcrOrderStatus = $this->WtcrOrderStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wtcrOrderStatus = $this->WtcrOrderStatuses->patchEntity($wtcrOrderStatus, $this->request->data);
            if ($this->WtcrOrderStatuses->save($wtcrOrderStatus)) {
                $this->Flash->success(__('The wtcr order status has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wtcr order status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('wtcrOrderStatus'));
        $this->set('_serialize', ['wtcrOrderStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wtcr Order Status id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wtcrOrderStatus = $this->WtcrOrderStatuses->get($id);
        if ($this->WtcrOrderStatuses->delete($wtcrOrderStatus)) {
            $this->Flash->success(__('The wtcr order status has been deleted.'));
        } else {
            $this->Flash->error(__('The wtcr order status could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
