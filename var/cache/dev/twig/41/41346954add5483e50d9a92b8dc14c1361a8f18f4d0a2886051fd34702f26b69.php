<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a68e19a826a0d15667c4b601776ad6187ba904a6294516ed1c2e489c560eec0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8078328769e44f5fb0f11c6316c28bd16551ea7125f83dcaa754dd55c99072e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8078328769e44f5fb0f11c6316c28bd16551ea7125f83dcaa754dd55c99072e0->enter($__internal_8078328769e44f5fb0f11c6316c28bd16551ea7125f83dcaa754dd55c99072e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1d20990eb50f1a85c5ee63e1b4ef19b418cd52389c81e2fbc7ced92194634878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d20990eb50f1a85c5ee63e1b4ef19b418cd52389c81e2fbc7ced92194634878->enter($__internal_1d20990eb50f1a85c5ee63e1b4ef19b418cd52389c81e2fbc7ced92194634878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8078328769e44f5fb0f11c6316c28bd16551ea7125f83dcaa754dd55c99072e0->leave($__internal_8078328769e44f5fb0f11c6316c28bd16551ea7125f83dcaa754dd55c99072e0_prof);

        
        $__internal_1d20990eb50f1a85c5ee63e1b4ef19b418cd52389c81e2fbc7ced92194634878->leave($__internal_1d20990eb50f1a85c5ee63e1b4ef19b418cd52389c81e2fbc7ced92194634878_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ba810f6272f2d34979029b65d37baf8077bed96750eda9209e64271f1734d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba810f6272f2d34979029b65d37baf8077bed96750eda9209e64271f1734d3e->enter($__internal_6ba810f6272f2d34979029b65d37baf8077bed96750eda9209e64271f1734d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76480dd693c0e6b021545caab39fdbd1dee43521eb2f969229f44c34f0212f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76480dd693c0e6b021545caab39fdbd1dee43521eb2f969229f44c34f0212f8c->enter($__internal_76480dd693c0e6b021545caab39fdbd1dee43521eb2f969229f44c34f0212f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_76480dd693c0e6b021545caab39fdbd1dee43521eb2f969229f44c34f0212f8c->leave($__internal_76480dd693c0e6b021545caab39fdbd1dee43521eb2f969229f44c34f0212f8c_prof);

        
        $__internal_6ba810f6272f2d34979029b65d37baf8077bed96750eda9209e64271f1734d3e->leave($__internal_6ba810f6272f2d34979029b65d37baf8077bed96750eda9209e64271f1734d3e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_88f437b47b04a1cd4800e14e8f028142c965ba7a052657c21fbd9c7ae77ab764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f437b47b04a1cd4800e14e8f028142c965ba7a052657c21fbd9c7ae77ab764->enter($__internal_88f437b47b04a1cd4800e14e8f028142c965ba7a052657c21fbd9c7ae77ab764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cbbc3b19387a0f361cd86ad7eefc2448019ce6c1aad7e29997b7e305c98498e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbc3b19387a0f361cd86ad7eefc2448019ce6c1aad7e29997b7e305c98498e6->enter($__internal_cbbc3b19387a0f361cd86ad7eefc2448019ce6c1aad7e29997b7e305c98498e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cbbc3b19387a0f361cd86ad7eefc2448019ce6c1aad7e29997b7e305c98498e6->leave($__internal_cbbc3b19387a0f361cd86ad7eefc2448019ce6c1aad7e29997b7e305c98498e6_prof);

        
        $__internal_88f437b47b04a1cd4800e14e8f028142c965ba7a052657c21fbd9c7ae77ab764->leave($__internal_88f437b47b04a1cd4800e14e8f028142c965ba7a052657c21fbd9c7ae77ab764_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_458067db84c9e78fd3e9e65d924daf993a8b023a0a4b5b5e4ac1bae2e6bae442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458067db84c9e78fd3e9e65d924daf993a8b023a0a4b5b5e4ac1bae2e6bae442->enter($__internal_458067db84c9e78fd3e9e65d924daf993a8b023a0a4b5b5e4ac1bae2e6bae442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffd725d31cbd66f53626474676cef2b87ad9a4f421591a828b06c68613ef458b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd725d31cbd66f53626474676cef2b87ad9a4f421591a828b06c68613ef458b->enter($__internal_ffd725d31cbd66f53626474676cef2b87ad9a4f421591a828b06c68613ef458b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ffd725d31cbd66f53626474676cef2b87ad9a4f421591a828b06c68613ef458b->leave($__internal_ffd725d31cbd66f53626474676cef2b87ad9a4f421591a828b06c68613ef458b_prof);

        
        $__internal_458067db84c9e78fd3e9e65d924daf993a8b023a0a4b5b5e4ac1bae2e6bae442->leave($__internal_458067db84c9e78fd3e9e65d924daf993a8b023a0a4b5b5e4ac1bae2e6bae442_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/mac/PhpstormProjects/task3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
