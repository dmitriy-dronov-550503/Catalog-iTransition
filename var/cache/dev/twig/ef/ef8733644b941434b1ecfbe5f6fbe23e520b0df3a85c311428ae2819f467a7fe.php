<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cc36c01dc3261740184a8a39aa967e59e808039c3163ff97927426f7f719dcea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67b1531f352ae38892aeccb74d477e426a30512ad761d1b90c5b286be54daa86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b1531f352ae38892aeccb74d477e426a30512ad761d1b90c5b286be54daa86->enter($__internal_67b1531f352ae38892aeccb74d477e426a30512ad761d1b90c5b286be54daa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e347bc655eb286fca7a6eaac99af8a44fe51e2d0f0c0d5d82bee807cc1077278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e347bc655eb286fca7a6eaac99af8a44fe51e2d0f0c0d5d82bee807cc1077278->enter($__internal_e347bc655eb286fca7a6eaac99af8a44fe51e2d0f0c0d5d82bee807cc1077278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_67b1531f352ae38892aeccb74d477e426a30512ad761d1b90c5b286be54daa86->leave($__internal_67b1531f352ae38892aeccb74d477e426a30512ad761d1b90c5b286be54daa86_prof);

        
        $__internal_e347bc655eb286fca7a6eaac99af8a44fe51e2d0f0c0d5d82bee807cc1077278->leave($__internal_e347bc655eb286fca7a6eaac99af8a44fe51e2d0f0c0d5d82bee807cc1077278_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/mac/PhpstormProjects/task3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
