<?php require "_shared/header.php"; ?>

<main>
    <section class="py-5 bg-light" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold">Create a new user.</h1>
                    <div>
                        <form action="store_user_data.php" method="POST">

                            <label for="">First Name</label>
                            <input type="text" name="first_name" id=""> <br><br>

                            <label for="">Last Name</label>
                            <input type="text" name="last_name" id=""><br>

                            <input class="btn btn-primary" type="submit" name="submit_button">

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


</main>

<?php require "_shared/footer.php"; ?>