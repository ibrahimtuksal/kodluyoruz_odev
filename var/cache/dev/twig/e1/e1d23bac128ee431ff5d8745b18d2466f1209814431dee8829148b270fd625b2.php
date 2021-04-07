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

/* admin/userlist/index.html.twig */
class __TwigTemplate_a8f316e88f6d7cfff5fa7dea64187ebae28e37a8b419a639897b6c27e72177fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/userlist/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/userlist/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/userlist/index.html.twig", 1);
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
        $this->loadTemplate("admin/inc/header.html.twig", "admin/userlist/index.html.twig", 3)->display($context);
        
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
            <div class=\"col-md-5\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "flashbag", [], "any", false, false, false, 11), "get", [0 => "emailsuccess"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "
                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "session", [], "any", false, false, false, 20), "flashbag", [], "any", false, false, false, 20), "get", [0 => "usercreated"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "flashbag", [], "any", false, false, false, 27), "get", [0 => "useredited"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
        </div>
        <div class=\"row justify-content-md-center mb-3\">
            <div class=\"col-md-8\">
                <p class=\"text-center h4 mb-3\">Hızlı Erişim</p>
                <hr>
            </div>
        </div>
        <div class=\"row justify-content-md-center mb-5\">
            <div class=\"col-md-2 d-grid gap-2\">
                <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_add");
        echo "\" class=\"btn btn-danger\">Admin Oluştur <i class=\"fas fa-user-shield\"></i></a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"text-center h4 mb-3\">Kullanıcılar</p>
                <hr>
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">E-Mail</th>
                        <th scope=\"col\">Aktif/Pasif</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 63
            echo "                        <tr>
                            <th scope=\"row\">#</th>
                            <th>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 65), "html", null, true);
            echo "</th>
                            ";
            // line 66
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "isactive", [], "any", false, false, false, 66), 1))) {
                // line 67
                echo "                                <td><a data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm active-passive-btn\" data-is-active=\"false\"><span>Pasifleştir</span> <i class=\"fas fa-toggle-off on-off-icon\"></i></a></td>
                                ";
            } else {
                // line 69
                echo "                                <td><a data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm active-passive-btn\" data-is-active=\"true\"><span>Aktifleştir</span> <i class=\"fas fa-toggle-on on-off-icon\"></i></a></td>
                            ";
            }
            // line 71
            echo "                            <td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                            <td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
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
        return "admin/userlist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 75,  217 => 72,  212 => 71,  206 => 69,  200 => 67,  198 => 66,  194 => 65,  190 => 63,  186 => 62,  165 => 44,  153 => 34,  143 => 30,  139 => 28,  134 => 27,  124 => 23,  120 => 21,  115 => 20,  104 => 15,  99 => 12,  95 => 11,  90 => 8,  80 => 7,  69 => 3,  59 => 2,  36 => 1,);
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
            <div class=\"col-md-5\">
                {% for flashMessage in app.session.flashbag.get('emailsuccess') %}

                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            {{ flashMessage }}

                        </p>
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('usercreated') %}
                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            {{ flashMessage }}
                        </p>
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('useredited') %}
                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            {{ flashMessage }}
                        </p>
                    </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"row justify-content-md-center mb-3\">
            <div class=\"col-md-8\">
                <p class=\"text-center h4 mb-3\">Hızlı Erişim</p>
                <hr>
            </div>
        </div>
        <div class=\"row justify-content-md-center mb-5\">
            <div class=\"col-md-2 d-grid gap-2\">
                <a href=\"{{ url('user_add') }}\" class=\"btn btn-danger\">Admin Oluştur <i class=\"fas fa-user-shield\"></i></a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"text-center h4 mb-3\">Kullanıcılar</p>
                <hr>
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">E-Mail</th>
                        <th scope=\"col\">Aktif/Pasif</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr>
                            <th scope=\"row\">#</th>
                            <th>{{ user.email }}</th>
                            {% if user.isactive == 1 %}
                                <td><a data-user-id=\"{{user.id}}\" class=\"btn btn-warning btn-sm active-passive-btn\" data-is-active=\"false\"><span>Pasifleştir</span> <i class=\"fas fa-toggle-off on-off-icon\"></i></a></td>
                                {% else %}
                                <td><a data-user-id=\"{{user.id}}\" class=\"btn btn-success btn-sm active-passive-btn\" data-is-active=\"true\"><span>Aktifleştir</span> <i class=\"fas fa-toggle-on on-off-icon\"></i></a></td>
                            {% endif %}
                            <td><a href=\"{{ url('user_edit',{id:user.id}) }}\" class=\"btn btn-primary btn-sm\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                            <td><a href=\"{{ url('user_delete',{id:user.id}) }}\" class=\"btn btn-danger btn-sm\">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}

", "admin/userlist/index.html.twig", "C:\\xampp\\htdocs\\short-url-ibrahimtuksal\\templates\\admin\\userlist\\index.html.twig");
    }
}
