<?php

class dbConnect
{
use connectionInfo;
public function connect_db () {
    $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;
    $pdo = new PDO ($dsn, $this->user, $this->password);

    $query = $pdo->query('SELECT * FROM `user` ORDER BY `id` DESC LIMIT 3');
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<h1>'. $row->login . '</h1>'. '<br>';
        echo $row->email . '<br>';
        echo '<br>';
    }
    $id = 1 ;
    $login = 'admin';
    $sql = 'SELECT `login`, `email` FROM `user` WHERE `id` = :id && `login` = :login ORDER BY `id` DESC LIMIT 3';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id, 'login' => $login]);
    $users = $query->fetchAll(PDO::FETCH_OBJ);
    var_dump($users);
    foreach($users as $user) {
        echo '<h1>' . 'User: ' . $user->login . '</h1>';
        echo '<h3>' . 'email: ' . $user->email . '</h3>';
    }

    $id = 2 ;
    $sql = 'SELECT * FROM `user` WHERE `id` = :id LIMIT 3';
    $query1 = $pdo->prepare($sql);
    $query1->execute(['id' => $id]);
    $users1 = $query1->fetch(PDO::FETCH_OBJ);
    var_dump($users1);

    echo '<h3> ' . 'email: ' . $users1->email . '</h3>';}
}

trait connectionInfo {
    private $user = 'root';
    private $password = '';
    private $db = 'admin_website_db';
    private $host = 'localhost';
}
class Insert {
    use connectionInfo;
    public function insert () {

        $name = 'Ivan';
        $surname = 'Gurab';
        $login = 'ivan999';
        $email = 'ivan999@gmail.com';

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;
        $pdo = new PDO ($dsn, $this->user, $this->password);

        $sql = 'INSERT INTO user(email, login, surname, name) VALUES (:login, :email, :name, :surname)';
        $query = $pdo->prepare($sql);
        $query->execute(['login'=>$login, 'email'=>$email, 'name'=>$name,'surname'=>$surname]);

    }

}
class Update {
    use connectionInfo;

    function update () {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;
        $pdo = new PDO ($dsn, $this->user, $this->password);
        $id = 5;
        $login = 'igo-go';
        $sql = 'UPDATE `user` SET `login` =:login WHERE `id` =:id';
        $query = $pdo->prepare($sql);
        $query->execute(['login'=>$login, 'id'=>$id]);

    }

}

class Delete {
    use connectionInfo;

    function delete () {
        $id = 5;
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;
        $pdo = new PDO ($dsn, $this->user, $this->password);
        $sql = 'DELETE FROM `user` WHERE `id` = :id';
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $id]);
    }
}

$give_me_results = new dbConnect();
$give_me_results->connect_db();

//$insert = new Insert();
//$insert->insert();

//$update_sql = new Update();
//$update_sql->update();

$del = new Delete();
$del->delete();