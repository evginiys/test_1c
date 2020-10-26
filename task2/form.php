<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>task2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<form method="post" enctype="multipart/form-data" action="index.php" class="col-md-6 col-10">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" <?if($_GET['email']) {echo "class='form-control alert alert-danger' value={$_GET['email']}</p>";}else {echo "class='form-control'";}?> id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="fio">ФИО</label>
        <input type="text" name="fio"  class="form-control" id="fio" placeholder="fio" <?if($_GET['fio']) {echo "class='form-control alert alert-danger' value={$_GET['fio']}</p>";}else {echo "class='form-control'";}?>>
    </div>
    <div class="form-group">
        <label for="adress">Адрес</label>
        <input type="text" name="adress" class="form-control" id="adress" placeholder="adress">
    </div>
    <div class="form-group">
        <label for="phone">телефон</label>
        <input type="text"<?if($_GET['phone']) {echo "class='form-control alert alert-danger' value={$_GET['phone']}</p>";}else {echo "class='form-control'";}?>  name="phone" class="form-control" id="phone" placeholder="phone">
    </div>
    <div class="custom-file">
        <input type="file" name="file" class="custom-file-input" id="file">
        <label class="custom-file-label" for="file">Choose file</label>
    </div>
    <div class="form-group">
        <label for="comment">комментарий</label>
        <textarea name="comment" class="form-control" rows="3" id="comment" placeholder="comment"></textarea>
    </div>
    <?if($_GET['errors']) echo "<p style='color: red'> errors</p>"?>
    <input  type="submit" id="button" class="btn btn-primary"/>
</form>
<script src="index.js"></script>
</body>
</html>