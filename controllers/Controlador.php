<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {


	public function index()
	{
	
		$this->load->view('home');
	}
	
	public function cadastrousuario(){
	
		$this->load->view('cadastrousuario');
	}
	public function veiculo(){
	
		$this->load->view('cadastroveiculo');
	}
	
	public function cliente(){
	
		$this->load->view('cadastrocliente');
	}
	
	
	public function motorista(){
	
		$this->load->view('cadastromotorista');
	}
	
	public function l_motorista(){
	
		$this->load->view('listaMotorista');
	}
	
	public function login(){
	
		$this->load->view('login');
	}
	
	public function escala(){
	
		$this->load->view('escala');
	}
		public function main(){
	
		$this->load->view('main');
	}
		public function loginTeste(){
	
		$this->load->view('main');
	}
	
	
	public function cadastro(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insert(new Usuario($_POST['nome'],$_POST['email'],$_POST['senha']));
	}
	
	public function listarUsuario(){
		require_once APPPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$usuario = $m->searchAll();
		$data['usuario'] = $usuario;
		$this->load->view('listaUsuario',$data);
	}
	
	public function cadastromotorista(){
		require_once APPPATH."models/motorista.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insertMotorista(new Motorista($_POST['nome'],$_POST['endereco'],$_POST['bairro'],$_POST['cidade'],$_POST['estado'],$_POST['cep'],$_POST['telefone'],$_POST['email'],$_POST['cpf']));
	}
	
	public function listarMotorista(){
		require_once APPPATH."models/motorista.php";//Pasta model e o model que representa a classe.
		$this->load->model('model');//Carrega model que extends o CI_Model
		$m = $this->model;//model
		$motorista = $m->searchAllMotorista();//Metodo que está no model model
	
		
			$data['motorista'] = $motorista;
			
			$this->load->view('listaMotorista',$data);
	}
	
		public function cadastrocliente(){
		require_once APPPATH."models/cliente.php";
		$this->load->model('model');
		$m = $this->model;
		
		
		$m->insertCliente(new Cliente($_POST['cliente'],$_POST['cnpj'],$_POST['inscricao'],$_POST['endereco'],$_POST['bairro'],$_POST['cidade'],$_POST['estado'],$_POST['cep'],$_POST['email'],$_POST['telefone']));
	
			
	}
	public function deletecliente(){
		require_once APPPATH."models/cliente.php"; // aponta onde esta a classe 
		$this->load->model('model');
		$m = $this->model;
		
		$codigo = $this->uri->segment(3); // 3 parametro da url
		
		$cliente = $m->getClienteByCODIGO( $codigo );
		
		
		$m->deleteCliente( $cliente );
	
	}
	
	public function cadastrar(){
		require_once APPPATH."models/escala.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insertEscala(new Escala($_POST['nome'],$_POST['motorista'],$_POST['data'],$_POST['hora'],$_POST['local']));
	}
		public function listarEscala(){
		require_once APPPATH."models/escala.php";//Pasta model e o model que representa a classe.
		$this->load->model('model');//Carrega model que extends o CI_Model
		$m = $this->model;//model
		$cliente = $m->searchAllEscala();//Metodo que está no model model
	
		}
	public function listarCliente(){
		require_once APPPATH."models/cliente.php";//Pasta model e o model que representa a classe.
		$this->load->model('model');//Carrega model que extends o CI_Model
		$m = $this->model;//model
		$cliente = $m->searchAllCliente();//Metodo que está no model model
	
		
			$data['cliente'] = $cliente;
			
			$this->load->view('listaCliente',$data);
	}
	
		public function cadastroveiculo(){
		require_once APPPATH."models/veiculo.php";
		$this->load->model('model');
		$v = $this->model;
		$v->insertVeiculo(new Veiculo($_POST['frota'],$_POST['fabricante'],$_POST['chassis'],$_POST['tipo'],$_POST['placa'],$_POST['ano'],$_POST['modelo'],$_POST['cor'],$_POST['renavam']));
	}
	
	public function listarVeiculo(){
		require_once APPPATH."models/veiculo.php";//Pasta model e o model que representa a classe.
		$this->load->model('model');//Carrega model que extends o CI_Model
		$v = $this->model;//model
		$veiculo = $v->searchAllVeiculo();//Metodo que está no model model
	
		
			$data['veiculo'] = $veiculo;
			
			$this->load->view('listaVeiculo',$data);
	}
	
	
	
	
	
	public function auth(){
    	$email = $_POST["email"];
        $senha = $_POST["senha"];
        $this->load->model("model");
        $usr = $this->model->getUser($email,$senha);
        if($usr !== false){
            if($usr === "user"){
                $this->session->set_userdata("_ID", "user");
                redirect("index.php/Controlador/main"); 
            }else{
             	
             	redirect("index.php/Controlador/login"); 
        	}
        }else{
            redirect("index.php/Controlador/login");
        }
    }
    
   public function logout(){
        $this->session->unset_userdata("_ID");
        $this->session->unset_userdata("_EMAIL");
        redirect("index.php/Controlador/index");
    }
}
