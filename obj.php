<html>
    <body>
        <?php
class mobile
{
    var $mobile;
    function display($number)
    {
        global $moble;
        $model=$number;
        print "model number is:".$model;
        }
}
$apple =new mobile;
$apple->display('apple 11');
print"<br>";
$oppo=new mobile;
$oppo->display("oppo a71")

?>
        </body>
</html>
