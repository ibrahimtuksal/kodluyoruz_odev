<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_c7021c5da2119e8e3a0e5b70468539e3cdc18aa48c815909dde865c54fb58718 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "    ";
        $this->loadTemplate("inc/header.html.twig", "home/index.html.twig", 7)->display($context);
        // line 8
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"homepage\">

        <section class=\"banner\">
            <div class=\"container\">
                <div class=\"col w-50p\">
                    <h1>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
                    <p>
                        ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "
                    </p>
                    <a href=\"/register\" class=\"button button-primary\">Get started for free</a>
                </div>
                <div class=\"col w-50p\">
                    <img src=\"https://docrdsfx76ssb.cloudfront.net/static/1615406718/pages/wp-content/uploads/2020/05/illo-mobile-810x480-1.jpg\"/>
                </div>
            </div>
        </section>



        <div class=\"url-form\">
            <div class=\"container row\">

                <form action=\"/url/create\" method=\"post\" onsubmit=\"return createShortUrl()\">
                    <input id=\"urlinput\" type=\"text\" name=\"url\" placeholder=\"Shorten your link\" />
                    <button id=\"shortenButton\" class=\"button button-primary\" type=\"submit\">Shorten</button>
                </form>

                <div class=\"url-form-terms\">
                    ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 40, $this->source); })()), "urldesc", [], "any", false, false, false, 40);
        echo "
                </div>

                <div class=\"flash-messages\">
                    <div class=\"form-error\"></div>
                    <div class=\"form-success\"></div>
                </div>

            </div>
        </div>


        <section class=\"features\">
            <div class=\"container row\">
                <h3 class=\"features-title\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 54, $this->source); })()), "featitle", [], "any", false, false, false, 54), "html", null, true);
        echo "</h3>
                <p class=\"features-description\">
                    ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 56, $this->source); })()), "feadesc", [], "any", false, false, false, 56), "html", null, true);
        echo "
                </p>

                <div class=\"feature-rows\">
                    <div class=\"feature\">
                        <img src=\"https://docrdsfx76ssb.cloudfront.net/static/1615406718/pages/wp-content/uploads/2019/08/Homepage-Branded-Links-Illustration-1.png\" />
                        <h3>Inspire trust</h3>
                        <p>
                            With more clicks comes increased brand recognition and consumer trust in your
                            communications—which in turn inspires even more engagement with your links.
                            (It’s a wonderful cycle.)
                        </p>
                    </div>

                    <div class=\"feature\">
                        <img src=\"https://docrdsfx76ssb.cloudfront.net/static/1615406718/pages/wp-content/uploads/2019/08/Homepage-Branded-Links-Illustration-2.png\">
                        <h3>Boost results</h3>
                        <p>
                            On top of better deliverability and click-through, rich link-level data gives you
                            crucial insight into your link engagement so your team can make smarter decisions
                            around its content and communications.
                        </p>
                    </div>

                    <div class=\"feature\">
                        <img src=\"https://docrdsfx76ssb.cloudfront.net/static/1615406718/pages/wp-content/uploads/2019/08/Homepage-Branded-Links-Illustration-3.png\">
                        <h3>Gain control</h3>
                        <p>
                            Take credit for your content and learn more about how it’s consumed by enabling
                            auto-branding—a feature that ensures your brand remains in any link someone
                            shortens pointing to your website.
                        </p>
                    </div>
                </div>

            </div>
        </section>


        <section class=\"happy-customers\">
            <div class=\"container\">

            </div>
        </section>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 106
        echo "    ";
        $this->loadTemplate("inc/footer.html.twig", "home/index.html.twig", 106)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 106,  229 => 105,  172 => 56,  167 => 54,  150 => 40,  126 => 19,  121 => 17,  114 => 12,  104 => 11,  93 => 8,  90 => 7,  80 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}


{% block header %}
    {% include 'inc/header.html.twig' %}

{% endblock %}

{% block body %}
    <div class=\"homepage\">

        <section class=\"banner\">
            <div class=\"container\">
                <div class=\"col w-50p\">
                    <h1>{{ setting.title }}</h1>
                    <p>
                        {{ setting.description }}
                    </p>
                    <a href=\"/register\" class=\"button button-primary\">Get started for free</a>
                </div>
                <div class=\"col w-50p\">
                    <img src=\"https://docrdsfx76ssb.cloudfront.net/static/1615406718/pages/wp-content/uploads/2020/05/illo-mobile-810x480-1.jpg\"/>
                </div>
            </div>
        </section>



        <div class=\"url-form\">
            <div class=\"container row\">

                <form action=\"/url/create\" method=\"post\" onsubmit=\"return createShortUrl()\">
                    <input id=\"urlinput\" type=\"text\" name=\"url\" placeholder=\"Shorten your link\" />
                    <button id=\"shortenButton\" class=\"button button-primary\" type=\"submit\">Shorten</button>
                </form>

                <div class=\"url-form-terms\">
                    {{ setting.urldesc | raw }}
                </div>

                <div class=\"flash-messages\">
                    <div class=\"form-error\"></div>
                    <div class=\"form-success\"></div>
                </div>

            </div>
        </div>


        <section class=\"features\">
            <div class=\"container row\">
                <h3 class=\"features-title\">{{ setting.featitle }}</h3>
                <p class=\"features-description\">
                    {{ setting.feadesc }}
                </p>

                <div class=\"feature-rows\">
                    <div class=\"feature\">
                        <img src=\"https://docrdsfx76ssb.cloudfront.net/static/1615406718/pages/wp-content/uploads/2019/08/Homepage-Branded-Links-Illustration-1.png\" />
                        <h3>Inspire trust</h3>
                        <p>
                            With more clicks comes increased brand recognition and consumer trust in your
                            communications—which in turn inspires even more engagement with your links.
                            (It’s a wonderful cycle.)
                        </p>
                    </div>

                    <div class=\"feature\">
                        <img src=\"https://docrdsfx76ssb.cloudfront.net/static/1615406718/pages/wp-content/uploads/2019/08/Homepage-Branded-Links-Illustration-2.png\">
                        <h3>Boost results</h3>
                        <p>
                            On top of better deliverability and click-through, rich link-level data gives you
                            crucial insight into your link engagement so your team can make smarter decisions
                            around its content and communications.
                        </p>
                    </div>

                    <div class=\"feature\">
                        <img src=\"https://docrdsfx76ssb.cloudfront.net/static/1615406718/pages/wp-content/uploads/2019/08/Homepage-Branded-Links-Illustration-3.png\">
                        <h3>Gain control</h3>
                        <p>
                            Take credit for your content and learn more about how it’s consumed by enabling
                            auto-branding—a feature that ensures your brand remains in any link someone
                            shortens pointing to your website.
                        </p>
                    </div>
                </div>

            </div>
        </section>


        <section class=\"happy-customers\">
            <div class=\"container\">

            </div>
        </section>

    </div>
{% endblock %}


{% block footer %}
    {% include 'inc/footer.html.twig' %}
{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\short-url-ibrahimtuksal\\templates\\home\\index.html.twig");
    }
}
