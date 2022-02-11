<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Drawers Controller
 *
 * @property \App\Model\Table\DrawersTable $Drawers
 *
 * @method \App\Model\Entity\Drawer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DrawersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $drawers = $this->paginate($this->Drawers);

        $this->set(compact('drawers'));
    }

    /**
     * View method
     *
     * @param string|null $id Drawer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $drawer = $this->Drawers->get($id, [
            'contain' => ['DrawerAmounts'],
        ]);

        $this->set('drawer', $drawer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $drawer = $this->Drawers->newEntity();
        if ($this->request->is('post')) {
            $drawer = $this->Drawers->patchEntity($drawer, $this->request->getData());
            if ($this->Drawers->save($drawer)) {
                $this->Flash->success(__('The drawer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drawer could not be saved. Please, try again.'));
        }
        $this->set(compact('drawer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Drawer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $drawer = $this->Drawers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $drawer = $this->Drawers->patchEntity($drawer, $this->request->getData());
            if ($this->Drawers->save($drawer)) {
                $this->Flash->success(__('The drawer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drawer could not be saved. Please, try again.'));
        }
        $this->set(compact('drawer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Drawer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $drawer = $this->Drawers->get($id);
        if ($this->Drawers->delete($drawer)) {
            $this->Flash->success(__('The drawer has been deleted.'));
        } else {
            $this->Flash->error(__('The drawer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
