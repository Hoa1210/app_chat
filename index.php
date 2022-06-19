<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Reatime Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details"></div>
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First name...">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last name...">
                    </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Email...">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter password...">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select image</label>
                        <input type="file" name="image" require>
                    </div>
                    <div class="field button">
                        <input type="submit" name="btn"  value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hidden.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>