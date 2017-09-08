<?php

/* security/login.html.twig */
class __TwigTemplate_d2c09219c79d2e773fc69d65d404789057f60fc20ad48591d5b6d5e2a45e2540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_9ea7e66c81ae35266199485d9f4f69835d455b4f22a1885e603e9ab4a6e587f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea7e66c81ae35266199485d9f4f69835d455b4f22a1885e603e9ab4a6e587f2->enter($__internal_9ea7e66c81ae35266199485d9f4f69835d455b4f22a1885e603e9ab4a6e587f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_655436fcfa0a773fdb6744b43252170fdf8adca75c529cd64a0bfc3062b66c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655436fcfa0a773fdb6744b43252170fdf8adca75c529cd64a0bfc3062b66c53->enter($__internal_655436fcfa0a773fdb6744b43252170fdf8adca75c529cd64a0bfc3062b66c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea7e66c81ae35266199485d9f4f69835d455b4f22a1885e603e9ab4a6e587f2->leave($__internal_9ea7e66c81ae35266199485d9f4f69835d455b4f22a1885e603e9ab4a6e587f2_prof);

        
        $__internal_655436fcfa0a773fdb6744b43252170fdf8adca75c529cd64a0bfc3062b66c53->leave($__internal_655436fcfa0a773fdb6744b43252170fdf8adca75c529cd64a0bfc3062b66c53_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_02de3be8ebcfdfb4cd37ec2e400402caa490e790d143e9cddcb10d73ba76403e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02de3be8ebcfdfb4cd37ec2e400402caa490e790d143e9cddcb10d73ba76403e->enter($__internal_02de3be8ebcfdfb4cd37ec2e400402caa490e790d143e9cddcb10d73ba76403e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5e7efdb595521e8c464c787d25b9354cac66456e73c06e929d232b82653822c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e7efdb595521e8c464c787d25b9354cac66456e73c06e929d232b82653822c->enter($__internal_a5e7efdb595521e8c464c787d25b9354cac66456e73c06e929d232b82653822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"card my-3 p-3\">
            <div class=\"card-body\">

            <div class=\"row justify-content-center m-2\">
                <div class=\"col-auto\">
                    <script src=\"//ulogin.ru/js/ulogin.js\"></script>
                    <div id=\"uLogin\" data-ulogin=\"display=panel;theme=flat;fields=nickname,email;providers=vkontakte,facebook,twitter;hidden=;redirect_uri=http://localhost:8000/login/oauth;mobilebuttons=0;\"></div>
                </div>
            </div>
                <div class=\"flex-row justify-content-center\">
                        ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "                            <div class=\"alert alert-warning\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 20
        echo "                    </div>

                    <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                        <div class=\"form-group row justify-content-between\">
                            <label class=\"col-auto\">Username:</label>
                            <div class=\"col-auto\">
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Enter username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-between\">
                            <label class=\"col-auto\">Password:</label>
                            <div class=\"col-auto\">
                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\">
                            </div>
                        </div>
                        <div class=\"clearfix\">
                            <button type=\"button submit\" class=\"btn btn-success btn-block float-right\">GO</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_a5e7efdb595521e8c464c787d25b9354cac66456e73c06e929d232b82653822c->leave($__internal_a5e7efdb595521e8c464c787d25b9354cac66456e73c06e929d232b82653822c_prof);

        
        $__internal_02de3be8ebcfdfb4cd37ec2e400402caa490e790d143e9cddcb10d73ba76403e->leave($__internal_02de3be8ebcfdfb4cd37ec2e400402caa490e790d143e9cddcb10d73ba76403e_prof);

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
        return array (  82 => 26,  75 => 22,  71 => 20,  65 => 18,  63 => 17,  49 => 5,  40 => 4,  11 => 1,);
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
    <div class=\"row justify-content-center\">
        <div class=\"card my-3 p-3\">
            <div class=\"card-body\">

            <div class=\"row justify-content-center m-2\">
                <div class=\"col-auto\">
                    <script src=\"//ulogin.ru/js/ulogin.js\"></script>
                    <div id=\"uLogin\" data-ulogin=\"display=panel;theme=flat;fields=nickname,email;providers=vkontakte,facebook,twitter;hidden=;redirect_uri=http://localhost:8000/login/oauth;mobilebuttons=0;\"></div>
                </div>
            </div>
                <div class=\"flex-row justify-content-center\">
                        {% if error %}
                            <div class=\"alert alert-warning\" role=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}
                    </div>

                    <form action=\"{{ path('login') }}\" method=\"post\">
                        <div class=\"form-group row justify-content-between\">
                            <label class=\"col-auto\">Username:</label>
                            <div class=\"col-auto\">
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Enter username\" value=\"{{ last_username }}\" />
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-between\">
                            <label class=\"col-auto\">Password:</label>
                            <div class=\"col-auto\">
                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\">
                            </div>
                        </div>
                        <div class=\"clearfix\">
                            <button type=\"button submit\" class=\"btn btn-success btn-block float-right\">GO</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "security/login.html.twig", "/Users/mac/PhpstormProjects/task3/app/Resources/views/security/login.html.twig");
    }
}
