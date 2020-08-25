<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container" id="container">
        
        <a href="index.php?controller=user&action=add" class="btn btn-success mt-4">Add</a>
        
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody id="tbody">
                <?php
                $i = 1;
                foreach ($users as $user) {
                    $id = $user['id'];
                    $name = $user['name'];
                    $email = $user['email'];
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $name ?></td>
                    <td><?= $email ?></td>
                    <td>
                    <a href="index.php?controller=user&action=edit&id=<?= $id ?>&name=<?= $name ?>&email=<?= $email ?>" class="btn btn-sm btn-outline-info">Edit</a>
                    <a href="index.php?controller=user&action=delete&id=<?= $id ?> " class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type = "text/javascript" language = "javascript">

</script>
</body>
</html>