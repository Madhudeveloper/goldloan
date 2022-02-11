<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Schemes Controller
 *
 * @property \App\Model\Table\SchemesTable $Schemes
 *
 * @method \App\Model\Entity\Scheme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SchemesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() 
    {
        $this->viewBuilder()->setLayout('adminLayout');
        $schemes = $this->paginate($this->Schemes);

        $this->set(compact('schemes'));
    }

    /**
     * View method
     *
     * @param string|null $id Scheme id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scheme = $this->Schemes->get($id, [
            'contain' => ['Loans'],
        ]);

        $this->set('scheme', $scheme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('adminLayout');
        $scheme = $this->Schemes->newEntity();
        // pr($this)
        if ($this->request->is('post')) {
            $scheme = $this->Schemes->patchEntity($scheme, $this->request->getData());
            if ($this->Schemes->save($scheme)) {
                
                $this->Flash->success(__('The scheme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scheme could not be saved. Please, try again.'));
        }
        $this->set(compact('scheme'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Scheme id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('adminLayout');
        $scheme = $this->Schemes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scheme = $this->Schemes->patchEntity($scheme, $this->request->getData());
            if ($this->Schemes->save($scheme)) {
                $this->Flash->success(__('The scheme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scheme could not be saved. Please, try again.'));
        }
        $this->set(compact('scheme'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Scheme id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
            $this->request->allowMethod(['post', 'delete']);
        $scheme = $this->Schemes->get($id);
        if ($this->Schemes->delete($scheme)) {
            $this->Flash->success(__('The scheme has been deleted.'));
        } else {
            $this->Flash->error(__('The scheme could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
