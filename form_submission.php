<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form-submission</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">Form-Submission (Front-End)</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenue">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenue">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
            </ul>
        </div>
    </div>
   </nav>

   <!-- title section -->
   <section class="p-5">
    <div class="container">
        <div class="m-auto">
            <h4 class="text-center">Testing a form submission with MySQL database</h4>
        </div>
    </div>
   </section>


   <!-- form section -->
    <section class="p-5">
        <div class="container">
            <div class="m-auto w-50">
                <form action="post_form_to_db.php" method="post">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Gender:</label><br>
                        <select name="gender"  class="form-control">
                            <option value="" selected disabled>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" name="enter" class="btn btn-primary form-control">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <footer class="p-5 bg-dark text-light text-center position-relative">
        <div class="container">
            <p>copyright &copy; practice 2023</p>
        </div>

    </footer>
 
<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
</body>
</html>