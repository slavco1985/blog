
<?php
include 'db.php';



$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$limit = 5;
$offset = ($page * $limit) - $limit;

include 'header.php';
include 'carousel.php';
include 'right.php';

include 'posts.php';

$sql_page = "SELECT * FROM posts";
$result_page = mysqli_query($con, $sql_page);
$count = mysqli_num_rows($result_page);

$a = $count / 5;
$a = ceil($a);
$prev = $page - 1;
$next = $page + 1;
?>
<div class="container ">
    <div class="row">

        <ul class="pagination ">

            <?php
            if ($page > 1) {

                echo "<li class=\"previous\"><a href=\"index.php?page=$prev \">Previous</a></li>";
            }

            for ($b = 1; $b <= $a; $b++) {
                ?>
                <li><a href="index.php?page=<?php echo $b; ?>"><?php echo $b; ?></a></li>

    <?php
}
?>
            <li class="next"><a href="index.php?page=<?php echo $next; ?>">Next</a></li>
        </ul>

    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 well">
                <h5 accesskey=""class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<h5>

                        </div>


                        </div>
                        </div>
                        </footer> 

                        </body>
                        </html>