<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);


    if (($amount)<0){
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")'; 
        echo '</script>';
    }
    else if($amount > $sql1['balance']) {
        echo '<script type="text/javascript">';
            echo ' alert("Bad Luck! Insufficient Balance")';
            echo '</script>';
    }
    else if($amount == 0){
        echo "<script type='text/javascript'>";
            echo "alert('Oops! Zero value cannot be transferred')";
            echo "</script>";
    }
    else {
    $newbalance = $sql1['balance'] - $amount;
    $sql = "UPDATE customers set balance=$newbalance where id=$from";
    mysqli_query($conn,$sql);
    
    $newbalance = $sql2['balance'] + $amount;
    $sql = "UPDATE customers set balance=$newbalance where id=$to";
    mysqli_query($conn,$sql);
    
    $sender = $sql1['name'];
    $receiver = $sql2['name'];
    $sql = "INSERT INTO transfers(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "<script> alert('Transaction Successful');
            window.location = 'transactionhistory.php';
        </script>";
    }

        $newbalance= 0;
        $amount =0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/tsf.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style type="text/css">
        * {
            padding: auto;
            margin: auto;
        }


        .formBox {
            padding: 50px;
        }

        .formBox h1 {
            margin: 0;
            padding: 0;
            text-align: center;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        .inputBox {
            position: relative;
            box-sizing: border-box;
            margin-bottom: 50px;
        }

        .inputBox .inputText {
            position: absolute;
            line-height: 50px;
            transition: .5s;
            opacity: .5;
        }

        .inputBox .input {
            position: relative;
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid rgba(0, 0, 0, .5);
        }

        .focus .inputText {
            transform: translateY(-30px);
            font-size: 18px;
            opacity: 1;
            color: #00bcd4;
        }

        .button {
            width: 100%;
            height: 50px;
            border: none;
            outline: none;
            background: #03A9F4;
            color: #fff;
        }

        .wrap {
            position: absolute;
            right: 0;
            top: 40%;
            left: 0;
            margin: 0 auto;
        }

        .select-text {
            position: relative;
            font-family: inherit;
            background-color: transparent;
            width: 350px;
            padding: 10px 10px 10px 0;
            border-radius: 0;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.12);
        }

        .select-text:focus {
            outline: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0);
        }

        .select .select-text {
            appearance: none;
            -webkit-appearance: none
        }

        .select:after {
            position: absolute;
            top: 18px;
            right: 10px;
            width: 0;
            height: 0;
            padding: 0;
            content: '';
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 6px solid rgba(0, 0, 0, 0.12);
            pointer-events: none;
        }

        .select-label {
            color: rgba(0, 0, 0, 0.26);
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 0;
            top: 10px;
            transition: 0.2s ease all;
        }
    </style>
</head>

<body>
    <?php
        include 'config.php';
        $sid=$_GET['id'];
        $sql = "SELECT * FROM  customers where id=$sid";
        $result=mysqli_query($conn,$sql);
        if(!$result)
        {
            echo "Error : ".$sql."<br>".mysqli_error($conn);
        }
        $rows=mysqli_fetch_assoc($result);
    ?>
    <form method="post" name="tcredit" class="tabletext"><br>
        <div class="container-fluid">
            <div class="container">
                <h1 class="text-center">Customer Profile</h1>
                <div class="formBox">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="inputBox ">
                                <div>Name</div>
                                <input type="text" name="" class="input" value="<?php echo $rows['name'];?>" disabled>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="inputBox">
                                <div>Email</div>
                                <input type="text" name="" class="input" value="<?php echo $rows['email'];?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="inputBox">
                                <div>Total Balance</div>
                                <input type="text" name="" class="input" value="<?php echo $rows['balance'];?>"
                                    disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="inputBox ">
                                <div>Transfer To</div>
                                <div class="input wrap">
                                    <select class="select-text input" name="to" required>
                                        <option value="" disabled selected>Choose</option>
                                        <?php
                                                include 'config.php';
                                                $sid=$_GET['id'];
                                                $sql = "SELECT * FROM customers where id!=$sid";
                                                $result=mysqli_query($conn,$sql);
                                                if(!$result)
                                                {
                                                    echo "Error ".$sql."<br>".mysqli_error($conn);
                                                }
                                                while($rows = mysqli_fetch_assoc($result)) {
                                            ?>
                                        <option class="table" value="<?php echo $rows['id'];?>">
                                            <?php echo $rows['name'] ;?> (Balance:
                                            <?php echo $rows['balance'] ;?>)
                                        </option>
                                        <?php 
                                                } 
                                            ?>
                                    </select>
                                    <span class="select-highlight"></span>
                                    <span class="select-bar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="inputBox">
                                <div>Amount</div>
                                <input type="number" name="amount" class="input" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="submit" name="submit" class="button" id='myBtn' value="Transfer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $(".input").focus(function () {
            $(this).parent().addClass("focus");
        })
    </script>
</body>

</html>