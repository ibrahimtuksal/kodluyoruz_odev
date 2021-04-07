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

/* admin/url/statistics.html.twig */
class __TwigTemplate_cb7666fcce8b41bb565dcae546aa7a0e807209b0e90aca3af6c917de76e57e49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/url/statistics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/url/statistics.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/url/statistics.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->loadTemplate("admin/inc/header.html.twig", "admin/url/statistics.html.twig", 3)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-7\">
                <p class=\"text-center display-6\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 12, $this->source); })()), "url", [], "any", false, false, false, 12), "html", null, true);
        echo "
                </p>
                <p class=\"text-center h5\"><b>İstatislikler</b></p>
                <p class=\"text-center\">Tıklanma Sayısı <button class=\"btn btn-danger btn-sm\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 15, $this->source); })()), "clickcount", [], "any", false, false, false, 15), "html", null, true);
        echo "</button></p>
                <hr>
            </div>
        </div>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urlstat"]) || array_key_exists("urlstat", $context) ? $context["urlstat"] : (function () { throw new RuntimeError('Variable "urlstat" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["urls"]) {
            // line 20
            echo "        <div class=\"row mb-3\">
           <div class=\"col-md-3\">
               <ul class=\"list-group\">
                   <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                       ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["helpers"]) || array_key_exists("helpers", $context) ? $context["helpers"] : (function () { throw new RuntimeError('Variable "helpers" does not exist.', 24, $this->source); })()), "getUrl", [0 => twig_get_attribute($this->env, $this->source, $context["urls"], "urlid", [], "any", false, false, false, 24)], "method", false, false, false, 24), "url", [], "any", false, false, false, 24), "html", null, true);
            echo "<i class=\"fas fa-link\"></i>
                   </li>
               </ul>
           </div>
            <div class=\"col-md-6\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                       ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urls"], "browser", [], "any", false, false, false, 31), "html", null, true);
            echo "
                        <i class=\"fab fa-chrome\"></i>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-3\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urls"], "ipaddress", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        <i class=\"fas fa-list-ol\"></i>
                    </li>
                </ul>
            </div>

        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['urls'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/url/statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 47,  140 => 39,  129 => 31,  119 => 24,  113 => 20,  109 => 19,  102 => 15,  96 => 12,  90 => 8,  80 => 7,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block header %}
    {% include 'admin/inc/header.html.twig' %}
{% endblock %}


{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-7\">
                <p class=\"text-center display-6\">
                    {{ url.url }}
                </p>
                <p class=\"text-center h5\"><b>İstatislikler</b></p>
                <p class=\"text-center\">Tıklanma Sayısı <button class=\"btn btn-danger btn-sm\">{{ url.clickcount }}</button></p>
                <hr>
            </div>
        </div>
        {% for urls in urlstat %}
        <div class=\"row mb-3\">
           <div class=\"col-md-3\">
               <ul class=\"list-group\">
                   <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                       {{ helpers.getUrl(urls.urlid).url }}<i class=\"fas fa-link\"></i>
                   </li>
               </ul>
           </div>
            <div class=\"col-md-6\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                       {{ urls.browser }}
                        <i class=\"fab fa-chrome\"></i>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-3\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        {{ urls.ipaddress }}
                        <i class=\"fas fa-list-ol\"></i>
                    </li>
                </ul>
            </div>

        </div>
        {% endfor %}
    </div>
{% endblock %}

", "admin/url/statistics.html.twig", "C:\\xampp\\htdocs\\short-url-ibrahimtuksal\\templates\\admin\\url\\statistics.html.twig");
    }
}
