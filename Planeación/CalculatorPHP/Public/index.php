<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Calculator</title>
    </head>
    <body>
        <h1>Calculator in PHP</h1>
        <form action="calc.php" method="get">
            <input type="number" name="n1" >
        <div class="caja"></div>
        <select name="operation">
            <option value =""> Select an operation </option>
            <option value ="1">Sum</option>
            <option value ="2">Rest</option>
            <option value ="3">Mult</option>
            <option value ="4">Div</option>
            <option value ="5">Division Module</option>
            <option value ="6">Log</option>
            <option value ="7">√x</option>
            <option value ="8">y√x</option>
            <option value ="9">X^2</option>
            <option value ="10">X^Y</option>
        </select>
        <div class="caja"></div>
            <input type="number" name="n2"> 
        <div class="caja"></div>
            <button type="submit"> Operate </button>
        </form>
        <div class="caja"></div>
        <?php if (isset ($message) === true): ?>
        <?php echo $message  ?>
        <?php endif ?>
        
    </body>
</html>
