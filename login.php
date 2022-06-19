<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Reatime Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="name-details"></div>
            
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" id="email" name="email" placeholder="Email...">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter password...">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hidden.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>