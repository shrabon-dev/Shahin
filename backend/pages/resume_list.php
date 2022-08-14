
<?php
$title_current_page = "Resume List";

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
        <td>Degree</td>
        <td>University</td>
        <td>Year</td>
        <td>Category</td>
        <td>Status</td>
        <td>Action</td>
    </tr>
 </thead>
 <tbody>

    <?php $i=1; foreach($skill_lists as $skill): ?>
        <tr>

            <td><?=$i++?></td>
            <td><?=$skill['degree']?></td>
            <td><?=$skill['university']?></td>
            <td><?=$skill['year']?></td>
            <td><?=$skill['category']?></td>
            <td><?php if($skill['skill_status']=='active'):?>

               <span class="badge bg-primary p-1">Active</span>
               <?php elseif($skill['skill_status']=='diactive'):?>
               <span class="badge bg-danger p-1">Diactive</span>
               <?php endif ?>
             </td>
            <td style="width: 110px;">
                <a href="../php_function/skill_soft_delete.php?id=<?=$skill['id']?>" style="margin-right:5px;color:white;width: 30px;height:30px;text-align:center;line-height:30px;background:#e16123;display:inline-block"><i class="fas fa-trash"></i></a>
                <a href="./skill_section_edit.php?id=<?=$skill['id']?>" style="color:white;width: 30px;height:30px;text-align:center;line-height:30px;background:#e16123;display:inline-block"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
 </tbody>
</table>
</div>

<?php require_once "../includes/footer.php" ?>