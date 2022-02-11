<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Qualities Controller
 *
 * @property \App\Model\Table\QualitiesTable $Qualities
 *
 * @method \App\Model\Entity\Quality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QualitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $qualities = $this->paginate($this->Qualities);

        $this->set(compact('qualities'));
    }

    /**
     * View method
     *
     * @param string|null $id Quality id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quality = $this->Qualities->get($id, [
            'contain' => ['LoanItems'],
        ]);

        $this->set('quality', $quality);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quality = $this->Qualities->newEntity();
        if ($this->request->is('post')) {
            $quality = $this->Qualities->patchEntity($quality, $this->request->getData());
            if ($this->Qualities->save($quality)) {
                $this->Flash->success(__('The quality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quality could not be saved. Please, try again.'));
        }
        $this->set(compact('quality'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quality id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quality = $this->Qualities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quality = $this->Qualities->patchEntity($quality, $this->request->getData());
            if ($this->Qualities->save($quality)) {
                $this->Flash->success(__('The quality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quality could not be saved. Please, try again.'));
        }
        $this->set(compact('quality'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quality id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quality = $this->Qualities->get($id);
        if ($this->Qualities->delete($quality)) {
            $this->Flash->success(__('The quality has been deleted.'));
        } else {
            $this->Flash->error(__('The quality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
