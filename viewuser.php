<html>
<head><title>Banking System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href ="first.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
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
        <h2 class="text-center pt-4">User Details</h2>
        <div>
            <table class="table table-striped table-condensed table-bordered">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">EMAIL</th>
                <th class="text-center">Balance</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'connectdatabase.php';
            $sql ='select * from customers';
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['id']; ?></td>
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php echo $rows['email']; ?></td>
            <td class="py-2"><?php echo $rows['currentbalance']; ?></td>
            </tr>                
        <?php
            }
        ?>
        </tbody>
            </table>
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