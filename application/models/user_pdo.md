public function showAll()
{
    $sql = "SELECT * FROM posts";
    $sth = $this->db->conn_id->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

public function select1($id)
{
    $sql = "SELECT * FROM posts WHERE id = :id";
    $sth = $this->db->conn_id->prepare($sql);
    $sth->bindParam(':id',$id);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

public function insert1($title, $content)
{
    $sql = "INSERT INTO posts (title, content) VALUES (:title, :content)";
    $sth = $this->db->conn_id->prepare($sql);
    $sth->bindParam(':title',$title);
    $sth->bindParam(':content',$content);
    $sth->execute();
}

public function update1($id, $title, $content)
{
    $sql = "UPDATE posts SET title=:title, content=:content WHERE id=:id";
    $sth = $this->db->conn_id->prepare($sql);
    $sth->bindParam(':id',$id);
    $sth->bindParam(':title',$title);
    $sth->bindParam(':content',$content);
    $sth->execute();
}

public function delete1($id)
{
    $sql = "DELETE FROM posts WHERE id = :id";
    $sth = $this->db->conn_id->prepare($sql);
    $sth->bindParam(':id',$id);
    $sth->execute();
}