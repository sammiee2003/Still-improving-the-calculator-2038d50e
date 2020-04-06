<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $result = "";
    class calculator { 
       var $a;
       var $b; 
       function checkoparation($oparator) {
           switch($oparator) {
                case "+":
                    return $this->a + $this->b;
                    break;
                case "-":
                    return $this->a - $this->b;
                    break;
                case "*":
                    return $this->a * $this->b;
                    break;
                case "/":
                    return $this->a / $this->b;
                    break;
                default:
                    return "kies en nieuw getal uit";
           }
       }
       function getresult($a, $b, $c) {
           $this->a = $a;
           $this->b = $b;
           return $this->checkoparation($c);
       }
    }
    $cal = new calculator();
    if (isset($_POST["submit"])) {
        $result = $cal->getresult($_POST["nummer1"], $_POST["nummer2"], $_POST["oparator"]);
    }
    
    
    ?>
<form method="post">
    <table align="center">
        <tr>
            <td><strong><?php echo $result;?><strong></td>
        </tr>
        <tr>
            <td><input type="text" name="nummer1"></td>
            <td>eerste getal</td>
        </tr>
        <tr>
            <td><input type="text" name="nummer2"></td>
            <td>tweede getal</td>
        </tr>
        <tr> 
            <td>kies uit: </td>
            <td><select name= "oparator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="="></td>
        </tr>
    </table>
</form>
7</body>
</html>