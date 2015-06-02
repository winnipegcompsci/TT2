<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmailTypes Controller
 *
 * @property \App\Model\Table\EmailTypesTable $EmailTypes
 */
class EmailTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('emailTypes', $this->paginate($this->EmailTypes));
        $this->set('_serialize', ['emailTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Email Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailType = $this->EmailTypes->get($id, [
            'contain' => ['Emails']
        ]);
        $this->set('emailType', $emailType);
        $this->set('_serialize', ['emailType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailType = $this->EmailTypes->newEntity();
        if ($this->request->is('post')) {
            $emailType = $this->EmailTypes->patchEntity($emailType, $this->request->data);
            if ($this->EmailTypes->save($emailType)) {
                $this->Flash->success(__('The email type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The email type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emailType'));
        $this->set('_serialize', ['emailType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Email Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailType = $this->EmailTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailType = $this->EmailTypes->patchEntity($emailType, $this->request->data);
            if ($this->EmailTypes->save($emailType)) {
                $this->Flash->success(__('The email type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The email type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emailType'));
        $this->set('_serialize', ['emailType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Email Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailType = $this->EmailTypes->get($id);
        if ($this->EmailTypes->delete($emailType)) {
            $this->Flash->success(__('The email type has been deleted.'));
        } else {
            $this->Flash->error(__('The email type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
