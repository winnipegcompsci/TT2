<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ServiceTypes Controller
 *
 * @property \App\Model\Table\ServiceTypesTable $ServiceTypes
 */
class ServiceTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('serviceTypes', $this->paginate($this->ServiceTypes));
        $this->set('_serialize', ['serviceTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Service Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serviceType = $this->ServiceTypes->get($id, [
            'contain' => ['Tickets']
        ]);
        $this->set('serviceType', $serviceType);
        $this->set('_serialize', ['serviceType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serviceType = $this->ServiceTypes->newEntity();
        if ($this->request->is('post')) {
            $serviceType = $this->ServiceTypes->patchEntity($serviceType, $this->request->data);
            if ($this->ServiceTypes->save($serviceType)) {
                $this->Flash->success(__('The service type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The service type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('serviceType'));
        $this->set('_serialize', ['serviceType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Service Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serviceType = $this->ServiceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serviceType = $this->ServiceTypes->patchEntity($serviceType, $this->request->data);
            if ($this->ServiceTypes->save($serviceType)) {
                $this->Flash->success(__('The service type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The service type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('serviceType'));
        $this->set('_serialize', ['serviceType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Service Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serviceType = $this->ServiceTypes->get($id);
        if ($this->ServiceTypes->delete($serviceType)) {
            $this->Flash->success(__('The service type has been deleted.'));
        } else {
            $this->Flash->error(__('The service type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
