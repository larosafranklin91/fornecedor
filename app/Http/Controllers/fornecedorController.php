<?php

namespace App\Http\Controllers;

use App\Models\fornecedor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    public function index_create(){
        return View('index_create');
    }
    public function salvar(Request $request){       

        try{
            $validated = $request->validate([
                
                'name' => 'required',
                'cpf_ou_cnpj'=> 'required|cpf_ou_cnpj',
                'telefone' => 'required|telefone',
                'endereco' => 'required',
                
                
                // outras validações aqui
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
                              
        $cadastro=new fornecedor();
        $cadastro->name =$request->name;
        $cadastro->cpf_ou_cnpj =$request->cpf_ou_cnpj;
        $cadastro->telefone =$request->telefone;
        $cadastro->endereco =$request->endereco;

        $cadastro->save();
        return redirect('fornecedor/listar');
    }

    public function editarFORNECEDOR($id){           
            
    $cadastro = fornecedor::findOrFail($id);
    return view('editarFORNECEDOR',compact('cadastro'));
     
    }
    
    public function updateFORNECEDOR(Request $request, $id){  

        $cadastro = fornecedor::find($id);
        $cadastro->name= $request->input('name');
        $cadastro->cpf_ou_cnpj= $request->input('cpf_ou_cnpj');
        $cadastro->telefone= $request->input('telefone');
        $cadastro->endereco= $request->input('endereco');
        
        try{
            $validated = $request->validate([
                
                'telefone' => 'required|telefone',
                'cpf_ou_cnpj'=> 'required|cpf_ou_cnpj',
                
                // outras validações aqui
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
        
        $cadastro->save();

        return redirect('fornecedor/listar');
    }
    public function eliminarFORNECEDOR($id){
        
        $cadastro = fornecedor::findOrFail($id);
        $cadastro->delete();
    
        return redirect('fornecedor/listar');
    }
     public function listarFORNECEDOR(){
        $cadastro=fornecedor::orderBy('id','desc')->get();        
        return View('listarFORNECEDOR')->with('fornecedors', $cadastro);
    }
}

