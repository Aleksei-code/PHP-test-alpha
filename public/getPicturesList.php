<?php
// $_SERVER['DOCUMENT_ROOT']
$filepath = '/upload/';

require_once 'db/mysql_connect.php';
$id = $_SESSION['user_id'];
$query = $pdo->prepare("SELECT `filename` FROM path_images 
                  WHERE path_images.user_id = :id ORDER BY `filename` DESC");
$query->execute(['id' => $id]);


while ($row = $query->fetchAll(PDO::FETCH_OBJ)) {
    echo '<table class="table">
            <thead>          
             <tr>
                <th scope="col">#</th>
                <th scope="col">Link</th> 
            </tr>
            </thead>
            <tbody>';
    foreach ($row as $file => $item) {
        static $id = 1;
        ?>
        <tr>
            <td># <?php echo $id;?> </td>
            <td> <a href="<?php echo $filepath . $item->filename ?>"
                    download="name_like_you_want">
                    Download <?php echo $item->filename ?>
                </a></td>
        </tr>


           <?php
        $id++;
    }
    echo '</tbody></table>';

    echo '<br>';
}
