<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Client';
?>

<div class="site-client">
    <h1><?= Html::encode($this->title) . " List" ?></h1>
    <a class="btn btn-primary" href="/basic/web/index.php?r=site%2Findex">Add Client</a>
    <table id="myTable" class="table table-striped" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($model as $data) {
                ?>
                <tr>
                    <td><?php echo $data[0]; ?></td>
                    <td><?php echo $data[3]; ?></td>
                    <td><?php echo $data[2]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').dataTable();
    });
</script>
</body>