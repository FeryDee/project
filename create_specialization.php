<?php

include_once "layouts/header.php";

include_once "controller/specialization_controller.php";

$specializationController= new SpecializationController();
$result=$specializationController->getSpecialization();

//var_dump($result);
?>
    <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="row">
                            <div class="col-md-2">
                            <a href="specialization.php" class="btn btn-primary">Back</a>
                            </div>
                        </div>   
                        <div>
                            <div class="col-md-10">
                                <form action="" method="post">
                                    <div>
                                        <label for="" class="form-label">Specialization Name</label>
                                        <input type="text" name="name" id="" class="form-control">
                                    </div>
                                    <div>
                                        <label for="" class="form-label">Specialization_Parent</label>
                                        <select name="parent" id="" class="form-select">
                                            <?php
                                                echo "<option value='0'>No parent</option>";
                                                for($row=0;$row<count($result);$row++)
                                                {
                                                    if($result[$row]['parent']==0)
                                                    echo "<option value='".$result[$row]['id']."'>".$result[$row]['specialization']."</option>";
                                                  

                                                }
                                                

                                            ?>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-warning">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="row">
                        <table class="table table_striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Specialiti</th>
                                    <th>Parent-specialiti</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <?php
                                for($row=0;$row<count($result);$row++)
                                {
                                    echo "<tr>";
                                    echo "<td>". $row+1 ."</td>";
                                    echo "<td>". $result[$row]["specialization"] ."</td>";

                                    if($result[$row]["parent"]==0)
                                    {
                                        echo "<td>-</td>";
                                    }
                                    else{
                                        for($index=0;$index<count($result);$index++)
                                        {
                                            if($result[$row]['parent']==$result[$index]['id'])
                                            {
                                                echo "<td>". $result[$index]['specialization'] ."</td>";
                                            }
                                        }
                                    }
                                    //echo "<td>". $result[$row]["parent"] ."</td>";
                                    //echo "<td>". $result[$row]["updatedDate"] ."</td>";
                                    echo "<td><a class='btn btn-primary m-2'>Edit</a><a class='btn btn-danger'>Delete</a>.</td>";
                                    echo"</tr>";
                                }
                            ?>

                        </table>
                    </div> -->
    </main>

<?php

include_once "layouts/footer.php";

?>
                
