{% include "./common/header.tpl" %}

<section class="no-pad login-page fullscreen-element">

    <div class="background-image-holder">
        <img src="/img/blur2.jpg" class="background-image" alt="Poster Image">
    </div>
    <div class="container align-vertical">

        <!-- Message box -->
        <div class="message-box" id="message-box" role="alert">
            <p class="message-text" id="message-text"></p>
            {{messages|raw}}
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                <h1 class="text-white">Sign-up now!</h1>
                <div class="photo-form-wrapper clearfix">
                    <form method="post" action="/signup">
                        <input class="form-email" placeholder="Email Address" id="email" name="email" type="text" autocomplete="off">
                        <input class="form-password" placeholder="Password" id="password" name="password" type="password" autocomplete="off">
                        <input class="form-password" placeholder="Confirm Password" id="re-password" name="re-password" type="password" autocomplete="off">
                        <input class="login-btn btn-filled" value="Sign-up" id="subButtonSignUp" type="submit">
                    </form>
                </div>
                <a href="/login" class="text-white">Already have an account ➞</a><br>
            </div>
        </div>
    </div>
</section>

{% include "./common/footer.tpl" %}