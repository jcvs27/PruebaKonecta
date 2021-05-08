<?php


class Model_crud extends CI_Model{

    function __construct()
    {   
        parent::__construct();
    }

    public function guardar($param){

        $campos = array(
            'nombre_producto' => $param['np'],
            'referencia' => $param['re'],
            'precio' => $param['prec'],
            'peso' => $param['pes'],
            'categoria' => $param['cat'],
            'stock' => $param['st'],
            'fecha_creacion' => $param['fec']
        );
        
        $this->db->insert('productos', $campos);
        $dato = $this->db->insert_id();
        if($dato > 0){
            return 1;
        }


    }

    public function getproductos(){
        $this->db->select('ID, nombre_producto, referencia, precio, peso, stock');
        $this->db->from('productos');
        $Rep = $this->db->get();
        return $Rep->result();
    }

    public function modificar($param){
        $id = $param['id'];
        $campos = array(
            'nombre_producto' => $param['np'],
            'referencia' => $param['re'],
            'precio' => $param['prec'],
            'peso' => $param['pes'],
            'categoria' => $param['cat'],
            'stock' => $param['st'],
            'fecha_creacion' => $param['fec']
        );
        
        $this->db->update('productos', $campos);
        $this->db->where('ID', $id);
        
        return 1;

    }

    public function eliminar($param){
        $campos = array(
            'ID' => $param['id']
            
        );
         $this->db->delete('productos', $campos);
        
        return 1;

    }
}