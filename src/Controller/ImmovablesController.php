<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Immovables Controller
 *
 * @property \App\Model\Table\ImmovablesTable $Immovables
 */
class ImmovablesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $immovables = $this->paginate($this->Immovables);

        $this->set(compact('immovables'));
        $this->set('_serialize', ['immovables']);
    }

    /**
     * View method
     *
     * @param string|null $id Immovable id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $immovable = $this->Immovables->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('immovable', $immovable);
        $this->set('_serialize', ['immovable']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $immovable = $this->Immovables->newEntity();
        if ($this->request->is('post')) {
            $immovable = $this->Immovables->patchEntity($immovable, $this->request->getData());
            if ($this->Immovables->save($immovable)) {
                $this->Flash->success(__('The immovable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The immovable could not be saved. Please, try again.'));
        }
        $this->set(compact('immovable'));
        $this->set('_serialize', ['immovable']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Immovable id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $immovable = $this->Immovables->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $immovable = $this->Immovables->patchEntity($immovable, $this->request->getData());
            if ($this->Immovables->save($immovable)) {
                $this->Flash->success(__('The immovable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The immovable could not be saved. Please, try again.'));
        }
        $this->set(compact('immovable'));
        $this->set('_serialize', ['immovable']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Immovable id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $immovable = $this->Immovables->get($id);
        if ($this->Immovables->delete($immovable)) {
            $this->Flash->success(__('The immovable has been deleted.'));
        } else {
            $this->Flash->error(__('The immovable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
