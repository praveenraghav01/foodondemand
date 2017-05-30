<?php
require "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $city=$_POST['city'];
    $sql1="SELECT * from vdata WHERE city='$city'";
$result = $conn->query($sql1);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) 
    {
               echo '           <div class="GridLex-col-3_sm-4_xs-6_xss-12">

                                    <div class="top-company-2">
                                        <a href="#">

                                            <div class="image">
                                                <img src="'.$row['image'].'" alt="image" />
                                            </div>

                                            <div class="content">
                                                <h5 class="heading text-primary font700">'.$row['name'].'</h5>
                                                <p class="texting font600">'.$row['details'].'</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">&pound;15</span> <span class="font13">min order</span> <a href="order-online.php?hotel='.$row['name'].'"> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></a></p>
                                            </div>

                                        </a>

                                    </div>


                    </div>';                              
}
}

header("Location: restaurant.php");
}

else{
$sql1="SELECT * from vdata";
$result = $conn->query($sql1);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) 
    {
               echo '           <div class="GridLex-col-3_sm-4_xs-6_xss-12">

                                    <div class="top-company-2">
                                        <a href="#">

                                            <div class="image">
                                                <img src="'.$row['image'].'" alt="image" />
                                            </div>

                                            <div class="content">
                                                <h5 class="heading text-primary font700">'.$row['name'].'</h5>
                                                <p class="texting font600">'.$row['details'].'</p>
                                                <p class="mata-p clearfix"><span class="text-primary font700">&pound;15</span> <span class="font13">min order</span> <a href="order-online.php?hotel='.$row['name'].'"> <span class="pull-right icon"><i class="fa fa-long-arrow-right"></i></span></a></p>
                                            </div>

                                        </a>

                                    </div>


                    </div>';                              
}
}
}
                                ?>