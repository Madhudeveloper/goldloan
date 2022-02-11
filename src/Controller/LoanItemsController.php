<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LoanItems Controller
 *
 * @property \App\Model\Table\LoanItemsTable $LoanItems
 *
 * @method \App\Model\Entity\LoanItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoanItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Loans', 'Types', 'Qualities', 'Containers'],
        ];
        $loanItems = $this->paginate($this->LoanItems);

        $this->set(compact('loanItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Loan Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $loanItem = $this->LoanItems->get($id, [
            'contain' => ['Loans', 'Types', 'Qualities', 'Containers'],
        ]);

        $this->set('loanItem', $loanItem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $loanItem = $this->LoanItems->newEntity();
        if ($this->request->is('post')) {
            $loanItem = $this->LoanItems->patchEntity($loanItem, $this->request->getData());
            if ($this->LoanItems->save($loanItem)) {
                $this->Flash->success(__('The loan item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loan item could not be saved. Please, try again.'));
        }
        $loans = $this->LoanItems->Loans->find('list', ['limit' => 200]);
        $types = $this->LoanItems->Types->find('list', ['limit' => 200]);
        $qualities = $this->LoanItems->Qualities->find('list', ['limit' => 200]);
        $containers = $this->LoanItems->Containers->find('list', ['limit' => 200]);
        $this->set(compact('loanItem', 'loans', 'types', 'qualities', 'containers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Loan Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $loanItem = $this->LoanItems->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $loanItem = $this->LoanItems->patchEntity($loanItem, $this->request->getData());
            if ($this->LoanItems->save($loanItem)) {
                $this->Flash->success(__('The loan item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The loan item could not be saved. Please, try again.'));
        }
        $loans = $this->LoanItems->Loans->find('list', ['limit' => 200]);
        $types = $this->LoanItems->Types->find('list', ['limit' => 200]);
        $qualities = $this->LoanItems->Qualities->find('list', ['limit' => 200]);
        $containers = $this->LoanItems->Containers->find('list', ['limit' => 200]);
        $this->set(compact('loanItem', 'loans', 'types', 'qualities', 'containers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Loan Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $loanItem = $this->LoanItems->get($id);
        if ($this->LoanItems->delete($loanItem)) {
            $this->Flash->success(__('The loan item has been deleted.'));
        } else {
            $this->Flash->error(__('The loan item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
