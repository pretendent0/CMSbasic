<?php require VIEW_ROOT . '/templates/header.php';?>

<h2>Edit project</h2>
<form action="<?php echo BASE_URL;?>/admin/edit.php" method="POST">
    <label for="title">
        Title
        <input type="text" name="title" id="title"  value="<?php echo $page['title'];?>">
    </label>
    <label for="label">
        Label
        <input type="text" name="label" id="label" value="<?php echo $page['label'];?> ">
    </label>
    <label for="slug">
        Slug
        <input type="text" name="slug" id="slug" value="<?php echo $page['slug'];?>">
    </label>

    <label for="body">
        BODY
        <textarea name="body" id="body" cols="30" rows="10"><?php echo $page['body'];?></textarea>
    </label>
    <input type="hidden" name="id" value="<?php echo $page['id'];?>">
    <input type="submit" value="Edit">
</form>



<?php require VIEW_ROOT . '/templates/footer.php';?>
