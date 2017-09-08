<?php

/* registration/success.html.twig */
class __TwigTemplate_1281796873403785808fdebd52f48279452ce89139b770c43a9f75e92308aa38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/success.html.twig", 1);
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
        $__internal_2e02ee22fbf7bc580793615d1a75c7756ec7adb714b78687f1948847802be77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e02ee22fbf7bc580793615d1a75c7756ec7adb714b78687f1948847802be77d->enter($__internal_2e02ee22fbf7bc580793615d1a75c7756ec7adb714b78687f1948847802be77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/success.html.twig"));

        $__internal_dcc99edff660c6f5d00545d4695ef3696e9721c2543d6f36a9f41f5ba4d6f77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc99edff660c6f5d00545d4695ef3696e9721c2543d6f36a9f41f5ba4d6f77f->enter($__internal_dcc99edff660c6f5d00545d4695ef3696e9721c2543d6f36a9f41f5ba4d6f77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e02ee22fbf7bc580793615d1a75c7756ec7adb714b78687f1948847802be77d->leave($__internal_2e02ee22fbf7bc580793615d1a75c7756ec7adb714b78687f1948847802be77d_prof);

        
        $__internal_dcc99edff660c6f5d00545d4695ef3696e9721c2543d6f36a9f41f5ba4d6f77f->leave($__internal_dcc99edff660c6f5d00545d4695ef3696e9721c2543d6f36a9f41f5ba4d6f77f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea57506dc0c24b739466a3bc7eb57d98ac7cfbfa80e6cef8b62a7796af90fab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea57506dc0c24b739466a3bc7eb57d98ac7cfbfa80e6cef8b62a7796af90fab2->enter($__internal_ea57506dc0c24b739466a3bc7eb57d98ac7cfbfa80e6cef8b62a7796af90fab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b69c8b34a48511f8a421e737620ccece8f33f4b5d8554bea854a21afd284bf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69c8b34a48511f8a421e737620ccece8f33f4b5d8554bea854a21afd284bf45->enter($__internal_b69c8b34a48511f8a421e737620ccece8f33f4b5d8554bea854a21afd284bf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center my-3\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        <h4 class=\"alert-heading\">Well done!</h4>
                        <p>Congrulations! You were registered! Now you can delete or block someone of users.</p>
                        <hr>
                        <p class=\"mb-0\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Login now</a> and go to 'Users list'.</p>
                    </div>
        </div>
    </div>
";
        
        $__internal_b69c8b34a48511f8a421e737620ccece8f33f4b5d8554bea854a21afd284bf45->leave($__internal_b69c8b34a48511f8a421e737620ccece8f33f4b5d8554bea854a21afd284bf45_prof);

        
        $__internal_ea57506dc0c24b739466a3bc7eb57d98ac7cfbfa80e6cef8b62a7796af90fab2->leave($__internal_ea57506dc0c24b739466a3bc7eb57d98ac7cfbfa80e6cef8b62a7796af90fab2_prof);

    }

    public function getTemplateName()
    {
        return "registration/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"row justify-content-center my-3\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        <h4 class=\"alert-heading\">Well done!</h4>
                        <p>Congrulations! You were registered! Now you can delete or block someone of users.</p>
                        <hr>
                        <p class=\"mb-0\"><a href=\"{{ path('login') }}\">Login now</a> and go to 'Users list'.</p>
                    </div>
        </div>
    </div>
{% endblock %}", "registration/success.html.twig", "/Users/mac/PhpstormProjects/task3/app/Resources/views/registration/success.html.twig");
    }
}
