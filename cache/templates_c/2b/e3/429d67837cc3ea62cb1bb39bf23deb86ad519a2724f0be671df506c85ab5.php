<?php

/* pages/home.tpl */
class __TwigTemplate_2be3429d67837cc3ea62cb1bb39bf23deb86ad519a2724f0be671df506c85ab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("./common/header.tpl")->display($context);
        // line 2
        echo "
<section class=\"hero-divider\">
\t\t\t
\t\t\t\t<div class=\"background-image-holder overlay\">
\t\t\t\t\t<img class=\"background-image\" alt=\"Poster Image For Mobiles\" src=\"img/side1.jpg\">
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"video-wrapper youtube-bg\">
\t\t\t\t\t<iframe class=\"youtube-bg-iframe\" type=\"text/html\" id=\"yt-1469867500285-0\" src=\"https://www.youtube.com/embed/uOzwwZxjPRs?rel=0&amp;enablejsapi=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;loop=1&amp;iv_load_policy=3\"></iframe>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center\">
\t\t\t\t\t\t\t<h1 class=\"text-white\">Awesome Youtube Dividers</h1>
\t\t\t\t\t\t\t<p class=\"lead text-white\">
\t\t\t\t\t\t\t\tSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-white btn-primary\">See More</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-filled\">Purchase</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

";
        // line 27
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 27,  21 => 2,  19 => 1,);
    }
}
