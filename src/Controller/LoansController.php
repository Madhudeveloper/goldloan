<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Loans Controller
 *
 * @property \App\Model\Table\LoansTable $Loans
 *
 * @method \App\Model\Entity\Loan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoansController extends AppController
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
            'contain' => ['Customers', 'Schemes','LoanItems' ],
        ];
        $loans = $this->paginate($this->Loans);

        $this->set(compact('loans'));
    }

    /**
     * View method
     *
     * @param string|null $id Loan id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        
        $loan = $this->Loans->get($id, [
            'contain' => ['Customers', 'Schemes', 'LoanItems'],
        ]);

       $this->set('loan', $loan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('adminLayout');
        $this->loadModel('LoanItems');


        $loan = $this->Loans->newEntity();
        if ($this->request->is('post')) {
            $loan = $this->Loans->patchEntity($loan, $this->request->getData());

            $loan->processed_date = date('Y-m-d');

            $loan->tobepaid = $this->request->getData()['Amount'];

            if ($savedLoan = $this->Loans->save($loan)) {
                $this->Flash->success(__('The loan has been saved.'));


                foreach ($this->request->getData()['image'] as $key => $value) {
                
                    $loanItem = $this->LoanItems->newEntity();


                    $loanItem ->loan_id = $savedLoan['id'];
                    //$loanItem ->Description = $this->request->getData()['Description'][$key];
                    $loanItem ->type_id = $this->request->getData()['type_id'][$key];
                    $loanItem ->Gross = $this->request->getData()['Gross'][$key];
                    $loanItem ->Net = $this->request->getData()['Net'][$key];
                    $loanItem ->quality_id = $this->request->getData()['quality_id'][$key];
                    $loanItem ->container_id = $this->request->getData()['container_id'][$key];
                    $loanItem ->location = $this->request->getData()['location'][$key];
                    


                     $uniqueId = uniqid();

                     if(move_uploaded_file($this->request->getData()['image'][$key]['tmp_name'], WWW_ROOT . 'uploads/loanImages' . DS . $uniqueId ."_".$this->request->getData()['image'][$key]['name']))
                    {

                    $ext = substr(strtolower(strrchr($this->request->getData()['image'][$key]['name'], '.')), 1); //get the extension
                
                    $arr_ext = array('jpg', 'jpeg', 'gif','png','pdf'); //set allowed extensions
                    if(!in_array($ext, $arr_ext))
                    {
                        $this->Flash->error(__('Please upload only images'));
                        return $this->redirect($this->referer());  
                    }
                   
                    $loanItem->image = "uploads/loanImages/".$uniqueId ."_".$this->request->getData()['image'][$key]['name'];
                    }


                    $this->LoanItems->save($loanItem);
                }
                return $this->redirect(['action' => 'index']);
                $this->Flash->success(__('The loanitems has been saved.'));
            }
            $this->Flash->error(__('The loan could not be saved. Please, try again.'));
        }
        $customers = $this->Loans->Customers->find('list', ['limit' => 200]);
        $schemes = $this->Loans->Schemes->find('list', ['limit' => 200]);
        $types = $this->LoanItems->Types->find('list', ['limit' => 200]);
        $qualities = $this->LoanItems->Qualities->find('list', ['limit' => 200]);
        $containers = $this->LoanItems->Containers->find('list', ['limit' => 200]);
        $this->set(compact('loan', 'customers', 'schemes', 'types','qualities','containers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Loan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('adminLayout');
        $this->loadModel('LoanItems');


        $items = $this->LoanItems->find('all',[
            'conditions' => ['loan_id' => $id]
        ])->toArray();

        $loan = $this->Loans->get($id, [
            'contain' => [],
        ]);

    

        if ($this->request->is(['patch', 'post', 'put'])) {


            $loan = $this->Loans->patchEntity($loan, $this->request->getData());

            if ($savedLoan = $this->Loans->save($loan)) {
                $this->Flash->success(__('The Loan has been saved.'));

                $this->LoanItems->deleteAll(['loan_id' => $id]);


                foreach ($this->request->getData()['image'] as $key => $value) {
                
                    $loanItem = $this->LoanItems->newEntity();


                    $loanItem ->loan_id = $savedLoan['id'];
                   // $loanItem ->Description = $this->request->getData()['Description'][$key];
                    $loanItem ->type_id = $this->request->getData()['type_id'][$key];
                    $loanItem ->Gross = $this->request->getData()['Gross'][$key];
                    $loanItem ->Net = $this->request->getData()['Net'][$key];
                    $loanItem ->quality_id = $this->request->getData()['quality_id'][$key];
                    $loanItem ->container_id = $this->request->getData()['container_id'][$key];
                    $loanItem ->location = $this->request->getData()['location'][$key];


                    if($this->request->getData()['previous_image'][$key] == '') 
                    {

                         $uniqueId = uniqid();

                         if(move_uploaded_file($this->request->getData()['image'][$key]['tmp_name'], WWW_ROOT . 'uploads/loanImages' . DS . $uniqueId ."_".$this->request->getData()['image'][$key]['name']))
                        {

                            $ext = substr(strtolower(strrchr($this->request->getData()['image'][$key]['name'], '.')), 1); //get the extension
                        
                            $arr_ext = array('jpg', 'jpeg', 'gif','png','pdf'); //set allowed extensions
                            if(!in_array($ext, $arr_ext))
                            {
                                $this->Flash->error(__('Please upload only images'));
                                return $this->redirect($this->referer());  
                            }
                           
                            $loanItem->image = "uploads/loanImages/".$uniqueId ."_".$this->request->getData()['image'][$key]['name'];
                        }

                    }else{

                        if(
                            isset($this->request->getData()['image'][$key]['tmp_name']) 
                            && 
                            !empty($this->request->getData()['image'][$key]['tmp_name'])
                         ){


                            $uniqueId = uniqid();

                             if(move_uploaded_file($this->request->getData()['image'][$key]['tmp_name'], WWW_ROOT . 'uploads/loanImages' . DS . $uniqueId ."_".$this->request->getData()['image'][$key]['name']))
                            {

                                $ext = substr(strtolower(strrchr($this->request->getData()['image'][$key]['name'], '.')), 1); //get the extension
                            
                                $arr_ext = array('jpg', 'jpeg', 'gif','png','pdf'); //set allowed extensions
                                if(!in_array($ext, $arr_ext))
                                {
                                    $this->Flash->error(__('Please upload only images'));
                                    return $this->redirect($this->referer());  
                                }
                               
                                $loanItem->image = "uploads/loanImages/".$uniqueId ."_".$this->request->getData()['image'][$key]['name'];
                            }




                        }else{

                                $loanItem->image = $this->request->getData()['previous_image'][$key];

                        }
                    }


                    $this->LoanItems->save($loanItem);
                }


                return $this->redirect(['action' => 'index']);
                $this->Flash->success(__('The Loan Item has been saved.'));
            }
            $this->Flash->error(__('The Loan could not be saved. Please, try again.'));
        }
        $customers = $this->Loans->Customers->find('list', ['limit' => 200]);
        $schemes = $this->Loans->Schemes->find('list', ['limit' => 200]);
        $types = $this->LoanItems->Types->find('list', ['limit' => 200]);
        $qualities = $this->LoanItems->Qualities->find('list', ['limit' => 200]);
        $containers = $this->LoanItems->Containers->find('list', ['limit' => 200]);

        $this->set(compact('loan', 'items', 'customers', 'schemes', 'types','qualities','containers'));
  
    }

    /**
     * Delete method
     *
     * @param string|null $id Loan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $loan = $this->Loans->get($id);
        if ($this->Loans->delete($loan)) {
            $this->Flash->success(__('The loan has been deleted.'));
        } else {
            $this->Flash->error(__('The loan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



    public function amount(){

        $amount = 0;

        $this->loadModel('QualityAmounts');

        $qualityamounts = $this->QualityAmounts->find('all',[
            'conditions' => [
                'quality_id' => $this->request->getData()['id'],
                'date' => date('Y-m-d')

                ]

        ])->first();

        if($qualityamounts){

            $amount = $qualityamounts['todvalue'];

            $amount = $amount*($qualityamounts['percentage']/100);

        }else{
            $this->Flash->error(__('Please update rates for today'));
        }

        echo json_encode(['result' => $amount ]);

        exit;

    }
}
