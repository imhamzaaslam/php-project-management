<?php require "_shared/header.php"; 

if(isset($_GET['user_id'])){
    $editMode = true;
    $userId = $_GET['user_id'];
    require "_shared/db_connection.php"; 
    $sql = "SELECT * FROM users where id = $userId";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $city = $row['city'];
    
}else{
    $editMode = false;
    $city = "";
    $name = "";
}

?>

<main>
    <section class="py-5" style="min-height: 80vh; background: #f4f6f9;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <?php if($editMode) {  ?>
                            <h2 class="fw-bold mb-1">Update User Details</h2>
                            <p class="text-muted mb-4">Edit the information below and save your changes.</p>
                            <?php } else {  ?>
                            <h2 class="fw-bold mb-1">Create a New User</h2>
                            <p class="text-muted mb-4">Fill in the details below to add a new user.</p>
                            <?php  }  ?>

                            <form action="store_user_data.php" method="POST">

                                <?php if($editMode){ ?>
                                <input type="hidden" value="<?php echo $userId; ?>" name="user_id">
                                <?php } ?>

                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold">Name</label>
                                    <input type="text" class="form-control form-control-lg" value="<?php echo htmlspecialchars($name); ?>" name="name" id="name" placeholder="Enter full name" required>
                                </div>

                                <div class="mb-4">
                                    <label for="city" class="form-label fw-semibold">City</label>
                                    <input type="text" class="form-control form-control-lg" value="<?php echo htmlspecialchars($city); ?>" name="city" id="city" placeholder="Enter city" required>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" type="submit" name="submit_button">
                                        <?php echo $editMode ? "Save Changes" : "Create User"; ?>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require "_shared/footer.php"; ?>