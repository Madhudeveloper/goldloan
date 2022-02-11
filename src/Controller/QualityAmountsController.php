<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QualityAmounts Controller
 *
 * @property \App\Model\Table\QualityAmountsTable $QualityAmounts
 *
 * @method \App\Model\Entity\QualityAmount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QualityAmountsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Qualities'],
        ];
        $qualityAmounts = $this->paginate($this->QualityAmounts);

        $this->set(compact('qualityAmounts'));
    }

    /**
     * View method
     *
     * @param string|null $id Quality Amount id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $qualityAmount = $this->QualityAmounts->get($id, [
            'contain' => ['Qualities'],
        ]);

        $this->set('qualityAmount', $qualityAmount);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $qualityAmount = $this->QualityAmounts->newEntity();
        if ($this->request->is('post')) {
            $qualityAmount = $this->QualityAmounts->patchEntity($qualityAmount, $this->request->getData());
            if ($this->QualityAmounts->save($qualityAmount)) {
                $this->Flash->success(__('The quality amount has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quality amount could not be saved. Please, try again.'));
        }
        $qualities = $this->QualityAmounts->Qualities->find('list', ['limit' => 200]);
        $this->set(compact('qualityAmount', 'qualities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quality Amount id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $qualityAmount = $this->QualityAmounts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $qualityAmount = $this->QualityAmounts->patchEntity($qualityAmount, $this->request->getData());
            if ($this->QualityAmounts->save($qualityAmount)) {
                $this->Flash->success(__('The quality amount has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quality amount could not be saved. Please, try again.'));
        }
        $qualities = $this->QualityAmounts->Qualities->find('list', ['limit' => 200]);
        $this->set(compact('qualityAmount', 'qualities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quality Amount id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $qualityAmount = $this->QualityAmounts->get($id);
        if ($this->QualityAmounts->delete($qualityAmount)) {
            $this->Flash->success(__('The quality amount has been deleted.'));
        } else {
            $this->Flash->error(__('The quality amount could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
