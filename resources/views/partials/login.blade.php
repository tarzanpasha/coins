<section class="login">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="inner">
                    <div class="top">
                        <h1>Login</h1>
                        <h2>Log in to get access to your CoinSniper account.</h2>
                    </div>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="email" placeholder="Email" name="email" required="" value="">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input class="input" type="password" placeholder="Password" name="password" required="">
                            </div>
                        </div>

                        <div class="forgot-password">
                            <a href="https://coinsniper.net/forgot-password">
                                Forgot password?
                            </a>
                        </div>

                        <div class="field submit-button">
                            <div class="control">
                                <input type="submit" value="Login" class="button is-primary">
                            </div>
                        </div>
                    </form>

                    <br>
                    <div class="register">
                        Don’t have an account? <a href="/register" class="is-primary">Register Here.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
