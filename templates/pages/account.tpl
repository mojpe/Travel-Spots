{% include "./common/header.tpl" %}

<section>



    <div class="background-image-holder">
        <img src="/img/hero10.jpg" class="background-image" alt="Poster Image">
    </div>

    <div class="container">

        <div class="col-sm-12 text-center">
            <h1>Welcome {{accountData.first_name}}</h1>
        </div>

        <!-- Message box -->
        <div class="message-box" id="message-box" role="alert">
            <p class="message-text" id="message-text"></p>
        </div>
        <!-- END Message box -->




        <div class="row text-white font-size-19">
            <!-- Center Column -->
            <div class="col-sm-12">
                <div class="edit-container">
                    Center

                </div>
            </div>
            <!-- END Center Column -->


        </div>
    </div>

</section>

{% include "./common/footer.tpl" %}
