<?php
$title_current_page = "Blog List";

?>
<?php require_once "../includes/hedear.php" ?>

<div class="m-2">
<p style="text-align: right;"> 
<?php if(isset( $_SESSION['update_blog_status'])): ?>
<span class="badge bg-primary p-1 text-white">
<?=$_SESSION['update_blog_status']?>
</span>
<?php endif; unset( $_SESSION['Update_message']) ?>
<a href="./blog_section.php" class="badge bg-orange p-2 text-white"><i class="fa fa-plus" aria-hidden="true"></i>Add Blog's</a>
<a href="#" class="badge bg-primary p-2 text-white"><i class="fa fa-undo" aria-hidden="true"></i>Restore</a>
</p>
<table class="table table-dark table-striped">
 <thead>
    <tr>
        <td>Id</td>
        <td>Blog Title</td>
        <td>Blog Description</td>
        <td>Blog Image</td>
        <td>Entry Date</td>
        <td>Status</td>
        <td>Action</td>
    </tr>
 </thead>
 <tbody >

    <?php $i=1; foreach($blog_lists as $blog): ?>
        <tr>

            <td><?=$i++?></td>
            <td><?=$blog['blog_title']?></td>
            <td style="width:400px;height:100px !important;overflow-y:scroll;display:inline-block"><?=$blog['blog_paragraph']?></td>
            <td><img width="200" height="200" src="../uploads/blogs_image/<?=$blog['blog_image_name']?>" alt="<?=$blog['blog_image_name']?>"></td>
            <td><?=date("F j, Y",strtotime($blog['entry_date']))?></td>
            <td><?php if($blog['blogs_status']=='active'):?>

               <span class="badge bg-primary p-1">Active</span>
               <?php elseif($blog['blogs_status']=='diactive'):?>
               <span class="badge bg-danger p-1">Diactive</span>
               <?php endif ?>
             </td>
            <td style="width: 110px;">
                <a href="../php_function/blog_soft_delete.php?id=<?=$blog['id']?>" style="margin-right:5px;color:white;width: 30px;height:30px;text-align:center;line-height:30px;background:#e16123;display:inline-block"><i class="fas fa-trash"></i></a>
                <a href="./blog_section_edit.php?id=<?=$blog['id']?>" style="color:white;width: 30px;height:30px;text-align:center;line-height:30px;background:#e16123;display:inline-block"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
 </tbody>
</table>
</div>

<?php require_once "../includes/footer.php" ?>