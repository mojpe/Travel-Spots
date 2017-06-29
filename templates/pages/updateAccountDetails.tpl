{% include "./common/header.tpl" %}

<section>

    <div class="background-image-holder">
        <img src="/img/hero10.jpg" class="background-image" alt="Poster Image">
    </div>

    <div class="container">

        <!-- Lock/Unlock Button -->
        <div class="col-sm-12 text-right">
            <button id="edited" class="btn btn-info" locked="true">Lock / Unlock edit</button>
        </div>

        <div class="col-sm-12 text-center">
            <h1 class="color-white">Update details<h1>

        </div>

        <!-- Message box -->
        <div class="message-box" id="message-box" role="alert">
            <p class="message-text" id="message-text"></p>
        </div>
        <!-- END Message box -->



        <div class="row text-white font-size-19">
        
            <!-- Center Column -->
            <div class="col-sm-12">
                    <table class="table">    
                        <tr>
                        <div class="col-sm-12">
                            <td><span>First name:</span></td>
                            <td><a href="#" id="firstname">{{accountData.first_name}}</a></td>
                        </div>
                        </tr>

                        <tr>
                        <div class="col-sm-12">
                            <td><span>Last name:</span></td>

                            <td><a href="#" id="lastname">{{accountData.last_name}}</a></td>
                        </div>
                        </tr>
                    </table>

            </div>

        </div>
    </div>

</section>

{% include "./common/footer.tpl" %}
