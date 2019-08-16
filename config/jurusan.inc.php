<?php
class Jurusan{
	
	private $conn;
	private $table_name = "jurusan";
	
	public $kdjurusan;
	public $nmjurusan;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function Create(){
		
		$query = "insert into " .$this->table_name. " values(?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->kdjurusan);
		$stmt->bindParam(2, $this->nmjurusan);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function ReadAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY kdjurusan ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	
	function ReadOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE kdjurusan=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->kdjurusan);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->kdjurusan = $row['kdjurusan'];
		$this->nmjurusan = $row['nmjurusan'];
		
	}
	
	
	function Update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nmjurusan_wanda = :nmjurusan_wanda
						WHERE
					kdjurusan_wanda = :kdjurusan_wanda";

		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':kdjurusan_wanda', $this->kdjurusan_wanda);
		$stmt->bindParam(':nmjurusan_wanda', $this->nmjurusan_wanda);
		
		
		// execute the query   
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	

	function Delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE kdjurusan_wanda = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->kdjurusan_wanda);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
}
?>
