<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Polices Controller
 *
 * @property \App\Model\Table\PolicesTable $Polices
 */
class PolicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $polices = $this->paginate($this->Polices);

        $this->set(compact('polices'));
        $this->set('_serialize', ['polices']);
    }

    /**
     * View method
     *
     * @param string|null $id Police id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $police = $this->Polices->get($id, [
            'contain' => []
        ]);

        $this->set('police', $police);
        $this->set('_serialize', ['police']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $police = $this->Polices->newEntity();
        if ($this->request->is('post')) {
            $police = $this->Polices->patchEntity($police, $this->request->getData());
            if ($this->Polices->save($police)) {
                $this->Flash->success(__('The police has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The police could not be saved. Please, try again.'));
        }
        $this->set(compact('police'));
        $this->set('_serialize', ['police']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Police id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $police = $this->Polices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $police = $this->Polices->patchEntity($police, $this->request->getData());
            if ($this->Polices->save($police)) {
                $this->Flash->success(__('The police has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The police could not be saved. Please, try again.'));
        }
        $this->set(compact('police'));
        $this->set('_serialize', ['police']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Police id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $police = $this->Polices->get($id);
        if ($this->Polices->delete($police)) {
            $this->Flash->success(__('The police has been deleted.'));
        } else {
            $this->Flash->error(__('The police could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
