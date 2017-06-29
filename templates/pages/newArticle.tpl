{% include "./common/header.tpl" %}


<section>

    <div class="background-image-holder">
        <img src="/img/hero18.jpg" class="background-image" alt="Poster Image For Mobiles">
    </div>


    <div class="col-sm-12 text-center">
        <h1>Create new article</h1>
    </div>

    <!-- Message box -->
    <div class="message-box" id="message-box" role="alert">
        <p class="message-text" id="message-text"></p>
    </div>

    <div class="row">

        <!-- Center Column -->
        <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <div class="edit-container">

                <form id='new-article-form' method="post" enctype="multipart/form-data">

                    <!-- Title -->
                    <div class="col-sm-12">
                        <label for="article-title">Title</label>
                        <input class="form-control input-lg input-effect" id="article-title" name="article-title" autocomplete="off">
                    </div>

                    <!-- Location -->
                    <div class="col-sm-12">
                        <input type='text' id="location" name="location" placeholder="Type your spot">
                        <input id="search" type="button" value="search" />
                        
                        <div id="form-location">
                            <input type="hidden"  id="lat" name="lat">
                            <input type='hidden' id="lng" name="lng">
                        </div>

                        <div class="map_canvas"></div>

                    </div>

                    <!-- Content -->
                    <div class="col-sm-12" style="margin-top: 50px">
                        <input id="article-content" name='article-content'>
                    </div>

                    <!-- FIX THE IMAGE UPLOAD BUTTON!
                    http://tympanus.net/codrops/2015/09/15/styling-customizing-file-inputs-smart-way/     --->
                    <input type="file" id="file" name='file'>
                    <label for="file">Choose a picture</label>
                    <input id="subNewArticle" type="submit" value="Create new article">
                </form>

            </div>
        </div>

    </div>

</section>


{% include "./common/footer.tpl" %}