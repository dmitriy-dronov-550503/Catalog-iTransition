<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1982d84550113832655d162c6de14a91b34f7355ec99f23d78f08c9ea6e069e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b100484589e9e267ff601bdd1a4fbad8a3f0ccdc7868e357de913720daf3183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b100484589e9e267ff601bdd1a4fbad8a3f0ccdc7868e357de913720daf3183->enter($__internal_3b100484589e9e267ff601bdd1a4fbad8a3f0ccdc7868e357de913720daf3183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cfd51c40316b7b37cb6159f42959e1374a443db0af071e19b63091fd0c257f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd51c40316b7b37cb6159f42959e1374a443db0af071e19b63091fd0c257f85->enter($__internal_cfd51c40316b7b37cb6159f42959e1374a443db0af071e19b63091fd0c257f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b100484589e9e267ff601bdd1a4fbad8a3f0ccdc7868e357de913720daf3183->leave($__internal_3b100484589e9e267ff601bdd1a4fbad8a3f0ccdc7868e357de913720daf3183_prof);

        
        $__internal_cfd51c40316b7b37cb6159f42959e1374a443db0af071e19b63091fd0c257f85->leave($__internal_cfd51c40316b7b37cb6159f42959e1374a443db0af071e19b63091fd0c257f85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_785ebb1c79d92992e090ad562cedc9f92e86672aa9f584ce8ab1ee789476439c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785ebb1c79d92992e090ad562cedc9f92e86672aa9f584ce8ab1ee789476439c->enter($__internal_785ebb1c79d92992e090ad562cedc9f92e86672aa9f584ce8ab1ee789476439c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f82cab27b5314ed773f1eb3a63102ff2fe696cefbf3a775988b8e602cd6e441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f82cab27b5314ed773f1eb3a63102ff2fe696cefbf3a775988b8e602cd6e441->enter($__internal_4f82cab27b5314ed773f1eb3a63102ff2fe696cefbf3a775988b8e602cd6e441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4f82cab27b5314ed773f1eb3a63102ff2fe696cefbf3a775988b8e602cd6e441->leave($__internal_4f82cab27b5314ed773f1eb3a63102ff2fe696cefbf3a775988b8e602cd6e441_prof);

        
        $__internal_785ebb1c79d92992e090ad562cedc9f92e86672aa9f584ce8ab1ee789476439c->leave($__internal_785ebb1c79d92992e090ad562cedc9f92e86672aa9f584ce8ab1ee789476439c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c5b234d6fc0a298d06bf1d98e914d051d22c8116093b94b3fa0e665fe91b085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5b234d6fc0a298d06bf1d98e914d051d22c8116093b94b3fa0e665fe91b085->enter($__internal_9c5b234d6fc0a298d06bf1d98e914d051d22c8116093b94b3fa0e665fe91b085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aba9c49c9b8ada34fd0de3e5550de9714cc8136a2f95952e709ecd7b0432e3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba9c49c9b8ada34fd0de3e5550de9714cc8136a2f95952e709ecd7b0432e3c1->enter($__internal_aba9c49c9b8ada34fd0de3e5550de9714cc8136a2f95952e709ecd7b0432e3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aba9c49c9b8ada34fd0de3e5550de9714cc8136a2f95952e709ecd7b0432e3c1->leave($__internal_aba9c49c9b8ada34fd0de3e5550de9714cc8136a2f95952e709ecd7b0432e3c1_prof);

        
        $__internal_9c5b234d6fc0a298d06bf1d98e914d051d22c8116093b94b3fa0e665fe91b085->leave($__internal_9c5b234d6fc0a298d06bf1d98e914d051d22c8116093b94b3fa0e665fe91b085_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac19c23f6f1ba094aef50ffe52e049c02762b7ec315a2876b31d569908be60f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac19c23f6f1ba094aef50ffe52e049c02762b7ec315a2876b31d569908be60f1->enter($__internal_ac19c23f6f1ba094aef50ffe52e049c02762b7ec315a2876b31d569908be60f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_737e877f900a41358ebee4feb4bdfad10a428e8bacf246893c3991f6fe7dec8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737e877f900a41358ebee4feb4bdfad10a428e8bacf246893c3991f6fe7dec8f->enter($__internal_737e877f900a41358ebee4feb4bdfad10a428e8bacf246893c3991f6fe7dec8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_737e877f900a41358ebee4feb4bdfad10a428e8bacf246893c3991f6fe7dec8f->leave($__internal_737e877f900a41358ebee4feb4bdfad10a428e8bacf246893c3991f6fe7dec8f_prof);

        
        $__internal_ac19c23f6f1ba094aef50ffe52e049c02762b7ec315a2876b31d569908be60f1->leave($__internal_ac19c23f6f1ba094aef50ffe52e049c02762b7ec315a2876b31d569908be60f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/mac/PhpstormProjects/task3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
