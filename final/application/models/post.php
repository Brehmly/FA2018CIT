<?php
class Post extends Model{


    function getPost($pID){
    $sql = 'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name FROM posts p
		INNER JOIN categories c on c.categoryid = p.categoryid
		INNER JOIN users u on u.uid = p.uid
		WHERE p.pID = ?
		';
        $results = $this->db->getrow($sql, array($pID));

        $post = $results;

        return $post;

    }

    public function getUserPosts($uID){

        $sql = 'select * from posts where uID = ?';

        $results = $this->db->execute($sql, $uID);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getCatPosts($cID){

        $sql = 'select * from posts where categoryID = ?';

        $results = $this->db->execute($sql, $cID);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getAllPosts($limit = 0){

		if($limit > 0){

			$numposts = ' LIMIT '.$limit;
		}else{$numposts = ' '; }

		$sql =  'SELECT pID, title, content, date, posts.uID, posts.categoryID, categories.name, first_name, last_name FROM posts INNER JOIN users ON posts.uID = users.uID INNER JOIN categories ON posts.categoryID = categories.categoryID'.$numposts;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}
		return $posts;
	}

    public function addPost($data){

        $sql='INSERT INTO posts (title,content,categoryID,date,uID) VALUES (?,?,?,?,1)';
        $this->db->execute($sql,$data);
        $message = 'Post added.';
        return $message;

    }

    public function updatePost($data) {

        $sql = 'UPDATE posts SET title = ?, content = ?, categoryID = ?, date = ? where pID = ?';
        $this->db->execute($sql, $data);
        $message = "Post updated.";
        return $message;
    }
    public function deletePost($pID) {

        $sql='DELETE from posts WHERE pID=?';
        $this->db->execute($sql, $pID);
        $message = 'Post Removed';
        return $message;
}
}
?>
