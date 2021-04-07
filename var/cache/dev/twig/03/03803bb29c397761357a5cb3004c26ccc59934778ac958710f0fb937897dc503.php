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

/* admin/mail/index.html.twig */
class __TwigTemplate_d077ef6faad6fcb6645b259a6a4721a3861550e08880d3906fccd19164beeac4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mail/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mail/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/mail/index.html.twig", 1);
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
        $this->loadTemplate("admin/inc/header.html.twig", "admin/mail/index.html.twig", 3)->display($context);
        
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
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact_send");
        echo "\" class=\"btn btn-outline-primary\">Yeni İleti <i class=\"fas fa-envelope-open-text\"></i></a>
            </div>
            <div class=\"col-md-2 d-grid gap-2\">
                <a href=\"\" class=\"btn btn-outline-primary\">Tüm Postalar <i class=\"fas fa-mail-bulk\"></i></a>
            </div>
            <div class=\"col-md-2 d-grid gap-2\">
                <a href=\"\" class=\"btn btn-outline-primary\">Yanıtlananlar <i class=\"fas fa-reply-all\"></i></a>
            </div>
            <div class=\"col-md-2 d-grid gap-2\">
                <a href=\"\" class=\"btn btn-outline-primary\">Okunanlar <i class=\"fab fa-readme\"></i></a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"text-center h4 mb-3\">Oluşturulan Kısaltmalar</p>
                <hr>
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">E-Mail</th>
                        <th scope=\"col\">İsim Soyisim</th>
                        <th scope=\"col\">Mesaj</th>
                        <th scope=\"col\">Tarih</th>
                        <th scope=\"col\">Okundu/Okunmadı</th>
                        <th scope=\"col\">Yanıtla</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 61
            echo "                        <tr>
                            <th scope=\"row\">#</th>
                            <th>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "email", [], "any", false, false, false, 63), "html", null, true);
            echo "</th>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "namesurname", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "message", [], "any", false, false, false, 65), 0, 25), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "createdat", [], "any", false, false, false, 66), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 68
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["mail"], "isreading", [], "any", false, false, false, 68), 0))) {
                // line 69
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact_show", ["id" => twig_get_attribute($this->env, $this->source, $context["mail"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\" class=\"btn btn-secondary btn-sm\">Okunmadı / Göster <i class=\"fas fa-eye\"></i></a>
                                ";
            } else {
                // line 71
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact_show", ["id" => twig_get_attribute($this->env, $this->source, $context["mail"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\">Okundu / Göster <i class=\"fas fa-eye\"></i></a>
                                ";
            }
            // line 73
            echo "                            </td>
                            <td><a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact_send");
            echo "?mail=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "email", [], "any", false, false, false, 74), "html", null, true);
            echo "&id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mail"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\">Yanıtla <i class=\"fas fa-reply\"></i></a></td>
                            <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["mail"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
        return "admin/mail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 78,  210 => 75,  202 => 74,  199 => 73,  193 => 71,  187 => 69,  185 => 68,  180 => 66,  176 => 65,  172 => 64,  168 => 63,  164 => 61,  160 => 60,  127 => 30,  115 => 20,  104 => 15,  99 => 12,  95 => 11,  90 => 8,  80 => 7,  69 => 3,  59 => 2,  36 => 1,);
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
                <a href=\"{{ url('contact_send') }}\" class=\"btn btn-outline-primary\">Yeni İleti <i class=\"fas fa-envelope-open-text\"></i></a>
            </div>
            <div class=\"col-md-2 d-grid gap-2\">
                <a href=\"\" class=\"btn btn-outline-primary\">Tüm Postalar <i class=\"fas fa-mail-bulk\"></i></a>
            </div>
            <div class=\"col-md-2 d-grid gap-2\">
                <a href=\"\" class=\"btn btn-outline-primary\">Yanıtlananlar <i class=\"fas fa-reply-all\"></i></a>
            </div>
            <div class=\"col-md-2 d-grid gap-2\">
                <a href=\"\" class=\"btn btn-outline-primary\">Okunanlar <i class=\"fab fa-readme\"></i></a>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"text-center h4 mb-3\">Oluşturulan Kısaltmalar</p>
                <hr>
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">E-Mail</th>
                        <th scope=\"col\">İsim Soyisim</th>
                        <th scope=\"col\">Mesaj</th>
                        <th scope=\"col\">Tarih</th>
                        <th scope=\"col\">Okundu/Okunmadı</th>
                        <th scope=\"col\">Yanıtla</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for mail in contact %}
                        <tr>
                            <th scope=\"row\">#</th>
                            <th>{{ mail.email }}</th>
                            <td>{{ mail.namesurname }}</td>
                            <td>{{ mail.message[0:25] }}</td>
                            <td>{{ mail.createdat | date('d-m-Y') }}</td>
                            <td>
                                {% if mail.isreading == 0 %}
                                    <a href=\"{{ url('contact_show',{id:mail.id}) }}\" class=\"btn btn-secondary btn-sm\">Okunmadı / Göster <i class=\"fas fa-eye\"></i></a>
                                {% else %}
                                    <a href=\"{{ url('contact_show',{id:mail.id}) }}\" class=\"btn btn-success btn-sm\">Okundu / Göster <i class=\"fas fa-eye\"></i></a>
                                {% endif %}
                            </td>
                            <td><a href=\"{{ url('contact_send')}}?mail={{ mail.email }}&id={{ mail.id }}\" class=\"btn btn-secondary btn-sm\">Yanıtla <i class=\"fas fa-reply\"></i></a></td>
                            <td><a href=\"{{ url('contact_delete',{id:mail.id}) }}\" class=\"btn btn-danger btn-sm\">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}

", "admin/mail/index.html.twig", "C:\\xampp\\htdocs\\short-url-ibrahimtuksal\\templates\\admin\\mail\\index.html.twig");
    }
}
