<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "generalsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$limit = 10;
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

$sql = "SELECT * FROM comments ORDER BY ID DESC LIMIT $offset, $limit";
$result = $conn->query($sql);

$sqlCount = "SELECT COUNT(*) AS comment_count FROM comments";
$resultCount = $conn->query($sqlCount);
$row = $resultCount->fetch_assoc();
$totalComments = $row['comment_count'];
$remainingComments = $totalComments - ($offset + $limit);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="commentspecific">
            <h3><?php echo $row['Name']; ?></h3>
            <h4>Opublikowano: <?php echo $row['Date']; ?></h4>
            <p><?php echo $row['Content']; ?></p>
        </div>
        <?php
    }
} else {
    echo '<p class="allcomments"><span style="font-weight: bold; color: lightblue;">To już wszystko. Kliknij przycisk ponownie lub odśwież stronę, aby wyświetlić nowe komentarze.</span></p>';
}


?>
