<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuoteTypes Controller
 *
 * @property \App\Model\Table\QuoteTypesTable $QuoteTypes
 */
class QuoteTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('quoteTypes', $this->paginate($this->QuoteTypes));
        $this->set('_serialize', ['quoteTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Quote Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quoteType = $this->QuoteTypes->get($id, [
            'contain' => ['Quotes']
        ]);
        $this->set('quoteType', $quoteType);
        $this->set('_serialize', ['quoteType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quoteType = $this->QuoteTypes->newEntity();
        if ($this->request->is('post')) {
            $quoteType = $this->QuoteTypes->patchEntity($quoteType, $this->request->data);
            if ($this->QuoteTypes->save($quoteType)) {
                $this->Flash->success(__('The quote type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quote type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('quoteType'));
        $this->set('_serialize', ['quoteType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Quote Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quoteType = $this->QuoteTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quoteType = $this->QuoteTypes->patchEntity($quoteType, $this->request->data);
            if ($this->QuoteTypes->save($quoteType)) {
                $this->Flash->success(__('The quote type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quote type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('quoteType'));
        $this->set('_serialize', ['quoteType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quote Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quoteType = $this->QuoteTypes->get($id);
        if ($this->QuoteTypes->delete($quoteType)) {
            $this->Flash->success(__('The quote type has been deleted.'));
        } else {
            $this->Flash->error(__('The quote type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
