<?php
// $_SERVER['DOCUMENT_ROOT']
$filepath = '/upload/';

require_once 'db/mysql_connect.php';
$query = $pdo->prepare("SELECT `filename` FROM  path_images ORDER BY `filename` DESC");
$query->execute();

while ($row = $query->fetchAll(PDO::FETCH_OBJ)) {
    echo '<div class="row row-cols-1 row-cols-md-3 g-4 mt-3">';
    foreach ($row as $file => $item) {
        ?>

        <div class="col">
            <div class="card">
                <img src="<?php echo $filepath . $item->filename ?>" class="card-img-top pe-auto" alt="...">
                <div class="card-body">

                    <a class="btn btn-primary" role="button" href="<?php echo $filepath . $item->filename ?>"
                       download="name_like_you_want">
                        Download
                    </a>
                </div>
            </div>
        </div>
           <?php
    }
    echo '</div>';

    echo '<br>';
}