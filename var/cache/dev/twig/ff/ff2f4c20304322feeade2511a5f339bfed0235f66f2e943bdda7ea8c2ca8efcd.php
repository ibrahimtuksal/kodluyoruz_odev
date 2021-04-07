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

/* admin/default/index.html.twig */
class __TwigTemplate_b8553787493854b6b32c1302b2cddd9b84fe795585f9a3921ba8c5f9f16f4dbd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/default/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/default/index.html.twig", 1);
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
        $this->loadTemplate("admin/inc/header.html.twig", "admin/default/index.html.twig", 3)->display($context);
        
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <p class=\"text-center h2\">İstatistikler</p>
            <hr>
        </div>
    </div>
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-5\">
            <p class=\"text-center h5\">En Çok Tıklanan Kısaltmalar</p>
            <ul class=\"list-group\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["urls"]) {
            // line 20
            echo "                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urls"], "url", [], "any", false, false, false, 21), "html", null, true);
            echo "
                    <span class=\"badge bg-primary rounded-pill\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urls"], "clickcount", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['urls'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
        </div>
        <div class=\"col-md-5\">
            <p class=\"text-center h5\">En Çok Url Oluşturan Kullanıcılar</p>
            <ul class=\"list-group\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 31
            echo "                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "
                        <span class=\"badge bg-primary rounded-pill\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "urlcount", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  141 => 33,  137 => 32,  134 => 31,  130 => 30,  123 => 25,  114 => 22,  110 => 21,  107 => 20,  103 => 19,  90 => 8,  80 => 7,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}
{% block header %}
    {% include 'admin/inc/header.html.twig' %}
{% endblock %}


{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <p class=\"text-center h2\">İstatistikler</p>
            <hr>
        </div>
    </div>
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-5\">
            <p class=\"text-center h5\">En Çok Tıklanan Kısaltmalar</p>
            <ul class=\"list-group\">
                {% for urls in url %}
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                    {{ urls.url }}
                    <span class=\"badge bg-primary rounded-pill\">{{ urls.clickcount }}</span>
                </li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"col-md-5\">
            <p class=\"text-center h5\">En Çok Url Oluşturan Kullanıcılar</p>
            <ul class=\"list-group\">
                {% for users in user %}
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                        {{ users.email }}
                        <span class=\"badge bg-primary rounded-pill\">{{ users.urlcount }}</span>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
</div>
{% endblock %}

", "admin/default/index.html.twig", "C:\\xampp\\htdocs\\short-url-ibrahimtuksal\\templates\\admin\\default\\index.html.twig");
    }
}
