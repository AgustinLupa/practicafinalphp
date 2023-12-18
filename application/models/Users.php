<?php 

    class Users extends CI_Model{
        protected $table = 'users';
        
        public function login($name, $password){
            $this->db->select('name, pass');
            $this->db->from($this->table);
            $this->db->where('name',$name);
            $this->db->where('pass', $password);
            $this->db->limit(1);


            return $this->db->get()->row_array();
        }

        public function getAll(){
            $this->db->select("*");
            $this->db->from($this->table);

            return $this->db->get()->result_array();
        }

        public function eliminar($id){
            
            $this->db->where('id', $id);
            $this->db->limit(1);
           return $this->db->delete($this->table);

        }

        public function crear($name, $pass){
            $this->db->set('name', $name);
            $this->db->set('pass', $pass);
            $this->db->insert($this->table);            
        }
    }

?>