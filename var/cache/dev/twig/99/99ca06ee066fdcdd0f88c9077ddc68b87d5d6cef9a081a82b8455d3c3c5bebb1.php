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

/* admin/url/index.html.twig */
class __TwigTemplate_f519d85b73341c4b1600600f9f89694008ca61d3bb65bf3bd6767ddb52ba9593 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/url/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/url/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/url/index.html.twig", 1);
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
        $this->loadTemplate("admin/inc/header.html.twig", "admin/url/index.html.twig", 3)->display($context);
        
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
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"text-center h2 mb-3\">Oluşturulan Kısaltmalar</p>
                <hr>
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Url</th>
                        <th scope=\"col\">Hash Kodu</th>
                        <th scope=\"col\">Oluşturan</th>
                        <th scope=\"col\">Oluşturulduğu Tarih</th>
                        <th scope=\"col\">İstatislikler</th>
                        <th scope=\"col\">Aktif/Pasif</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["urlget"]) {
            // line 29
            echo "                    <tr>
                        <th scope=\"row\">#</th>
                        <th>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urlget"], "url", [], "any", false, false, false, 31), "html", null, true);
            echo "</th>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urlget"], "urlhash", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        ";
            // line 33
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["urlget"], "userid", [], "any", false, false, false, 33), 0))) {
                // line 34
                echo "                            <td>Anonim</td>
                        ";
            } else {
                // line 36
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["helpers"]) || array_key_exists("helpers", $context) ? $context["helpers"] : (function () { throw new RuntimeError('Variable "helpers" does not exist.', 36, $this->source); })()), "getUser", [0 => twig_get_attribute($this->env, $this->source, $context["urlget"], "userId", [], "any", false, false, false, 36)], "method", false, false, false, 36), "email", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                        ";
            }
            // line 38
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urlget"], "createdat", [], "any", false, false, false, 38), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("url_statistics", ["id" => twig_get_attribute($this->env, $this->source, $context["urlget"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">İstatislikler <i class=\"fas fa-align-center\"></i></a></td>
                        <td>
                                ";
            // line 41
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["urlget"], "isactive", [], "any", false, false, false, 41), true))) {
                // line 42
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("url_operation", ["id" => twig_get_attribute($this->env, $this->source, $context["urlget"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">Pasif Yap <i class=\"fas fa-toggle-off\"></i></a>
                                ";
            } else {
                // line 44
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("url_operation", ["id" => twig_get_attribute($this->env, $this->source, $context["urlget"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\">Aktif Yap <i class=\"fas fa-toggle-on\"></i></a>
                                ";
            }
            // line 46
            echo "                        </td>
                        <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("url_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["urlget"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                        <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("url_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["urlget"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Sil <i class=\"fas fa-trash\"></i></a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['urlget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/url/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 51,  171 => 48,  167 => 47,  164 => 46,  158 => 44,  152 => 42,  150 => 41,  145 => 39,  140 => 38,  134 => 36,  130 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 29,  112 => 28,  90 => 8,  80 => 7,  69 => 3,  59 => 2,  36 => 1,);
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
                <p class=\"text-center h2 mb-3\">Oluşturulan Kısaltmalar</p>
                <hr>
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Url</th>
                        <th scope=\"col\">Hash Kodu</th>
                        <th scope=\"col\">Oluşturan</th>
                        <th scope=\"col\">Oluşturulduğu Tarih</th>
                        <th scope=\"col\">İstatislikler</th>
                        <th scope=\"col\">Aktif/Pasif</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for urlget in url %}
                    <tr>
                        <th scope=\"row\">#</th>
                        <th>{{ urlget.url }}</th>
                        <td>{{ urlget.urlhash }}</td>
                        {% if urlget.userid == 0 %}
                            <td>Anonim</td>
                        {% else %}
                            <td>{{ helpers.getUser(urlget.userId).email }}</td>
                        {% endif %}
                        <td>{{ urlget.createdat | date('d-m-Y') }}</td>
                        <td><a href=\"{{ url('url_statistics',{id:urlget.id}) }}\" class=\"btn btn-info btn-sm\">İstatislikler <i class=\"fas fa-align-center\"></i></a></td>
                        <td>
                                {% if urlget.isactive == TRUE %}
                                    <a href=\"{{ url('url_operation',{id:urlget.id}) }}\" class=\"btn btn-warning btn-sm\">Pasif Yap <i class=\"fas fa-toggle-off\"></i></a>
                                {% else %}
                                    <a href=\"{{ url('url_operation',{id:urlget.id}) }}\" class=\"btn btn-success btn-sm\">Aktif Yap <i class=\"fas fa-toggle-on\"></i></a>
                                {% endif %}
                        </td>
                        <td><a href=\"{{ url('url_edit',{id:urlget.id}) }}\" class=\"btn btn-primary btn-sm\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                        <td><a href=\"{{ url('url_delete',{id:urlget.id}) }}\" class=\"btn btn-danger btn-sm\">Sil <i class=\"fas fa-trash\"></i></a></td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}

", "admin/url/index.html.twig", "C:\\xampp\\htdocs\\short-url-ibrahimtuksal\\templates\\admin\\url\\index.html.twig");
    }
}
