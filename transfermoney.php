<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/tsf.png" />
    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
?>
<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2><br>
        <div class="col-md-12 text-center">
            <a class="btn btn-outline-danger" href="index.php" role="button">Go Home</a>
            <a class="btn btn-outline-danger" href="transactionhistory.php" role="button">Transaction History</a>
        </div>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered text-center">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Transfer</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="py-2"><?php echo $rows['id'] ?></td>
                            <td class="py-2"><?php echo $rows['name']?></td>
                            <td class="py-2"><?php echo $rows['email']?></td>
                            <td class="py-2"><?php echo $rows['balance']?></td>
                            <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-outline-success">Make Transaction</button></a></td> 
                        </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>