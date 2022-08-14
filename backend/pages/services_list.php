<?php
$title_current_page = "Services List";

?>
<?php require_once "../includes/hedear.php" ?>
<div class="m-2">



<p style="text-align: right;"> 
<?php if(isset( $_SESSION['Update_message'])): ?>
<span class="badge bg-primary p-1 text-white">
<?=$_SESSION['Update_message']?>
</span>
<?php endif; unset( $_SESSION['Update_message']) ?>
<a href="./service_section.php" class="badge bg-orange p-2 text-white"><i class="fa fa-plus" aria-hidden="true"></i>Add Service</a>
<a href="#" class="badge bg-primary p-2 text-white"><i class="fa fa-undo" aria-hidden="true"></i>Restore</a>
</p>
<table class="table table-dark table-striped">
 <thead>
    <tr>
        <td>Id</td>
        <td>Service Name</td>
        <td>Service Info</td>
        <td>Service Icon</td>
        <td>Service Status</td>
        <td>Action</td>
    </tr>
 </thead>
 <tbody>

    <?php $i=1; foreach($service_lists as $service): ?>
        <tr>

            <td><?=$i++?></td>
            <td><?=$service['service']?></td>
            <td><?=$service['short_paragraph']?></td>
            <td><i style="font-size: 24px;" class="<?=$service['service_icon']?>"></i></td>
            <td><?php if($service['service_status']=='active'):?>

               <span class="badge bg-primary p-1">Active</span>
               <?php elseif($service['service_status']=='diactive'):?>
               <span class="badge bg-danger p-1">Diactive</span>
               <?php endif ?>
             </td>
            <td style="width: 110px;">
                <a href="../php_function/service_soft_delete.php?id=<?=$service['id']?>" style="margin-right:5px;color:white;width: 30px;height:30px;text-align:center;line-height:30px;background:#e16123;display:inline-block"><i class="fas fa-trash"></i></a>
                <a href="./service_edit.php?id=<?=$service['id']?>" style="color:white;width: 30px;height:30px;text-align:center;line-height:30px;background:#e16123;display:inline-block"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
 </tbody>
</table>
</div>

<?php require_once "../includes/footer.php" ?>