<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MailboxSends Controller
 *
 * @property \App\Model\Table\MailboxSendsTable $MailboxSends
 */
class MailboxSendsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $mailboxSends = $this->paginate($this->MailboxSends);

        $this->set(compact('mailboxSends'));
        $this->set('_serialize', ['mailboxSends']);
    }

    /**
     * View method
     *
     * @param string|null $id Mailbox Send id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mailboxSend = $this->MailboxSends->get($id, [
            'contain' => ['Users', 'Messages']
        ]);

        $this->set('mailboxSend', $mailboxSend);
        $this->set('_serialize', ['mailboxSend']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mailboxSend = $this->MailboxSends->newEntity();
        if ($this->request->is('post')) {
            $mailboxSend = $this->MailboxSends->patchEntity($mailboxSend, $this->request->getData());
            if ($this->MailboxSends->save($mailboxSend)) {
                $this->Flash->success(__('The mailbox send has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mailbox send could not be saved. Please, try again.'));
        }
        $users = $this->MailboxSends->Users->find('list', ['limit' => 200]);
        $this->set(compact('mailboxSend', 'users'));
        $this->set('_serialize', ['mailboxSend']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mailbox Send id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mailboxSend = $this->MailboxSends->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mailboxSend = $this->MailboxSends->patchEntity($mailboxSend, $this->request->getData());
            if ($this->MailboxSends->save($mailboxSend)) {
                $this->Flash->success(__('The mailbox send has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mailbox send could not be saved. Please, try again.'));
        }
        $users = $this->MailboxSends->Users->find('list', ['limit' => 200]);
        $this->set(compact('mailboxSend', 'users'));
        $this->set('_serialize', ['mailboxSend']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mailbox Send id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mailboxSend = $this->MailboxSends->get($id);
        if ($this->MailboxSends->delete($mailboxSend)) {
            $this->Flash->success(__('The mailbox send has been deleted.'));
        } else {
            $this->Flash->error(__('The mailbox send could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
