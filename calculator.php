<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>kaas calculator</title>
</head>
<body>
<h1>Caluclator</h1>
<?php
$result = "";
class calculator
{
    var $a;
    var $b;
    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
                return $this->a + $this->b;
                break;
            case '-':
                return $this->a - $this->b;
                break;
            case '*':
                return $this->a * $this->b;
                break;
            case '/':
                return $this->a / $this->b;
                break;
            default:
                return "Kies een nieuw getal uit!";
        }
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}
$cal = new calculator();
if(isset($_POST['submit']))
{
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
    <table align="center">
        <tr>
            <td><strong><?php echo $result; ?><strong></td>
        </tr>
        <tr>
            <td><input type="text" name="n1"></td>
            <td>eerste getal</td>
        </tr>

        <tr>
            <td><input type="text" name="n2"></td>
            <td>tweede getal</td>
        </tr>

        <tr>
            <td>Kies uit:</td>
            <td><select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value=""></option>
                    <option value="/">/</option>
                </select></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="="></td>
        </tr>

    </table>
</form>
</body>
</html>