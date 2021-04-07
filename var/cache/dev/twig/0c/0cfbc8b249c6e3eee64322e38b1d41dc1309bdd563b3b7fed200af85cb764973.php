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

/* admin/inc/header.html.twig */
class __TwigTemplate_fc1c7332f244b2b30513742e7cbcb02a7667b327c09b5c2eb635f9da061173a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inc/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inc/header.html.twig"));

        // line 1
        echo "<div class=\"container mt-2\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-7 text-center\">
            <p class=\"text-center display-5\">Yönetim Paneli</p>
            <p class=\"h3 text-center\">
                Merhaba
                <br>
                ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8), "html", null, true);
        echo "
                <br>
                <a href=\"/logout\" class=\"btn btn-danger mt-3\"><i class=\"fas fa-power-off\"></i></a>
            <hr>
            </p>
        </div>
    </div>
    <div class=\"row justify-content-md-center mb-5\">
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin\" class=\"btn btn-dark\"><i class=\"fas fa-home\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin/settings\" class=\"btn btn-dark\">Genel Ayarlar <i class=\"fas fa-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin/contact\" class=\"btn btn-dark\">Mail İşlemleri <i class=\"fas fa-envelope\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin/url\" class=\"btn btn-dark\">Url İşlemleri <i class=\"fas fa-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin/userlist\" class=\"btn btn-dark\">Kullanıcı İşlemleri <i class=\"fas fa-user-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"\" class=\"btn btn-dark\">İçerik İşlemleri <i class=\"fas fa-cog\"></i></a>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/inc/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mt-2\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-7 text-center\">
            <p class=\"text-center display-5\">Yönetim Paneli</p>
            <p class=\"h3 text-center\">
                Merhaba
                <br>
                {{ app.user.username }}
                <br>
                <a href=\"/logout\" class=\"btn btn-danger mt-3\"><i class=\"fas fa-power-off\"></i></a>
            <hr>
            </p>
        </div>
    </div>
    <div class=\"row justify-content-md-center mb-5\">
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin\" class=\"btn btn-dark\"><i class=\"fas fa-home\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin/settings\" class=\"btn btn-dark\">Genel Ayarlar <i class=\"fas fa-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin/contact\" class=\"btn btn-dark\">Mail İşlemleri <i class=\"fas fa-envelope\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin/url\" class=\"btn btn-dark\">Url İşlemleri <i class=\"fas fa-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"/admin/userlist\" class=\"btn btn-dark\">Kullanıcı İşlemleri <i class=\"fas fa-user-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"\" class=\"btn btn-dark\">İçerik İşlemleri <i class=\"fas fa-cog\"></i></a>
        </div>
    </div>
</div>", "admin/inc/header.html.twig", "C:\\xampp\\htdocs\\short-url-ibrahimtuksal\\templates\\admin\\inc\\header.html.twig");
    }
}
