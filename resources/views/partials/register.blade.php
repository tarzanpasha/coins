<section class="register">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="inner">
                    <div class="top">
                        <h1>Register</h1>
                        <h2>Create your account at CoinSniper to unlock new features.</h2>
                    </div>


                    <form method="POST" action="/register">
                        @csrf
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Name" name="name" required
                                       value="">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="email" placeholder="Email" name="email" required
                                       value="">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input id="password"  class="input" type="password" placeholder="Password" name="password" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Confirm Password</label>
                            <div class="control">
                                <input id="password_confirmation" class="input" type="password" placeholder="Confirm Password"
                                       name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="field submit-button">
                            <div class="control">
                                <input type="submit" value="Register" class="button is-primary">
                            </div>
                        </div>
                        <div class="register">
                            Already registered?
                            <a href="/login">
                                Login here.
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
