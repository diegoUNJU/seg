<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Boxes Controller
 *
 * @property \App\Model\Table\BoxesTable $Boxes
 */
class BoxesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Payments']
        ];
        $boxes = $this->paginate($this->Boxes);

        $this->set(compact('boxes'));
        $this->set('_serialize', ['boxes']);
    }

    /**
     * View method
     *
     * @param string|null $id Box id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $box = $this->Boxes->get($id, [
            'contain' => ['Payments', 'Users']
        ]);

        $this->set('box', $box);
        $this->set('_serialize', ['box']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $box = $this->Boxes->newEntity();
        if ($this->request->is('post')) {
            $box = $this->Boxes->patchEntity($box, $this->request->getData());
            if ($this->Boxes->save($box)) {
                $this->Flash->success(__('The box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The box could not be saved. Please, try again.'));
        }
        $payments = $this->Boxes->Payments->find('list', ['limit' => 200]);
        $this->set(compact('box', 'payments'));
        $this->set('_serialize', ['box']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Box id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $box = $this->Boxes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $box = $this->Boxes->patchEntity($box, $this->request->getData());
            if ($this->Boxes->save($box)) {
                $this->Flash->success(__('The box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The box could not be saved. Please, try again.'));
        }
        $payments = $this->Boxes->Payments->find('list', ['limit' => 200]);
        $this->set(compact('box', 'payments'));
        $this->set('_serialize', ['box']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Box id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $box = $this->Boxes->get($id);
        if ($this->Boxes->delete($box)) {
            $this->Flash->success(__('The box has been deleted.'));
        } else {
            $this->Flash->error(__('The box could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
