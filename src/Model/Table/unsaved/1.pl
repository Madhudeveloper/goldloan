public function edit($id = null)
    {

        $this->viewBuilder()->setLayout('adminLayout');
        $this->loadModel('InvoiceProducts');

        $products = $this->InvoiceProducts->find('all',[
            'conditions' => ['invoice_id' => $id]
        ])->toArray();

        $invoice = $this->Invoices->get($id, [
            'contain' => [],
        ]);



        if ($this->request->is(['patch', 'post', 'put'])) {
            $invoice = $this->Invoices->patchEntity($invoice, $this->request->getData());
            if ($this->Invoices->save($invoice)) {
                $this->Flash->success(__('The invoice has been saved.'));

                $this->InvoiceProducts->deleteAll(['invoice_id' => $id]);

            foreach ($this->request->getData()['Description'] as $key => $value) {
                
                $invoicProduct = $this->InvoiceProducts->newEntity();


                $invoicProduct->invoice_id = $id;
                $invoicProduct->Description = $this->request->getData()['Description'][$key];
                $invoicProduct->HSN = $this->request->getData()['HSN'][$key];
                $invoicProduct->Quantity = $this->request->getData()['Quantity'][$key];
                $invoicProduct->Rate = $this->request->getData()['Rate'][$key];
                $invoicProduct->Rate = $this->request->getData()['per'][$key];
                $invoicProduct->Amount = $this->request->getData()['Amount'][$key];
                $invoicProduct->GST_value = $this->request->getData()['GST_value'][$key];
                $invoicProduct->SGST = $this->request->getData()['SGST'][$key];
                $invoicProduct->CGST = $this->request->getData()['CGST'][$key];
                $invoicProduct->IGST = $this->request->getData()['IGST'][$key];
                $invoicProduct->total = $this->request->getData()['total'][$key];

                // pr($invoicProduct); die;

                $this->InvoiceProducts->save($invoicProduct);
            }

            return $this->redirect(['action' => 'index']);

            $this->Flash->success(__('The invoice Product has edited saved.'));


                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice could not be saved. Please, try again.'));
        }
        $companies = $this->Invoices->Companies->find('list', ['limit' => 200]);
        $customers = $this->Invoices->Customers->find('list', ['limit' => 200]);
        $this->set(compact('invoice', 'companies', 'customers','products'));
    }










    public function edit()
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