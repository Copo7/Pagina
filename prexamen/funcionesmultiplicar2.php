<?php
$num=7;
if(isset($_GET['num']))
{
    $num=$_GET['num'];
}
else{
    echo "Error";
}
?>
<table border="1">
    <?php for($i=1; $i<=10; $i++): ?>
    <tr>
        <td><?php echo $i*$num ?></td>
    </tr>
    <?php endfor; ?>
</table>