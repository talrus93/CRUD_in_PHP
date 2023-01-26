<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>search</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Find data </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>user_id</th>
				                    <th>firstname</th>
			                    	<th>surname</th>
			                    	<th>gender</th>
			                    	<th>position</th>
			                    	<th>nationality</th>
			                    	<th>mobile</th>
			                    	<th>email</th>
			                    	
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include "connect_test.php";

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM database_new WHERE CONCAT(firstname,surname,gender,position,nationality,mobile,email) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);
                                        
                                        
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['user_id']; ?></td>
                                                    <td><?= $items['firstname']; ?></td>
                                                    <td><?= $items['surname']; ?></td>
                                                    <td><?= $items['gender']; ?></td>
                                                    <td><?= $items['position']; ?></td>
                                                    <td><?= $items['nationality']; ?></td>
                                                    <td><?= $items['mobile']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    
                                                </tr>
                                              
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                                
                            </tbody>
                           </table>
                        
                        <a href="/select.php"><button class="btn btn-primary">Back</button></a><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>