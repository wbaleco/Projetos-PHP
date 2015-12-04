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
    
     public function deleteCliente($codigo){
        $this->db->where('CODIGO',$codigo);
        $this->db->delete('CADASTROCLIENTE');
        echo ("Deletado com sucesso");
    }
    
   
   
    
    
    
    
    public function insertCliente(CLIENTE $cliente){
        $this->db->insert('CADASTROCLIENTE', $cliente);
        echo ("Cadastro realizado com sucesso");
     }
     
    public function searchAllCliente(){
        $this->db->select('*');
        $query = $this->db->get("CADASTROCLIENTE");
        return $query->result();
    }
        
    public function insertMotorista(MOTORISTA $motorista){
        $this->db->insert('CADASTROMOTORISTA', $motorista);
        echo ("Cadastro realizado com sucesso");
         }
         
        public function searchAllMotorista(){
        $query = $this->db->query("select * from CADASTROMOTORISTA");
        return $query->result();
    }
         
    public function insertVeiculo(VEICULO $veiculo){
        $this->db->insert('CADASTROVEICULO', $veiculo);
        echo ("Escala realizada com sucesso");
    }
    
    public function searchAllVeiculo(){
        $query = $this->db->query("select * from CADASTROVEICULO");
        return $query->result();
    }
    
     public function insertEscala(ESCALA $escala){
        $this->db->insert('ESCALA', $escala);
        echo ("Escala realizada com sucesso");
    }
    
   
      public function searchAllEscala(){
        $query = $this->db->query("select * from ESCALA");
        return $query->result();
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