<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #000;
        }

        .wrapper {
            position: relative;
            width: 350px;
            height: 400px;
            background: #000;
            box-shadow: 0 0 50px #0ef;
            border-radius: 20px;
            padding: 40px;
            overflow: hidden;
        }

        .form-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            transition: 1s ease-in-out;
        }

        h2 {
            font-size: 30px;
            color: #fff;
            text-align: center;
        }

        .input-group {
            position: relative;
            margin: 30px 0;
            border-bottom: 2px solid #fff;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .input-group input {
            width: 320px;
            height: 40px;
            font-size: 16px;
            color: #fff;
            padding: 0 5px;
            background: transparent;
            border: none;
            outline: none;
        }

        .input-group input:focus~label,
        .input-group valid:focus~label {
            top: -5px;
            font-size: 12px;
        }

        .remember {
            margin: -5px 0 15px 5px
        }

        .remember label {
            color: #fff;
            font-size: 14px;
        }

        .remember label input {
            accent-color: #0ef;
        }

        button {
            position: relative;
            width: 100%;
            height: 40px;
            background: #0ef;
            box-shadow: 0 0 10px #0ef;
            font-size: 16px;
            color: #000;
            font-weight: 500;
            cursor: pointer;
            border-radius: 30px;
            border: none;
            outline: none;
        }

        .signup-link {
            font-size: 14px;
            text-align: center;
            margin: 15px 0;
        }

        .signup-link p {
            color: #fff;
        }

        .signup-link p a {
            color: #0ef;
            text-decoration: none;
            font-weight: 500;
        }

        .signup-link p a:hover {
            text-decoration: underline;
        }

        .wrapper.active .form-wrapper.sign-in {
            transform: translateY(-450px);
        }

        .wrapper .form-wrapper.sign-up {
            position: absolute;
            top: 450px;
            left: 0;
        }

        .wrapper.active .form-wrapper.sign-up {
            transform: translateY(-450px);
        }

        .wrapper:hover {
            animation: animate 2.5s linear infinite;
        }

        @keyframes animate {
            100% {
                filter: hue-rotate(360deg);
            }
        }

        .input-group input.has-value + label {
            top: -5px;
            font-size: 12px;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="/home">
                <h2>Sign In</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remember">
                    <label for=""><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit">Sign In</button>
                <div class="signup-link">
                    <p>Don't have an account? <a href="#" class="signupbtn-link">Sign Up</a></p>
                </div>
            </form>
        </div>

        <div class="form-wrapper sign-up">
            <form action="">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remember">
                    <label for=""><input type="checkbox"> I agree to the terms & conditions</label>
                </div>
                <button type="submit">Sign Up</button>
                <div class="signup-link">
                    <p>Already have an account? <a href="#" class="signinbtn-link">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        const signinbtnlink = document.querySelector('.signinbtn-link');
        const signupbtnlink = document.querySelector('.signupbtn-link');
        const wrapper = document.querySelector('.wrapper');

        signupbtnlink.addEventListener('click', () => {
            wrapper.classList.toggle('active')
        });

        signinbtnlink.addEventListener('click', () => {
            wrapper.classList.toggle('active')
        });

        const inputs = document.querySelectorAll('.input-group input');

        inputs.forEach(input => {
            input.addEventListener('input', () => {
                if (input.value) {
                    input.classList.add('has-value');
                } else {
                    input.classList.remove('has-value');
                }
            });

            if (input.value) {
                input.classList.add('has-value');
            }
        });

    </script>
</body>
</html>