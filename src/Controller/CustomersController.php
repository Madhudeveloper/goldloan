<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Customers Controller
 *
 * @property \App\Model\Table\CustomersTable $Customers
 *
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {

        $this->viewBuilder()->setLayout('adminLayout');
        $customers = $this->paginate($this->Customers);

        $this->set(compact('customers'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => [],
        ]);

        $this->set('customer', $customer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {   
        $this->viewBuilder()->setLayout('adminLayout');
        $this->loadModel('CustomerDocuments');

        $customer = $this->Customers->newEntity();

        if ($this->request->is('post')) {


            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            $uniqueId1 = uniqid();

            if(move_uploaded_file($this->request->getData()['profile']['tmp_name'], WWW_ROOT . 'uploads/customerImages' . DS . $uniqueId1 ."_".$this->request->getData()['profile']['name']))
            {

                $ext = substr(strtolower(strrchr($this->request->getData()['profile']['name'], '.')), 1); //get the extension
            
                $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                if(!in_array($ext, $arr_ext))
                {
                    $this->Flash->error(__('Please upload only images'));
                    return $this->redirect($this->referer());  
                }
               
                $customer->profile = "uploads/customerImages/".$uniqueId1 ."_".$this->request->getData()['profile']['name'];
            }
            if ($savedCustomer = $this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));


                foreach ($this->request->getData()['image'] as $key => $value) {
                
                    $customerDocument = $this->CustomerDocuments->newEntity();


                    $customerDocument->customer_id = $savedCustomer['id'];
                    $customerDocument->name = $this->request->getData()['doc_name'][$key];
                    $customerDocument->no = $this->request->getData()['doc_no'][$key];


                     $uniqueId = uniqid();

                     if(move_uploaded_file($this->request->getData()['image'][$key]['tmp_name'], WWW_ROOT . 'uploads/customerImages' . DS . $uniqueId ."_".$this->request->getData()['image'][$key]['name']))
                    {

                    $ext = substr(strtolower(strrchr($this->request->getData()['image'][$key]['name'], '.')), 1); //get the extension
                
                    $arr_ext = array('jpg', 'jpeg', 'gif','png','pdf'); //set allowed extensions
                    if(!in_array($ext, $arr_ext))
                    {
                        $this->Flash->error(__('Please upload only images'));
                        return $this->redirect($this->referer());  
                    }
                   
                    $customerDocument->image = "uploads/customerImages/".$uniqueId ."_".$this->request->getData()['image'][$key]['name'];
                    }


                    $this->CustomerDocuments->save($customerDocument);
                }

                return $this->redirect(['action' => 'index']);
                $this->Flash->success(__('The CustomerDocument has been saved.'));
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $this->set(compact('customer'));

       
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {   
        $this->viewBuilder()->setLayout('adminLayout');
        $this->loadModel('CustomerDocuments');


        $documents = $this->CustomerDocuments->find('all',[
            'conditions' => ['customer_id' => $id]
        ])->toArray();

        $customer = $this->Customers->get($id, [
            'contain' => [],
        ]);

    

        if ($this->request->is(['patch', 'post', 'put'])) {


            $customer = $this->Customers->patchEntity($customer, $this->request->getData());

            if ($savedCustomer = $this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                $this->CustomerDocuments->deleteAll(['customer_id' => $id]);


                foreach ($this->request->getData()['image'] as $key => $value) {
                
                    $customerDocument = $this->CustomerDocuments->newEntity();


                    $customerDocument->customer_id = $id;
                    $customerDocument->name = $this->request->getData()['doc_name'][$key];
                    $customerDocument->no = $this->request->getData()['doc_no'][$key];


                    if($this->request->getData()['previous_image'][$key] == '') 
                    {

                         $uniqueId = uniqid();

                         if(move_uploaded_file($this->request->getData()['image'][$key]['tmp_name'], WWW_ROOT . 'uploads/customerImages' . DS . $uniqueId ."_".$this->request->getData()['image'][$key]['name']))
                        {

                            $ext = substr(strtolower(strrchr($this->request->getData()['image'][$key]['name'], '.')), 1); //get the extension
                        
                            $arr_ext = array('jpg', 'jpeg', 'gif','png','pdf'); //set allowed extensions
                            if(!in_array($ext, $arr_ext))
                            {
                                $this->Flash->error(__('Please upload only images'));
                                return $this->redirect($this->referer());  
                            }
                           
                            $customerDocument->image = "uploads/customerImages/".$uniqueId ."_".$this->request->getData()['image'][$key]['name'];
                        }

                    }else{

                        if(
                            isset($this->request->getData()['image'][$key]['tmp_name']) 
                            && 
                            !empty($this->request->getData()['image'][$key]['tmp_name'])
                         ){


                            $uniqueId = uniqid();

                             if(move_uploaded_file($this->request->getData()['image'][$key]['tmp_name'], WWW_ROOT . 'uploads/customerImages' . DS . $uniqueId ."_".$this->request->getData()['image'][$key]['name']))
                            {

                                $ext = substr(strtolower(strrchr($this->request->getData()['image'][$key]['name'], '.')), 1); //get the extension
                            
                                $arr_ext = array('jpg', 'jpeg', 'gif','png','pdf'); //set allowed extensions
                                if(!in_array($ext, $arr_ext))
                                {
                                    $this->Flash->error(__('Please upload only images'));
                                    return $this->redirect($this->referer());  
                                }
                               
                                $customerDocument->image = "uploads/customerImages/".$uniqueId ."_".$this->request->getData()['image'][$key]['name'];
                            }




                        }else{

                                $customerDocument->image = $this->request->getData()['previous_image'][$key];

                        }
                    }


                    $this->CustomerDocuments->save($customerDocument);
                }


                return $this->redirect(['action' => 'index']);
                $this->Flash->success(__('The CustomerDocument has been saved.'));
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $this->set(compact('customer', 'documents'));

        

       
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customers->get($id);
        if ($this->Customers->delete($customer)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
