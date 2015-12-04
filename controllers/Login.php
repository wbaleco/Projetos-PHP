<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller
 
class Login extends CI_Controller{ // criação da classe Login
 
    public function autenticar(){
 
        $this->load->model("usuarios_model");// chama o modelo usuarios_model
        $email = $this->input->post("email");// pega via post o email que venho do formulario
        $senha = $this->input->post("senha"); // pega via post a senha que venho do formulario
        $usuario = $this->usuarios_model->buscaPorEmailSenha($email,$senha); // acessa a função buscaPorEmailSenha do modelo
 
        if($usuario){
            $this->session->set_userdata("usuario_logado", $usuario);
            $dados = array("mensagem" => "Logado com sucesso!");
        }else{
            $dados = array("mensagem" => "Não foi possível fazer o Login!");
        }
 
        $this->load->view("login/autenticar", $dados);
    }
}