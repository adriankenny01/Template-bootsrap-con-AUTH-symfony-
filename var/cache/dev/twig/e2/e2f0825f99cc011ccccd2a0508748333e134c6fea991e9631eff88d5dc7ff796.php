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

/* security/login.html.twig */
class __TwigTemplate_13962cfa6134b79af9467cc4f748b928487b64d8e5c8ec0170ad7810a13ed36c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.empty.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.empty.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"text-center\">
        <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
    </div>
    <form class=\"user\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\">
        ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", []), "security"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 16
        echo "        <div class=\"form-group\">
            <input type=\"text\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control form-control-user\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Enter Email Address...\">
        </div>
        <div class=\"form-group\">
            <input type=\"password\" name=\"_password\"  class=\"form-control form-control-user\" id=\"exampleInputPassword\" placeholder=\"*******\">
        </div>
        <div class=\"form-group\">
            <div class=\"custom-control custom-checkbox small\">
                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                <label class=\"custom-control-label\" for=\"customCheck\">Remember Me</label>
            </div>
        </div>
        <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
            Login
        </button>
        <hr>
        <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
            <i class=\"fab fa-google fa-fw\"></i> Login with Google
        </a>
        <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
            <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook
        </a>
    </form>
    <hr>
    <div class=\"text-center\">
        <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
    </div>
    <div class=\"text-center\">
        <a class=\"small\" href=\"register.html\">Create an Account!</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 17,  105 => 16,  99 => 13,  96 => 12,  94 => 11,  90 => 10,  84 => 6,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.empty.html.twig' %}

{% block title %}Login!{% endblock %}

{% block body %}

    <div class=\"text-center\">
        <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
    </div>
    <form class=\"user\" action=\"{{ path('login') }}\" method=\"POST\">
        {% if error %}
            <div class=\"alert alert-danger\" role=\"alert\">
                {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}
        <div class=\"form-group\">
            <input type=\"text\" name=\"_username\" value=\"{{ last_username}}\" class=\"form-control form-control-user\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Enter Email Address...\">
        </div>
        <div class=\"form-group\">
            <input type=\"password\" name=\"_password\"  class=\"form-control form-control-user\" id=\"exampleInputPassword\" placeholder=\"*******\">
        </div>
        <div class=\"form-group\">
            <div class=\"custom-control custom-checkbox small\">
                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                <label class=\"custom-control-label\" for=\"customCheck\">Remember Me</label>
            </div>
        </div>
        <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
            Login
        </button>
        <hr>
        <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
            <i class=\"fab fa-google fa-fw\"></i> Login with Google
        </a>
        <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
            <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook
        </a>
    </form>
    <hr>
    <div class=\"text-center\">
        <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
    </div>
    <div class=\"text-center\">
        <a class=\"small\" href=\"register.html\">Create an Account!</a>
    </div>

{% endblock %}
", "security/login.html.twig", "/srv/http/symfony/adminTEP/templates/security/login.html.twig");
    }
}
