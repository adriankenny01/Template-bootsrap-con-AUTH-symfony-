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

/* user/new.html.twig */
class __TwigTemplate_fb2cd43004546b0dca72181d84eb7fccf4e6aa653e5e01ece7d29ee29086d349 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent = $this->loadTemplate("base.empty.html.twig", "user/new.html.twig", 1);
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

        echo " Nuevo Usuario ";
        
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

        echo " 
  
    ";
        // line 10
        echo "
     <div class=\"card o-hidden border-0 shadow-lg my-5\">
        <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
                <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                            <h1 class=\"h4 text-gray-900 mb-4\">Create an Account!</h1>
                        </div>

                        ";
        // line 23
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "user"]]);
        echo "
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", []), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "First Name"]]);
        echo "
                                </div>
                                <div class=\"col-sm-6\">
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "last_name", []), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Last Name"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", []), 'row', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Email Address"]]);
        echo "
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", []), 'row', ["attr" => ["class" => "form-control-user form-control", "placeholder" => "Password"]]);
        echo "
                                </div>
                                <div class=\"col-sm-6\">
                                    <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleRepeatPassword\" placeholder=\"Repeat Password\">
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                Register Account
                            </button>
                            <hr>
                            <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                <i class=\"fab fa-google fa-fw\"></i> Register with Google
                            </a>
                            <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                <i class=\"fab fa-facebook-f fa-fw\"></i> Register with Facebook
                            </a>
                        ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
                        <hr>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                        </div>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  147 => 53,  128 => 37,  121 => 33,  114 => 29,  108 => 26,  101 => 23,  87 => 10,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.empty.html.twig' %}

{% block title %} Nuevo Usuario {% endblock %}

{% block body %} 
  
    {# {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }} #}

     <div class=\"card o-hidden border-0 shadow-lg my-5\">
        <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
                <div class=\"col-lg-5 d-none d-lg-block bg-register-image\"></div>
                    <div class=\"col-lg-7\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                            <h1 class=\"h4 text-gray-900 mb-4\">Create an Account!</h1>
                        </div>

                        {# <form class=\"user\"> #}
                        {{ form_start(form, { 'attr': {'class': 'user'} }) }}
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    {{ form_row(form.name, { 'attr': {'class': 'form-control form-control-user', 'placeholder': 'First Name'} }) }}
                                </div>
                                <div class=\"col-sm-6\">
                                    {{ form_row(form.last_name, { 'attr': {'class': 'form-control form-control-user', 'placeholder': 'Last Name'} }) }}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.email, { 'attr': {'class': 'form-control form-control-user', 'placeholder': 'Email Address'} }) }}
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    {{ form_row(form.password, { 'attr': {'class': 'form-control-user form-control', 'placeholder': 'Password'} }) }}
                                </div>
                                <div class=\"col-sm-6\">
                                    <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleRepeatPassword\" placeholder=\"Repeat Password\">
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                Register Account
                            </button>
                            <hr>
                            <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                                <i class=\"fab fa-google fa-fw\"></i> Register with Google
                            </a>
                            <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                                <i class=\"fab fa-facebook-f fa-fw\"></i> Register with Facebook
                            </a>
                        {{ form_end(form) }}
                        <hr>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                        </div>
                        <div class=\"text-center\">
                            <a class=\"small\" href=\"{{ path('login') }}\">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
{% endblock %} ", "user/new.html.twig", "/srv/http/symfony/adminTEP/templates/user/new.html.twig");
    }
}
