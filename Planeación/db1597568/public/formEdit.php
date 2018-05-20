<!DOCTYPE html>

<html>
    <head>
        <title>edit new user</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href=" css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/formEdit.css">
    </head>
    <body>
         <div class="picture">
         
            <div class="transbox"> 
                
                <h1>EDIT USER DATA</h1>
                
                <div class="edit_user">
                    <img src="img/edit-user.png" width="100" title="Edit-User">
            </div>
        
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $user['id']?>">
            <br>  <input type="text" name="name" placeholder="Enter your name " value="<?php echo $user['name']?>" required>
            <br>   <input type="text" name="cedule" placeholder="Enter your cedule " value="<?php echo $user['cedule']?>"required>
            <br>  <input type="text" name="phone" placeholder="Enter your phone number " value="<?php echo $user['phone']?>" required>
            <br>  <input type="text" name="password" placeholder="Enter your passwword" value="<?php echo $user['password']?>" required>
            <br><br>  <button type="submit" class="btn btn-info" > Edit </button>
            <br>     <button type="button"  class="btn btn-danger" onclick="pageBack()"> Cancel </button>    
        </form>
        <script>
            function pageBack(){
                window.location.href = 'index.php';
            }
        </script>
        
            </div>
         </div>
    </body>
</html>
