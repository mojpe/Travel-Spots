<?php

/* ./common/footer.tpl */
class __TwigTemplate_a23fb666cb4056783560813466a8bdfc54e7e4ed41dd77c31826d1a3d93f4429 extends Twig_Template
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
        echo "</div>

<div class=\"footer-container\">



    <footer class=\"details\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <img alt=\"logo\" class=\"logo\" src=\"/img/logo-dark.png\">
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </p>
                </div>

                <div class=\"col-sm-4\">
                    <h1>Contact</h1>
                    <p>
                        hello@pivot.net<br>
                        +61 3827 9284<br>
                        <br>
                        Suite 2A Humbolt Plaza<br>
                        300 Collins St<br>
                        Melbourne 3000
                    </p>
                </div>

                <div class=\"col-sm-4\">
                    <h1>Social Profiles</h1>
                    <ul class=\"social-icons\">
                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_twitter\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_facebook\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_instagram\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_dribbble\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_tumblr\"></i>
                            </a>
                        </li>

                        <li>
                            <a href=\"#\">
                                <i class=\"icon social_pinterest\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <span class=\"sub\">© Copright 2014 <a href=\"#\">Medium Rare</a> - All Rights Reserved</span>
                </div>
            </div>

        </div>
    </footer>
</div>

<script src=\"https://www.youtube.com/iframe_api\"></script>
<script src=\"/js/jquery.min.js\"></script>
<script src=\"/js/jquery.plugin.min.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
<script src=\"/js/jquery.flexslider-min.js\"></script>
<script src=\"/js/smooth-scroll.min.js\"></script>
<script src=\"/js/skrollr.min.js\"></script>
<script src=\"/js/spectragram.min.js\"></script>
<script src=\"/js/scrollReveal.min.js\"></script>
<script src=\"/js/isotope.min.js\"></script>
<script src=\"/js/twitterFetcher_v10_min.js\"></script>
<script src=\"/js/lightbox.min.js\"></script>
<script src=\"/js/jquery.countdown.min.js\"></script>
<script src=\"/js/scripts.js\"></script>
<!----->
<script src=\"/js/bootstrap-editable.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js\"></script>


<script src=\"http://maps.googleapis.com/maps/api/js?&amp;libraries=places&key=AIzaSyD3stbQGOypdBvV1Q4f_KviaF30604DM44\"></script>
<script src=\"/js/jquery.geocomplete.js\"></script>

";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["javascript"]) ? $context["javascript"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 104
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "./common/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 106,  127 => 104,  123 => 103,  116 => 83,  105 => 74,  103 => 73,  84 => 56,  79 => 53,  75 => 51,  73 => 50,  30 => 10,  48 => 27,  21 => 2,  19 => 1,);
    }
}
