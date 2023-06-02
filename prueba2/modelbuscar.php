
<?php 

#Creando un clase

class buscar 
{
	private $db;
	public function __construct($db){
		$this->db=$db;
	}
	public function guardar($datos){
		try {
			$stmt= $this->db->prepare("INSERT INTO productos(id_cat,des_pro,can_pro,pre_pro) VALUES(:cat,:des,:can,:pre,)");
			$stmt->bindParam(':cat',$datos['cat']);
			$stmt->bindParam(':des',$datos['des']);
			$stmt->bindParam(':can',$datos['can']);
			$stmt->bindParam(':pre',$datos['pre']);
			$stmt->execute();
		} catch (PDOException $e) {
			echo 'Error al crear el producto: ' . $e->getMessage();
            exit();

		}

/*
		$conectar=parent::conexion();
		parent::set_names();
		$query="insert into productos(id_cat,des_pro,can_pro,pre_pro,img_pro) values(?,?,?,?,null)";
		$query=$conectar->prepare($query);
		$query->bindValue(1,$cat);
		$query->bindValue(2,$des);
		$query->bindValue(3,$can);
		$query->bindValue(4,$pre);
		$query->execute();
		return $resultado=$query->fetchAll();*/
	}
    public function busca($search){
	    $conectar=parent::conexion();
	    
	    $query="select * from productos where des_pro like'$search%'";
	    $query=$conectar->prepare($query);
	    $query->execute();
	    return $resultado=$query->fetchAll();

    }

}