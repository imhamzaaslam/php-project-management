<?php require "_shared/db_connection.php";

//saving data in database table.



if (isset($_POST['submit_button'])) {

  if (empty($_POST["name"])) {
    echo "please enter name";
    exit();
  }
  //echo "student form has been submitted!!!";

  $name = $_POST["name"];
  $city = $_POST["city"];

  //get file from form and save it.

  $avatar = $_FILES['avatar'];

  if ($avatar['error'] === UPLOAD_ERR_OK) {
    $avatarName = $avatar['name'];
    $avatarTmpName = $avatar['tmp_name'];
    $avatarSize = $avatar['size'];
    $avatarType = $avatar['type'];

    // Generate a unique filename to avoid overwriting existing files
    $uniqueFilename = uniqid() . '_' . basename($avatarName);
    $uploadDir = 'uploads/'; // Make sure this directory exists and is writable
    $uploadPath = $uploadDir . $uniqueFilename;

    // Move the uploaded file to the desired location
    if (move_uploaded_file($avatarTmpName, $uploadPath)) {
      
      // You can save the filename in the database if needed
    } else {
      echo "Error uploading avatar.";
      exit();
    }
  } else {
    echo "No avatar uploaded or there was an upload error.";
  }


  if (isset($_POST['user_id'])) {
    $userId = $_POST['user_id'];
    $sql = "UPDATE users SET name = '$name', city = '$city' WHERE id = $userId";
    $message = "Record updated";
    } else {
      
      $sql = "INSERT INTO users (name, role_id, avatar) VALUES ('$name', 1, '$uniqueFilename') ";
      $message = "Record Created";
  }

  // save data in user table


  if (!mysqli_query($conn, $sql)) {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
  }
} else {
  $message = "No data submitted";
}



?>

<?php require "_shared/header.php"; ?>

<main>
  <section class="py-5" style="min-height: 80vh; background: #f4f6f9;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card border-0 shadow-sm text-center">
            <div class="card-body p-4 p-md-5">
              <div class="alert alert-success d-flex align-items-center justify-content-center gap-2 mb-4" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                <span class="fw-semibold"><?php echo $message; ?></span>
              </div>
              <a href="list_users.php" class="btn btn-primary btn-lg px-4">View All Users</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require "_shared/footer.php"; ?>