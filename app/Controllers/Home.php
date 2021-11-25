<?php

namespace App\Controllers;
use App\Models\ClientModel;

class Home extends BaseController
{
    protected $clientModel;

    public function __construct(){
        $this->clientModel = new ClientModel();

    }
    public function index()
    {
        $data["clients"] = $this->clientModel->findAll();
        return view('client/index', $data);
    }

    public function create()
    {
        return view('client/add');
    }

    public function show($client_id){
        $data['client'] = $this->clientModel->find($client_id);
        return view('client/show',$data);
    }

    public function edit($client_id){
        $data['client'] = $this->clientModel->find($client_id);
        return view('client/edit',$data);
    
    }

    public function store(){
        $data = $this->request->getPost();
        $this->clientModel->insert($data);
        session()->setFlashdata("success", "Nuevo cliente agregado");
        return redirect()->to(base_url('home'));
    }


    public function update($client_id){
        $data = $this->request->getPost();
        $this->clientModel->update($client_id,$data);
        session()->setFlashdata("success", "Datos de cliente actualizados");
        return redirect()->to(base_url('home'));
    }
    

    public function destroy($client_id){
        $user = $this->clientModel->find($client_id);
        if($user){
            $data = $this->clientModel->delete($client_id);
            session()->setFlashdata("success", "Cliente eliminado");
            return redirect()->to(base_url('home'));
        }
        session()->setFlashdata("error", "No existe ese cliente");
        return redirect()->to(base_url('home'));            
    }

    
}
