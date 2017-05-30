<?php
require"db.php";
$num_rec_per_page=5;
$sql = "SELECT * FROM menu"; 
$result = $conn->query($sql);
$results=$result->num_rows;
$total_records = $results;
$total_pages = ceil($total_records / $num_rec_per_page); 
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql1="SELECT * from menu LIMIT $start_from, $num_rec_per_page";
$result = $conn->query($sql1);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) 
    {
        
        echo '<div class="order-menu-item clearfix">
        <form action="cart.php" method="POST">
        <div class="pull-left">
        <h6><input type="hidden" name="itemname" value="'.$row['name'].'" /></input>'.$row['name'].'</h6>
        <p>'.$row['item'].'</p>
        </div>
        <input type="hidden" name="id" value="'.$row['id'].'" /></input>
        <div class="pull-right">
        <button type="submit" class="btn btn-primary animation"><span class="price-new">Rs <input type="hidden" name="rate" value="'.$row['rate'].'" /></input>'.$row['rate'].'</span><i class="fa fa-plus-circle"></i></button>
        </div></form>
        </div>';
    }

    echo '<a href="menu.php?page=1">&laquo;</a>'; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='menu.php?page=".$i."'>".$i."</a> "; 
} 
echo "<a href='menu.php?page=$total_pages'>&raquo;</a> "; // Goto last page
}

    ?>
