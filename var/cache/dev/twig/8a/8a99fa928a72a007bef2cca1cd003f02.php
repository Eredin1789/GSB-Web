<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/login.html.twig */
class __TwigTemplate_83c79fa00b282f0dab72653087ec01d1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseLogIn.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $this->parent = $this->loadTemplate("baseLogIn.html.twig", "home/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Page de connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <div class=\"container d-flex justify-content-center align-items-center vh-100\">
        <div class=\"card p-4 shadow\" style=\"width: 400px;\">
            <h2 class=\"text-center mb-4\">Connexion</h2>
            <form action=\"/login\" method=\"POST\">
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\">Adresse e-mail</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"password\" class=\"form-label\">Mot de passe</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required>
                </div>
                <div class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                </div>
                <div class=\"text-center mt-3\">
                    <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create");
        yield "\">Créer un compte</a>
                </div>
            </form>
        </div>
    </div>

    <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-primary\">Retour à l'accueil</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  128 => 29,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseLogIn.html.twig' %}

{% block title %}Page de connexion{% endblock %}

{% block body %}

    <div class=\"container d-flex justify-content-center align-items-center vh-100\">
        <div class=\"card p-4 shadow\" style=\"width: 400px;\">
            <h2 class=\"text-center mb-4\">Connexion</h2>
            <form action=\"/login\" method=\"POST\">
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\">Adresse e-mail</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"password\" class=\"form-label\">Mot de passe</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required>
                </div>
                <div class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                </div>
                <div class=\"text-center mt-3\">
                    <a href=\"{{ path('app_create') }}\">Créer un compte</a>
                </div>
            </form>
        </div>
    </div>

    <a href=\"{{ path('app_home') }}\" class=\"btn btn-primary\">Retour à l'accueil</a>

{% endblock %}", "home/login.html.twig", "C:\\Users\\Tristan\\Desktop\\TPS BTS Semestre 3\\SLAM\\Appli Flutter TP03 Projet\\VSCode Projet\\GSB Force\\projetGSB\\templates\\home\\login.html.twig");
    }
}
