{% include "./common/header.tpl" %}

<section>

    <div class="background-image-holder">
        <img src="/img/hero10.jpg" class="background-image" alt="Poster Image For Mobiles">
    </div>

    <div class="container">

        <div class="col-sm-12 text-center">
            <h1 class="color-white">Change Password</h1>
        </div>

        <!-- Message box -->
        <div class="message-box" id="message-box" role="alert">
            <p class="message-text" id="message-text"></p>
        </div>
        <!-- END Message box -->

        <div class="row color-white font-size-19">

            <!-- Center Column -->
            <div class="col-sm-12">        
                <form id="password-form">
                    <table class="table">
                        <tr>
                        <div class="col-sm-12 input-effect">
                            <td> Old Password</td>
                            <td><a href="#" id="old-password" class="password-field"></a></td>
                        </div>
                        </tr>

                        <tr>
                        <div class="col-sm-12">
                            <td><span>New Password</span></td>
                            <td><a href="#" id="new-password" class="password-field"></a></td>
                        </div>
                        </tr>

                        <tr>
                        <div class="col-sm-12">
                            <td><span>Repeat new password:</span></td>
                            <td><a href="#" id="repeat-new-password" class="password-field"></a></td>
                        </div>
                        </tr>
                    </table>

                    <div class="col-sm-12 center">
                        <input id="btnPassChange" class="btn editable-submit" type="button" value="Change Password">
                    </div>

                </form>
            </div>  
        </div>
    </div>

</section>

{% include "./common/footer.tpl" %}