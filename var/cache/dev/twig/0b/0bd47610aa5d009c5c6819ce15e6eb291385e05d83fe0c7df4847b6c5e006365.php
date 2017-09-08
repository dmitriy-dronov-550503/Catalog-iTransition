<?php

/* base.html.twig */
class __TwigTemplate_bdd9533aa67d3530f1017f001cd89c54965bfb2377b8e815fd19693ede96bd01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7086321df87bae9baa7ef243da117e3ea747d0fe5e27757616a9e51e849a7661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7086321df87bae9baa7ef243da117e3ea747d0fe5e27757616a9e51e849a7661->enter($__internal_7086321df87bae9baa7ef243da117e3ea747d0fe5e27757616a9e51e849a7661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_60256081006d1e8e0577e5cda587b98f3ad6361cbf56e32d025351cdbb6f8483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60256081006d1e8e0577e5cda587b98f3ad6361cbf56e32d025351cdbb6f8483->enter($__internal_60256081006d1e8e0577e5cda587b98f3ad6361cbf56e32d025351cdbb6f8483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap4/css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

</head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"/\">I'am admin</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\">Home</a>
                </li>
                ";
        // line 27
        echo "                ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 28
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/userslist\">Users list</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
                    </li>
                ";
        } else {
            // line 35
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/register\">Register</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/login\">Login</a>
                    </li>
                ";
        }
        // line 42
        echo "            </ul>

            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
    </nav>
        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap4/js/bootstrap.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>

    <script>
        \$('a[href=\"' + this.location.pathname + '\"]').parents('li,ul').addClass('active');
    </script>
    ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
    </body>
</html>
";
        
        $__internal_7086321df87bae9baa7ef243da117e3ea747d0fe5e27757616a9e51e849a7661->leave($__internal_7086321df87bae9baa7ef243da117e3ea747d0fe5e27757616a9e51e849a7661_prof);

        
        $__internal_60256081006d1e8e0577e5cda587b98f3ad6361cbf56e32d025351cdbb6f8483->leave($__internal_60256081006d1e8e0577e5cda587b98f3ad6361cbf56e32d025351cdbb6f8483_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e32f9bf9986dfb2757c956ec678f1ba4dd52573f666da036fb57738ba9b3bbc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32f9bf9986dfb2757c956ec678f1ba4dd52573f666da036fb57738ba9b3bbc7->enter($__internal_e32f9bf9986dfb2757c956ec678f1ba4dd52573f666da036fb57738ba9b3bbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab05412f2364df9555cdad60b1afb08db3534de1bb84c235968731dc6f0c572a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab05412f2364df9555cdad60b1afb08db3534de1bb84c235968731dc6f0c572a->enter($__internal_ab05412f2364df9555cdad60b1afb08db3534de1bb84c235968731dc6f0c572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ab05412f2364df9555cdad60b1afb08db3534de1bb84c235968731dc6f0c572a->leave($__internal_ab05412f2364df9555cdad60b1afb08db3534de1bb84c235968731dc6f0c572a_prof);

        
        $__internal_e32f9bf9986dfb2757c956ec678f1ba4dd52573f666da036fb57738ba9b3bbc7->leave($__internal_e32f9bf9986dfb2757c956ec678f1ba4dd52573f666da036fb57738ba9b3bbc7_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba88d4733a2747815964e145587f6e1654db90ca48df054a4484037019c35d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba88d4733a2747815964e145587f6e1654db90ca48df054a4484037019c35d0e->enter($__internal_ba88d4733a2747815964e145587f6e1654db90ca48df054a4484037019c35d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1729e64442adc83d706d1aae9256536e20d19da881a822c372a51da64048bfe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1729e64442adc83d706d1aae9256536e20d19da881a822c372a51da64048bfe5->enter($__internal_1729e64442adc83d706d1aae9256536e20d19da881a822c372a51da64048bfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1729e64442adc83d706d1aae9256536e20d19da881a822c372a51da64048bfe5->leave($__internal_1729e64442adc83d706d1aae9256536e20d19da881a822c372a51da64048bfe5_prof);

        
        $__internal_ba88d4733a2747815964e145587f6e1654db90ca48df054a4484037019c35d0e->leave($__internal_ba88d4733a2747815964e145587f6e1654db90ca48df054a4484037019c35d0e_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_486fe2c7d0f9c7b61b73478f85edd369c58b0d5ade58c9f11f938cd284cb5ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_486fe2c7d0f9c7b61b73478f85edd369c58b0d5ade58c9f11f938cd284cb5ddc->enter($__internal_486fe2c7d0f9c7b61b73478f85edd369c58b0d5ade58c9f11f938cd284cb5ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5edbef521a7a3abaff9ae595fd9b2219fb641046e30dbc037282a2d3f9dd03a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edbef521a7a3abaff9ae595fd9b2219fb641046e30dbc037282a2d3f9dd03a6->enter($__internal_5edbef521a7a3abaff9ae595fd9b2219fb641046e30dbc037282a2d3f9dd03a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5edbef521a7a3abaff9ae595fd9b2219fb641046e30dbc037282a2d3f9dd03a6->leave($__internal_5edbef521a7a3abaff9ae595fd9b2219fb641046e30dbc037282a2d3f9dd03a6_prof);

        
        $__internal_486fe2c7d0f9c7b61b73478f85edd369c58b0d5ade58c9f11f938cd284cb5ddc->leave($__internal_486fe2c7d0f9c7b61b73478f85edd369c58b0d5ade58c9f11f938cd284cb5ddc_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34fd2a6fa65b3895964a37d6a594a88be2bb2944f8c4ba387f33de31af00280f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34fd2a6fa65b3895964a37d6a594a88be2bb2944f8c4ba387f33de31af00280f->enter($__internal_34fd2a6fa65b3895964a37d6a594a88be2bb2944f8c4ba387f33de31af00280f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7cf3b99fde314a49d88de5e169e6454b862eb1ea90d713adbf9b03e104ee9ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf3b99fde314a49d88de5e169e6454b862eb1ea90d713adbf9b03e104ee9ed4->enter($__internal_7cf3b99fde314a49d88de5e169e6454b862eb1ea90d713adbf9b03e104ee9ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7cf3b99fde314a49d88de5e169e6454b862eb1ea90d713adbf9b03e104ee9ed4->leave($__internal_7cf3b99fde314a49d88de5e169e6454b862eb1ea90d713adbf9b03e104ee9ed4_prof);

        
        $__internal_34fd2a6fa65b3895964a37d6a594a88be2bb2944f8c4ba387f33de31af00280f->leave($__internal_34fd2a6fa65b3895964a37d6a594a88be2bb2944f8c4ba387f33de31af00280f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 61,  168 => 50,  151 => 8,  133 => 7,  120 => 62,  118 => 61,  110 => 56,  103 => 51,  101 => 50,  91 => 42,  82 => 35,  76 => 32,  70 => 28,  67 => 27,  49 => 11,  43 => 9,  41 => 8,  37 => 7,  29 => 1,);
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
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('bootstrap4/css/bootstrap.min.css') }}\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

</head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"/\">I'am admin</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\">Home</a>
                </li>
                {# if need ROLE granted {% if is_granted('YOUR_ROLE') %} ... {% endif %}#}
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/userslist\">Users list</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('logout') }}\">Logout</a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/register\">Register</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/login\">Login</a>
                    </li>
                {% endif %}
            </ul>

            <form class=\"form-inline my-2 my-lg-0\">
                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
    </nav>
        {% block body %}{% endblock %}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset('bootstrap4/js/bootstrap.min.js') }}\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>

    <script>
        \$('a[href=\"' + this.location.pathname + '\"]').parents('li,ul').addClass('active');
    </script>
    {% block javascripts %}{% endblock %}

    </body>
</html>
", "base.html.twig", "/Users/mac/PhpstormProjects/task3/app/Resources/views/base.html.twig");
    }
}
