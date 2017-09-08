<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c6436a3f67dfb7e1f4e9c7a6f01dea3471665d55462a82a45b028e1427a75339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f040e0787dbe054e056b82ff8c6139ce30080e67718fdd8fe8fa6831c7c0ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f040e0787dbe054e056b82ff8c6139ce30080e67718fdd8fe8fa6831c7c0ac5->enter($__internal_5f040e0787dbe054e056b82ff8c6139ce30080e67718fdd8fe8fa6831c7c0ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_077ee9e78a2e4b6f7bcca858d8e00dca9df1380181961299135eb08c3b6bee03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077ee9e78a2e4b6f7bcca858d8e00dca9df1380181961299135eb08c3b6bee03->enter($__internal_077ee9e78a2e4b6f7bcca858d8e00dca9df1380181961299135eb08c3b6bee03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f040e0787dbe054e056b82ff8c6139ce30080e67718fdd8fe8fa6831c7c0ac5->leave($__internal_5f040e0787dbe054e056b82ff8c6139ce30080e67718fdd8fe8fa6831c7c0ac5_prof);

        
        $__internal_077ee9e78a2e4b6f7bcca858d8e00dca9df1380181961299135eb08c3b6bee03->leave($__internal_077ee9e78a2e4b6f7bcca858d8e00dca9df1380181961299135eb08c3b6bee03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4da41591ffedf39592ccb72f791cfd904edc95f52bffb02a7c4bb5f6ef262507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da41591ffedf39592ccb72f791cfd904edc95f52bffb02a7c4bb5f6ef262507->enter($__internal_4da41591ffedf39592ccb72f791cfd904edc95f52bffb02a7c4bb5f6ef262507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ee5c348308c1716ca4c0be4090287e4137e94c61bda15dd846d6cd1c9e7124d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee5c348308c1716ca4c0be4090287e4137e94c61bda15dd846d6cd1c9e7124d->enter($__internal_9ee5c348308c1716ca4c0be4090287e4137e94c61bda15dd846d6cd1c9e7124d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9ee5c348308c1716ca4c0be4090287e4137e94c61bda15dd846d6cd1c9e7124d->leave($__internal_9ee5c348308c1716ca4c0be4090287e4137e94c61bda15dd846d6cd1c9e7124d_prof);

        
        $__internal_4da41591ffedf39592ccb72f791cfd904edc95f52bffb02a7c4bb5f6ef262507->leave($__internal_4da41591ffedf39592ccb72f791cfd904edc95f52bffb02a7c4bb5f6ef262507_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d35dd048f95737f49c4c4c8b6d240a84e69aff375cbab38b9745037291d8f327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35dd048f95737f49c4c4c8b6d240a84e69aff375cbab38b9745037291d8f327->enter($__internal_d35dd048f95737f49c4c4c8b6d240a84e69aff375cbab38b9745037291d8f327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_096f21e5cc823e6ff627cd3e55df1666c8968c2163ac51436348c9fd8e67e200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096f21e5cc823e6ff627cd3e55df1666c8968c2163ac51436348c9fd8e67e200->enter($__internal_096f21e5cc823e6ff627cd3e55df1666c8968c2163ac51436348c9fd8e67e200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_096f21e5cc823e6ff627cd3e55df1666c8968c2163ac51436348c9fd8e67e200->leave($__internal_096f21e5cc823e6ff627cd3e55df1666c8968c2163ac51436348c9fd8e67e200_prof);

        
        $__internal_d35dd048f95737f49c4c4c8b6d240a84e69aff375cbab38b9745037291d8f327->leave($__internal_d35dd048f95737f49c4c4c8b6d240a84e69aff375cbab38b9745037291d8f327_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf50321db59483ddc93e118c3b1d0d64d484f31f3a74119e0b6318a31e89c80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf50321db59483ddc93e118c3b1d0d64d484f31f3a74119e0b6318a31e89c80e->enter($__internal_bf50321db59483ddc93e118c3b1d0d64d484f31f3a74119e0b6318a31e89c80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e964336ff87f80bc0c8e228bda05d2ec089e82bec44d0e8bdd85ad5107f7b586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e964336ff87f80bc0c8e228bda05d2ec089e82bec44d0e8bdd85ad5107f7b586->enter($__internal_e964336ff87f80bc0c8e228bda05d2ec089e82bec44d0e8bdd85ad5107f7b586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e964336ff87f80bc0c8e228bda05d2ec089e82bec44d0e8bdd85ad5107f7b586->leave($__internal_e964336ff87f80bc0c8e228bda05d2ec089e82bec44d0e8bdd85ad5107f7b586_prof);

        
        $__internal_bf50321db59483ddc93e118c3b1d0d64d484f31f3a74119e0b6318a31e89c80e->leave($__internal_bf50321db59483ddc93e118c3b1d0d64d484f31f3a74119e0b6318a31e89c80e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/mac/PhpstormProjects/task3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
