<?php
if (empty($_SESSION["user"])) {
    return $this->header("location: /QLSV/admin/index.php?Controller=login&action=index");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
            

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb- mb-lg-0">

            </ul>
            <!-- Left links -->

            <div class="d-flex align-items-center">
            <!-- header('location:/testQLSV/QLSV/admin?Controller=student&action=loginuser');    -->
            
                <a href="/QLSV/admin/index.php?Controller=login&action=logout">
              
                <button type="button" class="btn btn-primary me-3">
                   Logout
                </button>
                </a>

            </div>
            
        </div>
        
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<?php if(isset($data["error"])){ ?>
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
             <?php echo $data["error"] ?>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             <?php }?>
        </div>
<!-- Navbar -->