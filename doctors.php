<?php

include_once "layouts/header.php";

include_once "controller/doctor_controller.php";

$doctorContr=new DoctorController();
$result=$doctorContr->getDoctors();

?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                    
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                       
                        
        </div>
    </main>

    <div class="row">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Specialization_id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Fee</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>CreatedDate</th>
                    <th>UpdatedDate</th>
                    
                </tr>
            </thead>
            <?php
            for($row=0;$row<count($result);$row++)
            {
                echo"<tr>";
                echo"<td>". $row+1 ."</td>";
                echo"<td>". $result[$row]["specialization_id"]."</td>";
                echo"<td>". $result[$row]["name"]."</td>";
                echo"<td>". $result[$row]["address"]."</td>";
                echo"<td>". $result[$row]["fee"]."</td>";
                echo"<td>". $result[$row]["phone"]."</td>";
                echo"<td>". $result[$row]["email"]."</td>";
                echo"<td>". $result[$row]["password"]."</td>";
                echo"<td>". $result[$row]["createdDate"]."</td>";
                echo"<td>". $result[$row]["updatedDate"]."</td>";

                echo"</tr>";
            }
            ?>
        </table>
    </div>

<?php

include_once "layouts/footer.php";

?>
                
