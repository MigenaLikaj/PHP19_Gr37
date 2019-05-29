<?php require 'db.php'; ?>
<?php 
class Post{
	
//CREATE POST
	public function insertPost($email,$content){
		global $pdo;
		$stmt = $pdo->prepare('INSERT INTO user_comment (email,content) VALUES (?,?)');
		$stmt->execute([
			$email,
			$content
		]);
		return $pdo->lastInsertId();
	}
//READ POST
	public function readAllPost($fetchType = PDO::FETCH_OBJ){
		global $pdo;
		$stmt = $pdo->prepare('SELECT * FROM user_comment ORDER BY id DESC');
		$stmt->execute();
		return $stmt->fetchAll($fetchType);
	}
public function readPostById($id, $fetchType = PDO::FETCH_OBJ){
		global $pdo;
		$stmt = $pdo->prepare('SELECT * FROM user_comment WHERE id=?');
		
		$stmt->execute([$id]);
		return $stmt->fetch($fetchType);
	}
	//UPDATE POST
	public function updatePost($id,$email,$content){
global $pdo;
$stmt = $pdo->prepare('UPDATE user_comment SET email=?, content=? WHERE id=?');
$stmt->execute([
$email,
$content,
$id
]);
	}
public function deletePost($id){
	global $pdo;
	$stmt = $pdo->prepare("DELETE FROM user_comment WHERE id=?");
	$stmt->execute([$id]);
}

}
?>
