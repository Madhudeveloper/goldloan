<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\Mailer\MailerAwareTrait;

use Cake\Mailer\Email;
use Cake\Datasource\ConnectionManager;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function login() 
    {
        $this->viewBuilder()->setLayout('adminLoginLayout');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();


            if ($user) {

                $this->Auth->setUser($user);


                return $this->redirect($this->Auth->redirectUrl());


            } else {
                $this->Flash->error(__('Your username or password was incorrect.'));
            }
        }
    }

    public function dashboard() 
    {
        $this->viewBuilder()->setLayout('adminLayout');

    }

    public function changePassword()
    {
        $this->viewBuilder()->setLayout('adminLayout');

        $user =$this->Users->get($this->Auth->user('id'));
        
        if ($this->request->is(['patch', 'post', 'put'])) {
              // pr($this->request->getData()['old_password']); die;
            $user = $this->Users->patchEntity($user, [
                    'old_password'  => $this->request->getData()['old_password'],
                    'password'      => $this->request->getData()['password'],
                    'confirm_password'     => $this->request->getData()['confirm_password']
                ],
                ['validate' => 'password']
            );
            $error = '';
            if(!empty($user->getErrors())){
                foreach ($user->getErrors() as $key => $value) {
                    foreach ($value as $key => $values) {
                       // $error.= $values."<br>";
                        $this->Flash->error(__($values));
                    }
                }
            }else{
                if ($this->Users->save($user)) {
                    $this->Flash->success('Your password has been changed successfully');
                    $this->redirect(['action' => 'changePassword']);
                } else {
                    $this->Flash->error('Old Password Does Not Match');
                }
            }
        }
        $this->set('user',$user);
    }


    public function logout()
    {
         $this->Flash->success('You have successfully loged out');



         return $this->redirect($this->Auth->logout());
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles'],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $Roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'Roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $Roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'Roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
