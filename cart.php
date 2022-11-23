<?php 
session_start();
$data = $_SESSION['products'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Color</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sum = 0;
foreach($data as $x){
    $sum += $x["price"];
    ?>
    <tr>
      <th scope="row"><?php echo $x["id"]?></th>
      <td><?php echo $x["name"]?></td>
      <td>Black</td>
      <td><?php echo $x["price"]?></td>
      <td><button class="btn btn-danger" value="<?php echo $x["id"]?>">Delete</button></td>
    </tr>

<?php 
}
?>
   <tr>
      <th scope="row"></th>
      <td></td>
      <td>Total:</td>
      <td><?php echo $sum?></td>
      <td></td>
    </tr>

    </tbody>
</table>
</div>


<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
     <script>
        $('.btn-danger').click(function(){
            var data1 = this.value
            alert(data1);
            console.log(data1);
        });
        </script>
</body>
</html>