<?php
class Categories extends Model{

	public function getCategories(){
		$sql = 'SELECT categoryID,name from categories';
		$categories2 = array();

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$categories[] = $row;
		}

		foreach($categories as $array){
			$categories2[$array['categoryID']]=$array['name'];
		}

		$categories = $categories2;
		return $categories;
	}

	public function getCategory($cID){
		$sql = 'SELECT categoryID, name FROM categories WHERE categoryID=?';
		$outcome = $this->db->getrow($sql,array($cID));

		return $outcome;

		}

		function update($data){
		        $sql='UPDATE categories SET name = ? WHERE categoryID = ?';
		        $this->db->execute($sql,$data);
		        $message = 'Category changed.';
		        return $message;
		    }

	public function addCategory($category){
		$sql = "INSERT INTO categories (name) VALUES (?)";
		$outcome = $this->db->execute($sql, $category);

		return $outcome;
		}


	public function deleteCategories($cID){
		$sql ="DELETE FROM categories WHERE categoryID = ?";
		$this->db->execute($sql, array());
		$message = "Category updated.";
		return $message;
	}
}
?>
