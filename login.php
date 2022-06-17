<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Reatime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error messages!</div>
                <div class="name-details"></div>
            
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" id="email" placeholder="Email...">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" id="f_name" placeholder="Enter password...">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Not yet signed up? <a href="#">Signup now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hidden.js"></script>
</body>
</html>