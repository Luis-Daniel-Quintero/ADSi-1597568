<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>PHP table with database</title>
        <link rel="stylesheet" type="text/css" href=" css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="picture">
         
            <div class="transbox"> 
    <h1>USER DATA</h1>
    
            <div class="data-user">
                <img src="img/data-user.png" width="100" title="Data-User">
            </div>
    
    <a href="add.html" type="button" class="btn btn-success" > Add </a>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Cedule</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Options</th>
            </tr>    
        </thead>
        <tbody>
            <?php while ($user = $db->getData()):?>
        <tr>
            <td>  <?php echo $user['id'] ?>       </td>
            <td>  <?php echo $user['name'] ?>     </td>
            <td>  <?php echo $user['cedule'] ?>   </td>
            <td>  <?php echo $user['phone'] ?>    </td>
            <td>  <?php echo $user['password'] ?> </td>
            <td>
                <a href="edit.php?id=<?php echo $user['id']?>"  type="button" class="btn btn-info"> Edit </a>
                <a href="#" onclick="deleteUser(<?php echo $user['id']?>)"  type="button" class="btn btn-danger"> Delete </a>
                
            </td>
        </tr>
            <?php endwhile ?>
        </tbody>
    </table>
    
    <script>
        function deleteUser(id){
            var rsp = confirm('¿Do you want to delete the specified record?');
            if( rsp===true){
                window.location.href='delete.php?id=' + id ;
            }
        }
    </script>
            </div>
    </div>
</body>
</html>
    
