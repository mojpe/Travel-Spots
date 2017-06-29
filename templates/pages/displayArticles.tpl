{% include "./common/header.tpl" %}

<section>

    <div class="background-image-holder">
        <img src="/img/hero10.jpg" class="background-image" alt="Poster Image">
    </div>

    <div class="col-sm-12 text-center">
        <h1>Articles</h1>
    </div>

    <!-- Message box -->
    <div class="message-box" id="message-box" role="alert">
        <p class="message-text" id="message-text"></p>
    </div>
    <!-- END Message box -->

    <div class="row">

        <!-- Center Column -->
        <div class="col-sm-12 col-md-8 col-lg-10"> 
            {% for article in articles %}
            {% if article.main_picture == null %}

            {% endif %}

            <div class="blog-snippet-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <h1><a href="#">{{article.title}}</a></h1>
                            <p class="lead">
                                {{article.content}}
                            </p>
                            <i class="icon icon_calendar"></i><span class="alt-font">Published on {{article.date}}</span><br>
                            <i class="icon icon_map"></i><span class="alt-font"> {{article.location}}</span><br>
                            <i class="icon icon_profile"></i><span class="alt-font">By {{article.author}}</span>
                        </div>
                    </div>
                </div>	
            </div>
            {% else %}
            No articles found
            {% endfor %}
        </div> 


    </div>
</section>


{% include "./common/footer.tpl" %}

