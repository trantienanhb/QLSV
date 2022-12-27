<?php
include('assets/head.php');
?>

<div class="container">
    <div class="mb-3">
        <a href="?Controller=student&action=create" class="btn btn-success">Add new student</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($infoStudents as $infoStudent) {
            ?>
                <tr>
                <td><?=$infoStudent['id']?></td>
                <td><?=$infoStudent['name']?></td>
                <td><?=$infoStudent['age']?></td>
                <td><?=$infoStudent['address']?></td>
                <td>
                    <a href="?Controller=student&action=edit&id=<?=$infoStudent['id']?>" class="btn btn-info">Update</a>
                    <a href="?Controller=student&action=delete&id=<?=$infoStudent['id']?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>

            <?php
            }
            ?>


        </tbody>
    </table>
</div>

<?php
include('assets/footer.php');
?>