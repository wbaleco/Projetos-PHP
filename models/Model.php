<?php
class Model extends CI_Model{
    
    public function insert(Usuario $usu){
        $this->db->insert('Usuario', $usu);
        echo ("Cadastro realizado com sucesso");
    }
    
     public function searchAll(){
        $query = $this->db->query("select * from Usuario");
        return $query->result();
    }
    
    public function deleteUsuario($codigo){
        $this->db->where('id_usuario',$codigo);
        $this->db->delete('Usuario');
       redirect("index.php/Controlador/listarUsuario");
    }
    /*---------------------------------------------------*/
     public function deleteCliente($codigo){
        $this->db->where('CODIGO',$codigo);
        $this->db->delete('CADASTROCLIENTE');
       redirect("index.php/Controlador/listarCliente");
    }
    
    public function insertCliente(CLIENTE $cliente){
        $this->db->insert('CADASTROCLIENTE', $cliente);
        redirect("index.php/Controlador/cliente");
     }
     
    public function searchAllCliente(){
        $this->db->select('*');
        $query = $this->db->get("CADASTROCLIENTE");
        return $query->result();
    }
        
    public function insertMotorista(MOTORISTA $motorista){
        $this->db->insert('CADASTROMOTORISTA', $motorista);
         redirect("index.php/Controlador/motorista");
         }
         
        public function searchAllMotorista(){
        $query = $this->db->query("select * from CADASTROMOTORISTA");
        return $query->result();
    }
    
    public function deleteMotorista($codigo){
        $this->db->where('CODIGO',$codigo);
        $this->db->delete('CADASTROMOTORISTA');
        redirect("index.php/Controlador/listarMotorista");
    }
    public function insertVeiculo(VEICULO $veiculo){
        $this->db->insert('CADASTROVEICULO', $veiculo);
         redirect("index.php/Controlador/veiculo");
    }
    
    public function searchAllVeiculo(){
        $query = $this->db->query("select * from CADASTROVEICULO");
        return $query->result();
    }
    
    public function deleteVeiculo($codigo){
        $this->db->where('CODIGO',$codigo);
        $this->db->delete('CADASTROVEICULO');
         redirect("index.php/Controlador/listarVeiculo");
    }
    
     public function insertEscala(ESCALA $escala){
        $this->db->insert('ESCALA', $escala);
         redirect("index.php/Controlador/escala");
        
    }
  
       public function searchAllEscala(){
         $query = $this->db->query("select * from ESCALA");
         return $query->result();
     }
     public function deleteEscala($codigo){
        $this->db->where('CODIGO',$codigo);
        $this->db->delete('ESCALA');
         redirect("index.php/Controlador/listarEscala");
    }
    
   
     public function getUser($email,$senha) {
        $this->db->where("ds_email",$email);
        $this->db->where("ds_senha",$senha);
        $a=$this->db->get('Usuario');
        if ($a->num_rows()>0){
            if($a->row()->ds_email === $email){
                return "user";
            }else{
                return false;
            }
            
        }else{
            return false;
        }
    }
    
}