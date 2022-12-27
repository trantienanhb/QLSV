<?php
include('assets/head.php');
?>

<div class="container">
<form method="POST" action="?Controller=student&action=update&id=<?=$student[0]['id']?>">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" value="<?=$student[0]['name']?>" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Age</label>
    <input type="number" name="age" value="<?=$student[0]['age']?>" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="address" value="<?=$student[0]['address']?>" class="form-control">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
include('assets/footer.php');
?>