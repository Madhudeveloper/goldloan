<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DrawerAmounts Controller
 *
 * @property \App\Model\Table\DrawerAmountsTable $DrawerAmounts
 *
 * @method \App\Model\Entity\DrawerAmount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DrawerAmountsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('adminLayout');
        $this->paginate = [
            'contain' => ['Drawers'],
        ];
        $drawerAmounts = $this->paginate($this->DrawerAmounts);

        $this->set(compact('drawerAmounts'));
    }

    /**
     * View method
     *
     * @param string|null $id Drawer Amount id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $drawerAmount = $this->DrawerAmounts->get($id, [
            'contain' => ['Drawers'],
        ]);

        $this->set('drawerAmount', $drawerAmount);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('adminLayout');
        $drawerAmount = $this->DrawerAmounts->newEntity();
        if ($this->request->is('post')) {
            $drawerAmount = $this->DrawerAmounts->patchEntity($drawerAmount, $this->request->getData());
            if ($this->DrawerAmounts->save($drawerAmount)) {
                $this->Flash->success(__('The drawer amount has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drawer amount could not be saved. Please, try again.'));
        }
        $drawers = $this->DrawerAmounts->Drawers->find('list', ['limit' => 200]);
        $this->set(compact('drawerAmount', 'drawers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Drawer Amount id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('adminLayout');
        $drawerAmount = $this->DrawerAmounts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $drawerAmount = $this->DrawerAmounts->patchEntity($drawerAmount, $this->request->getData());
            if ($this->DrawerAmounts->save($drawerAmount)) {
                $this->Flash->success(__('The drawer amount has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drawer amount could not be saved. Please, try again.'));
        }
        $drawers = $this->DrawerAmounts->Drawers->find('list', ['limit' => 200]);
        $this->set(compact('drawerAmount', 'drawers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Drawer Amount id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $drawerAmount = $this->DrawerAmounts->get($id);
        if ($this->DrawerAmounts->delete($drawerAmount)) {
            $this->Flash->success(__('The drawer amount has been deleted.'));
        } else {
            $this->Flash->error(__('The drawer amount could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
