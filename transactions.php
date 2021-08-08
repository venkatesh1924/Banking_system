<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
<link rel="stylesheet" type="text/css" href ="first.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
<center>
<h1>WELCOME TO SPARKS FOUNDATION BANK </h1></center>
<div class="col-md act">
        <img src="logo.png" class="img-fluid" width="100px">
</div>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#contact">About</a></li>
</ul>
</br>

	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No</th>
                <th class="text-center">Sender Name</th>
                <th class="text-center">Receiver Name</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'connectdatabase.php';
            $sql ='select * from transactions';
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['S.No']; ?></td>
            <td class="py-2"><?php echo $rows['SenderName']; ?></td>
            <td class="py-2"><?php echo $rows['ReceiverName']; ?></td>
            <td class="py-2"><?php echo $rows['Amount']; ?> </td>
            <td class="py-2"><?php echo $rows['Date&Time']; ?> </td>
            </tr>
                
        <?php
            }
        ?>
        </tbody>
    </table>
    </div>
</div>
<div id ="contact">
<center><h1>CONTACT ME</h1>
<span id ="des-con">___ Get in touch ___</span>
</center>
</div>
<footer><center>
<p>DESIGNED BY <b>VENKATESH DARAMALLA</b></p>
<p>&copy; 2021 All Rights Reserved <b>Sparks Foundation</b></p>
</center></footer>
</body>
</html>