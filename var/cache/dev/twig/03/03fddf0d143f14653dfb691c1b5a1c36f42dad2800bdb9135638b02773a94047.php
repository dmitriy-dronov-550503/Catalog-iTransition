<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_db7008e2380d0ce50d5d9c56b1ff7f104a099380d98d8e6b14ee6d359bb8c361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f627aaf7a8c531923c4c02b606c451853b611785a2bb1254660e00a7ba3ed551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f627aaf7a8c531923c4c02b606c451853b611785a2bb1254660e00a7ba3ed551->enter($__internal_f627aaf7a8c531923c4c02b606c451853b611785a2bb1254660e00a7ba3ed551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3c1ba3f9a2e1f6268d4971702988f8d54ff8a252b49b64eb93d792e03e7c28f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1ba3f9a2e1f6268d4971702988f8d54ff8a252b49b64eb93d792e03e7c28f7->enter($__internal_3c1ba3f9a2e1f6268d4971702988f8d54ff8a252b49b64eb93d792e03e7c28f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f627aaf7a8c531923c4c02b606c451853b611785a2bb1254660e00a7ba3ed551->leave($__internal_f627aaf7a8c531923c4c02b606c451853b611785a2bb1254660e00a7ba3ed551_prof);

        
        $__internal_3c1ba3f9a2e1f6268d4971702988f8d54ff8a252b49b64eb93d792e03e7c28f7->leave($__internal_3c1ba3f9a2e1f6268d4971702988f8d54ff8a252b49b64eb93d792e03e7c28f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df59ea1ffc7e0a6f7fc88292646811475b32797b4a678339caf0e982dc8cd00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df59ea1ffc7e0a6f7fc88292646811475b32797b4a678339caf0e982dc8cd00d->enter($__internal_df59ea1ffc7e0a6f7fc88292646811475b32797b4a678339caf0e982dc8cd00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe5f153374205e8f2f666a493aff7ab6fbae1820bc7ede69d3cb34c186ed279b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5f153374205e8f2f666a493aff7ab6fbae1820bc7ede69d3cb34c186ed279b->enter($__internal_fe5f153374205e8f2f666a493aff7ab6fbae1820bc7ede69d3cb34c186ed279b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe5f153374205e8f2f666a493aff7ab6fbae1820bc7ede69d3cb34c186ed279b->leave($__internal_fe5f153374205e8f2f666a493aff7ab6fbae1820bc7ede69d3cb34c186ed279b_prof);

        
        $__internal_df59ea1ffc7e0a6f7fc88292646811475b32797b4a678339caf0e982dc8cd00d->leave($__internal_df59ea1ffc7e0a6f7fc88292646811475b32797b4a678339caf0e982dc8cd00d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60feaf0a91f1f0e1b36b925ce5c9216512089e3ec492b5dba6717eef5394f211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60feaf0a91f1f0e1b36b925ce5c9216512089e3ec492b5dba6717eef5394f211->enter($__internal_60feaf0a91f1f0e1b36b925ce5c9216512089e3ec492b5dba6717eef5394f211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4516f8b4c0e087bd02656b0d3cacc8cf31421757817214704c34acdb971cf5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4516f8b4c0e087bd02656b0d3cacc8cf31421757817214704c34acdb971cf5d7->enter($__internal_4516f8b4c0e087bd02656b0d3cacc8cf31421757817214704c34acdb971cf5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4516f8b4c0e087bd02656b0d3cacc8cf31421757817214704c34acdb971cf5d7->leave($__internal_4516f8b4c0e087bd02656b0d3cacc8cf31421757817214704c34acdb971cf5d7_prof);

        
        $__internal_60feaf0a91f1f0e1b36b925ce5c9216512089e3ec492b5dba6717eef5394f211->leave($__internal_60feaf0a91f1f0e1b36b925ce5c9216512089e3ec492b5dba6717eef5394f211_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca38c6932b43029c1289f601b1d189dd1f61874597ea4779006187d67fd370ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca38c6932b43029c1289f601b1d189dd1f61874597ea4779006187d67fd370ff->enter($__internal_ca38c6932b43029c1289f601b1d189dd1f61874597ea4779006187d67fd370ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ce212817a684e4d71391a963727814cafd2533ad61b02032cc76967febe0f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce212817a684e4d71391a963727814cafd2533ad61b02032cc76967febe0f66->enter($__internal_1ce212817a684e4d71391a963727814cafd2533ad61b02032cc76967febe0f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ce212817a684e4d71391a963727814cafd2533ad61b02032cc76967febe0f66->leave($__internal_1ce212817a684e4d71391a963727814cafd2533ad61b02032cc76967febe0f66_prof);

        
        $__internal_ca38c6932b43029c1289f601b1d189dd1f61874597ea4779006187d67fd370ff->leave($__internal_ca38c6932b43029c1289f601b1d189dd1f61874597ea4779006187d67fd370ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/mac/PhpstormProjects/task3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
