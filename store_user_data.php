<?php require "_shared/db_connection.php"; 

//saving data in database table.



if (isset($_POST['submit_button'])) {

    if (empty($_POST["first_name"])) {
        echo "please enter first name";
        exit();
    }
    //echo "student form has been submitted!!!";

    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];

    // save data in user table
    $fullName = $firstName . " " . $lastName;
    $sql = "INSERT INTO users (name) VALUES ('$fullName')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
}



?>

<?php require "_shared/header.php"; ?>

    <main>
      <section class="py-5 bg-light" id="home">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold">Data has been saved.</h1>
              <p class="lead text-muted">
                
              </p>
              <div class="d-grid d-sm-flex gap-2">
                <a href="#examples" class="btn btn-primary btn-lg px-4 me-sm-3">View Components</a>
                <a href="#contact" class="btn btn-outline-secondary btn-lg px-4">Get Started</a>
              </div>
            </div>
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
              <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" alt="Course illustration" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </section>

      
    </main>
    
<?php require "_shared/footer.php"; ?>