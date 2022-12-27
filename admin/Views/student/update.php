<?php
include('assets/head.php');
?>

<div class="container">
 
<form method="POST" action="?Controller=student&action=update&id=<?php echo isset($student[0]['id']) ? $student[0]['id']  :$data["id"]?>">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" value="<?php echo isset($student[0]['id']) ? $student[0]['name']  :$data["name"]?>" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Age</label>
    <input type="number" name="age" value="<?php echo isset($student[0]['id']) ? $student[0]['age']  :$data["age"]?>" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="address" value="<?php echo isset($student[0]['id']) ? $student[0]['address']  :$data["address"]?>" class="form-control">
  </div>
  <a href="/QLSV/admin/?Controller=student&action=index">      
    <button  type="button" class="btn btn-primary ">
      Back
    </button>
  </a>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
include('assets/footer.php');
?>