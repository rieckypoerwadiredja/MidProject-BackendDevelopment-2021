@section('login')
    <div class="login-regis">
        <div class="form-login">
        <h1>Welcome To PROMERS</h1>

            <!-- Register -->
            <form class="register active" action="post">
                <input required placeholder="Your Name" type="text" name="nama" id="nama" class="nama">
                <input required placeholder="Email" type="text" name="email" id="email" class="email">
                <input required placeholder="Password" type="text" name="password" id="password" class="password">
                <div class="container-submit">
                    <a href="#" class="btn-log">Login</a>
                    <input type="submit" value="submit" class="submit">
                </div>
            </form>

            <!-- login -->
            <form class="login" action="post">
                <input required placeholder="Email" type="text" name="email" id="email" class="email">
                <input required placeholder="Password" type="text" name="password" id="password" class="password">
                <div class="container-submit">
                    <a href="#" class="btn-reg">Register</a>
                    <input type="submit" value="submit" class="submit">
                </div>
            </form>

        </div>
        <div class="img-sec">
            <img src="./login-regis/img/hiking.jpg" alt="">
        </div>
    </div>
    <script src="./js/navBar.js"></script>
    <script src="./login-regis/js/sistem-log-res.js"></script>
</body>

</html>
@endsection


