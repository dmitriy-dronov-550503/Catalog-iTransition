<?php

/* default/index.html.twig */
class __TwigTemplate_23fb3067fbbc18511e3e837a1b687ae81c5dcb08d7a13a9cbef9ab3272941c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc6775b270a19e4bd380dddcfb67d18b780d005f356877fbddf55b0c88e62589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6775b270a19e4bd380dddcfb67d18b780d005f356877fbddf55b0c88e62589->enter($__internal_bc6775b270a19e4bd380dddcfb67d18b780d005f356877fbddf55b0c88e62589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_87e7aaff28e59a1c0e455ca663a00339baee359ce224430e51e2ea3e9f92b0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e7aaff28e59a1c0e455ca663a00339baee359ce224430e51e2ea3e9f92b0ab->enter($__internal_87e7aaff28e59a1c0e455ca663a00339baee359ce224430e51e2ea3e9f92b0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6775b270a19e4bd380dddcfb67d18b780d005f356877fbddf55b0c88e62589->leave($__internal_bc6775b270a19e4bd380dddcfb67d18b780d005f356877fbddf55b0c88e62589_prof);

        
        $__internal_87e7aaff28e59a1c0e455ca663a00339baee359ce224430e51e2ea3e9f92b0ab->leave($__internal_87e7aaff28e59a1c0e455ca663a00339baee359ce224430e51e2ea3e9f92b0ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44af6b5803d0f0c819cdfe602e01e482b93242fb7cc13e390d979dbd1f0445dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44af6b5803d0f0c819cdfe602e01e482b93242fb7cc13e390d979dbd1f0445dd->enter($__internal_44af6b5803d0f0c819cdfe602e01e482b93242fb7cc13e390d979dbd1f0445dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b158c1846c76f3b47c74479fd32c9e4fd7b1b83457e528dca28cba470c63f6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b158c1846c76f3b47c74479fd32c9e4fd7b1b83457e528dca28cba470c63f6c7->enter($__internal_b158c1846c76f3b47c74479fd32c9e4fd7b1b83457e528dca28cba470c63f6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1 class=\"display-3\">I'am admin!</h1>
            <p class=\"lead\">Have you ever wanted to be an administrator? Now you can! Here each registered user can block or delete another.</p>
            <hr class=\"my-4\">
            <p>Let's begin!</p>
            <p class=\"lead\">
                ";
        // line 11
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 12
            echo "                    <a class=\"btn btn-success btn-lg\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_list");
            echo "\" role=\"button\">Users list</a>
                ";
        } else {
            // line 14
            echo "                    <a class=\"btn btn-success btn-lg\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration");
            echo "\" role=\"button\">Register</a>
                ";
        }
        // line 16
        echo "            </p>
        </div>
    </div>
";
        
        $__internal_b158c1846c76f3b47c74479fd32c9e4fd7b1b83457e528dca28cba470c63f6c7->leave($__internal_b158c1846c76f3b47c74479fd32c9e4fd7b1b83457e528dca28cba470c63f6c7_prof);

        
        $__internal_44af6b5803d0f0c819cdfe602e01e482b93242fb7cc13e390d979dbd1f0445dd->leave($__internal_44af6b5803d0f0c819cdfe602e01e482b93242fb7cc13e390d979dbd1f0445dd_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  66 => 14,  60 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1 class=\"display-3\">I'am admin!</h1>
            <p class=\"lead\">Have you ever wanted to be an administrator? Now you can! Here each registered user can block or delete another.</p>
            <hr class=\"my-4\">
            <p>Let's begin!</p>
            <p class=\"lead\">
                {% if app.user %}
                    <a class=\"btn btn-success btn-lg\" href=\"{{ path('users_list') }}\" role=\"button\">Users list</a>
                {% else %}
                    <a class=\"btn btn-success btn-lg\" href=\"{{ path('user_registration') }}\" role=\"button\">Register</a>
                {% endif %}
            </p>
        </div>
    </div>
{% endblock %}
", "default/index.html.twig", "/Users/mac/PhpstormProjects/task3/app/Resources/views/default/index.html.twig");
    }
}
