
<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location:../');
    }
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store submitted data in session
    $_SESSION['students'][] = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'gender' => $_POST['gender'],
        'course' => $_POST['course'],
        'campus' => $_POST['campus'],
        'college' => $_POST['college']
    ];
    header("Location: showData.php"); // Redirect to showData.php after adding data
    exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Data</title>
    <?php include('../layout/style.php'); ?>
</head>
<body class="sb-nav-fixed">
    <?php include('../layout/header.php'); ?>
    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Add Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Add Data</li>
                    </ol>
                    <div class="card-body">
                        <form action="" method="post">
                            
                            <div class="col-5 form-floating mb-3">
                                <input class="form-control" type="text" name="name" id="inputName" placeholder="Name" required>
                                <label for="inputName">Name</label>
                            </div>
                            <div class="col-5 form-floating mb-3">
                                <input class="form-control" type="number" name="age" id="inputAge" placeholder="Age" required>
                                <label for="inputAge">Age</label>
                            </div>
                            <div class="col-5 form-floating mb-3">
                                <input class="form-control" type="text" name="gender" id="inputGender" placeholder="Gender" required>
                                <label for="inputGender">Gender</label>
                            </div>
                            <div class="col-5 form-floating mb-3">
                                <input class="form-control" type="text" name="course" id="inputCourse" placeholder="Course" required>
                                <label for="inputCourse">Course</label>
                            </div>
                            <div class="col-5 form-floating mb-3">
                                <input class="form-control" type="text" name="campus" id="inputCampus" placeholder="Campus" required>
                                <label for="inputCampus">Campus</label>
                            </div>
                            <div class="col-5 form-floating mb-3">
                                <input class="form-control" type="text" name="college" id="inputCollege" placeholder="College" required>
                                <label for="inputCollege">College</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>
</html>
