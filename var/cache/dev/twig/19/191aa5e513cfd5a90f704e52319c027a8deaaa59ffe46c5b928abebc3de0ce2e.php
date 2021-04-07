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

/* user/inc/header.html.twig */
class __TwigTemplate_96e4c36899cb1f33ed9d2e3117ce74d42f54ea1170aa30a78c46cbab17c09759 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inc/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/inc/header.html.twig"));

        // line 1
        echo "<div class=\"container mt-2\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-7 text-center\">
            <p class=\"text-center display-5\">Kullanıcı Paneli</p>
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
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile");
        echo "\" class=\"btn btn-dark\"><i class=\"fas fa-home\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("profile_settings");
        echo "\" class=\"btn btn-dark\">Profil Ayarları <i class=\"fas fa-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_stat");
        echo "\" class=\"btn btn-dark\">İstatisliklerin <i class=\"fas fa-cog\"></i></a>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/inc/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  70 => 20,  64 => 17,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mt-2\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-7 text-center\">
            <p class=\"text-center display-5\">Kullanıcı Paneli</p>
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
            <a href=\"{{ url('profile') }}\" class=\"btn btn-dark\"><i class=\"fas fa-home\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"{{ url('profile_settings') }}\" class=\"btn btn-dark\">Profil Ayarları <i class=\"fas fa-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-5\">
            <a href=\"{{ url('user_stat') }}\" class=\"btn btn-dark\">İstatisliklerin <i class=\"fas fa-cog\"></i></a>
        </div>
    </div>
</div>", "user/inc/header.html.twig", "C:\\xampp\\htdocs\\short-url-ibrahimtuksal\\templates\\user\\inc\\header.html.twig");
    }
}
