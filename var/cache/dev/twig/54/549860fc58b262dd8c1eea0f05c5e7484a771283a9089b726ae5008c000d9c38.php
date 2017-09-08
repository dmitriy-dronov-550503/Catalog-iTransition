<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7b38ad1b040b8f1309ffb4b678baa9101d2e2e9d8622a98732bd0e125b442a29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95aba66b43f5d75d600481b04be20633b3dd439409e951c4f58b178b9ff47a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95aba66b43f5d75d600481b04be20633b3dd439409e951c4f58b178b9ff47a6f->enter($__internal_95aba66b43f5d75d600481b04be20633b3dd439409e951c4f58b178b9ff47a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_884508800ef7fcdedd811717f3497d158eb597856dbb37ab598575bb16fcd898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884508800ef7fcdedd811717f3497d158eb597856dbb37ab598575bb16fcd898->enter($__internal_884508800ef7fcdedd811717f3497d158eb597856dbb37ab598575bb16fcd898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95aba66b43f5d75d600481b04be20633b3dd439409e951c4f58b178b9ff47a6f->leave($__internal_95aba66b43f5d75d600481b04be20633b3dd439409e951c4f58b178b9ff47a6f_prof);

        
        $__internal_884508800ef7fcdedd811717f3497d158eb597856dbb37ab598575bb16fcd898->leave($__internal_884508800ef7fcdedd811717f3497d158eb597856dbb37ab598575bb16fcd898_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20830b4e52638676e0e559eda864b20fc460d711092d6f6a191b716201a49d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20830b4e52638676e0e559eda864b20fc460d711092d6f6a191b716201a49d4e->enter($__internal_20830b4e52638676e0e559eda864b20fc460d711092d6f6a191b716201a49d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e9f578eb4582f2c8ed382c4e3b1e27090758b79a784ceb709e8beddf7cbf161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9f578eb4582f2c8ed382c4e3b1e27090758b79a784ceb709e8beddf7cbf161->enter($__internal_2e9f578eb4582f2c8ed382c4e3b1e27090758b79a784ceb709e8beddf7cbf161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2e9f578eb4582f2c8ed382c4e3b1e27090758b79a784ceb709e8beddf7cbf161->leave($__internal_2e9f578eb4582f2c8ed382c4e3b1e27090758b79a784ceb709e8beddf7cbf161_prof);

        
        $__internal_20830b4e52638676e0e559eda864b20fc460d711092d6f6a191b716201a49d4e->leave($__internal_20830b4e52638676e0e559eda864b20fc460d711092d6f6a191b716201a49d4e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/mac/PhpstormProjects/task3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
