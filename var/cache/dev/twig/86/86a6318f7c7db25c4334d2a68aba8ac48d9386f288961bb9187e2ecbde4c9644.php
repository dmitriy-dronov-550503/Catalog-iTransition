<?php

/* registration/register.html.twig */
class __TwigTemplate_02e48df40d0f86991ec13c0911c14340aeaa3d6474084f63d140361f6c180b3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 2);
        $this->blocks = array(
            '_user_username_widget' => array($this, 'block__user_username_widget'),
            '_user_email_widget' => array($this, 'block__user_email_widget'),
            '_user_plainPassword_first_widget' => array($this, 'block__user_plainPassword_first_widget'),
            '_user_plainPassword_second_widget' => array($this, 'block__user_plainPassword_second_widget'),
            'form_errors' => array($this, 'block_form_errors'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c00902e292a863f6847ead6168dbeeab515ad04a2cea1f900038ca25b7c1c39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00902e292a863f6847ead6168dbeeab515ad04a2cea1f900038ca25b7c1c39a->enter($__internal_c00902e292a863f6847ead6168dbeeab515ad04a2cea1f900038ca25b7c1c39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_00358e30fd20380c6f97dd7a56dd18d65601e323afb100e66c2dfacd58c0308a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00358e30fd20380c6f97dd7a56dd18d65601e323afb100e66c2dfacd58c0308a->enter($__internal_00358e30fd20380c6f97dd7a56dd18d65601e323afb100e66c2dfacd58c0308a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c00902e292a863f6847ead6168dbeeab515ad04a2cea1f900038ca25b7c1c39a->leave($__internal_c00902e292a863f6847ead6168dbeeab515ad04a2cea1f900038ca25b7c1c39a_prof);

        
        $__internal_00358e30fd20380c6f97dd7a56dd18d65601e323afb100e66c2dfacd58c0308a->leave($__internal_00358e30fd20380c6f97dd7a56dd18d65601e323afb100e66c2dfacd58c0308a_prof);

    }

    // line 6
    public function block__user_username_widget($context, array $blocks = array())
    {
        $__internal_4f234b0f3687b4bebd843c0f39c86abf909abe2f70ff11706a0f658e93d70c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f234b0f3687b4bebd843c0f39c86abf909abe2f70ff11706a0f658e93d70c43->enter($__internal_4f234b0f3687b4bebd843c0f39c86abf909abe2f70ff11706a0f658e93d70c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_username_widget"));

        $__internal_69069b05830e6941180c6f9cf8e9b6a9e20e098ae3bbfebef235229924a59c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69069b05830e6941180c6f9cf8e9b6a9e20e098ae3bbfebef235229924a59c85->enter($__internal_69069b05830e6941180c6f9cf8e9b6a9e20e098ae3bbfebef235229924a59c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_username_widget"));

        // line 7
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 8
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Enter username\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        
        $__internal_69069b05830e6941180c6f9cf8e9b6a9e20e098ae3bbfebef235229924a59c85->leave($__internal_69069b05830e6941180c6f9cf8e9b6a9e20e098ae3bbfebef235229924a59c85_prof);

        
        $__internal_4f234b0f3687b4bebd843c0f39c86abf909abe2f70ff11706a0f658e93d70c43->leave($__internal_4f234b0f3687b4bebd843c0f39c86abf909abe2f70ff11706a0f658e93d70c43_prof);

    }

    // line 11
    public function block__user_email_widget($context, array $blocks = array())
    {
        $__internal_0cd264e955623ae477d737105f3346cdd555ab89eda53dd707664e3f920998c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd264e955623ae477d737105f3346cdd555ab89eda53dd707664e3f920998c2->enter($__internal_0cd264e955623ae477d737105f3346cdd555ab89eda53dd707664e3f920998c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_email_widget"));

        $__internal_24754a3b5a6aa93e52b0d38f1d2f64a03436d5720f910ad3b89555800b164910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24754a3b5a6aa93e52b0d38f1d2f64a03436d5720f910ad3b89555800b164910->enter($__internal_24754a3b5a6aa93e52b0d38f1d2f64a03436d5720f910ad3b89555800b164910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_email_widget"));

        // line 12
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 13
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Enter email\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        
        $__internal_24754a3b5a6aa93e52b0d38f1d2f64a03436d5720f910ad3b89555800b164910->leave($__internal_24754a3b5a6aa93e52b0d38f1d2f64a03436d5720f910ad3b89555800b164910_prof);

        
        $__internal_0cd264e955623ae477d737105f3346cdd555ab89eda53dd707664e3f920998c2->leave($__internal_0cd264e955623ae477d737105f3346cdd555ab89eda53dd707664e3f920998c2_prof);

    }

    // line 16
    public function block__user_plainPassword_first_widget($context, array $blocks = array())
    {
        $__internal_c83f0b23c2ebc1e627ef8a77f40bb879d83b9e26ff47a3ce1d8c6ef63157f016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83f0b23c2ebc1e627ef8a77f40bb879d83b9e26ff47a3ce1d8c6ef63157f016->enter($__internal_c83f0b23c2ebc1e627ef8a77f40bb879d83b9e26ff47a3ce1d8c6ef63157f016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_first_widget"));

        $__internal_dc7700387636ac20ec2aac7dcf85386531ba67129df7190f7358779523b234af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7700387636ac20ec2aac7dcf85386531ba67129df7190f7358779523b234af->enter($__internal_dc7700387636ac20ec2aac7dcf85386531ba67129df7190f7358779523b234af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_first_widget"));

        // line 17
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 18
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Password\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        
        $__internal_dc7700387636ac20ec2aac7dcf85386531ba67129df7190f7358779523b234af->leave($__internal_dc7700387636ac20ec2aac7dcf85386531ba67129df7190f7358779523b234af_prof);

        
        $__internal_c83f0b23c2ebc1e627ef8a77f40bb879d83b9e26ff47a3ce1d8c6ef63157f016->leave($__internal_c83f0b23c2ebc1e627ef8a77f40bb879d83b9e26ff47a3ce1d8c6ef63157f016_prof);

    }

    // line 21
    public function block__user_plainPassword_second_widget($context, array $blocks = array())
    {
        $__internal_56bf0b415ff665296569c4a31e48462d03fc96f324cc710a8625d93582bd2ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bf0b415ff665296569c4a31e48462d03fc96f324cc710a8625d93582bd2ed6->enter($__internal_56bf0b415ff665296569c4a31e48462d03fc96f324cc710a8625d93582bd2ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_second_widget"));

        $__internal_575995764d85af38f1f4398e15440c35f1d2586fcb47a3616e9d2732f125c9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575995764d85af38f1f4398e15440c35f1d2586fcb47a3616e9d2732f125c9c6->enter($__internal_575995764d85af38f1f4398e15440c35f1d2586fcb47a3616e9d2732f125c9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_user_plainPassword_second_widget"));

        // line 22
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 23
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Confirm password\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        
        $__internal_575995764d85af38f1f4398e15440c35f1d2586fcb47a3616e9d2732f125c9c6->leave($__internal_575995764d85af38f1f4398e15440c35f1d2586fcb47a3616e9d2732f125c9c6_prof);

        
        $__internal_56bf0b415ff665296569c4a31e48462d03fc96f324cc710a8625d93582bd2ed6->leave($__internal_56bf0b415ff665296569c4a31e48462d03fc96f324cc710a8625d93582bd2ed6_prof);

    }

    // line 26
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e8d7b163b939cb20e30c15cad4f0a2753931a4285f457206cb2a9c35b2570b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d7b163b939cb20e30c15cad4f0a2753931a4285f457206cb2a9c35b2570b12->enter($__internal_e8d7b163b939cb20e30c15cad4f0a2753931a4285f457206cb2a9c35b2570b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bba85aad25b3b3e41a48efac331fb4bd56953abed233d961a4c216864bd7263d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba85aad25b3b3e41a48efac331fb4bd56953abed233d961a4c216864bd7263d->enter($__internal_bba85aad25b3b3e41a48efac331fb4bd56953abed233d961a4c216864bd7263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 29
            echo "            <div class=\"alert alert-info\" role=\"alert\">
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </div>
        ";
        }
        // line 35
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bba85aad25b3b3e41a48efac331fb4bd56953abed233d961a4c216864bd7263d->leave($__internal_bba85aad25b3b3e41a48efac331fb4bd56953abed233d961a4c216864bd7263d_prof);

        
        $__internal_e8d7b163b939cb20e30c15cad4f0a2753931a4285f457206cb2a9c35b2570b12->leave($__internal_e8d7b163b939cb20e30c15cad4f0a2753931a4285f457206cb2a9c35b2570b12_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_11bc12f0dd847964a2b1a66af7b3c65ef74ebf568b4879e0196a114972d69b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bc12f0dd847964a2b1a66af7b3c65ef74ebf568b4879e0196a114972d69b6e->enter($__internal_11bc12f0dd847964a2b1a66af7b3c65ef74ebf568b4879e0196a114972d69b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e323d826d994cf47010ec4f95afa0f89d10bcba8d66d61e5ae9a6e6d4f6d05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e323d826d994cf47010ec4f95afa0f89d10bcba8d66d61e5ae9a6e6d4f6d05d->enter($__internal_0e323d826d994cf47010ec4f95afa0f89d10bcba8d66d61e5ae9a6e6d4f6d05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"card my-3 p-3\">
                <div class=\"card-body\">
                    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        <div class=\"form-group row justify-content-start\">
                            <label for=\"user_username\" class=\"col-auto col-form-label mr-auto required\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo ":</label>
                            <div class=\"col-9\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-start\">
                            <label for=\"user_email\" class=\"col-auto col-form-label mr-auto required\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo ":</label>
                            <div class=\"col-9\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-start\">
                            <label for=\"user_plainPassword_first\" class=\"col-auto col-form-label required\">";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo ":</label>
                            <div class=\"col-auto d-flex flex-nowrap\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
                            </div>
                            <div class=\"col-auto d-flex flex-nowrap\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
                            </div>
                        </div>

                        <div class=\"clearfix\">
                            <button type=\"button submit\" class=\"btn btn-success btn-block float-right\">Register</button>
                        </div>
                    ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_0e323d826d994cf47010ec4f95afa0f89d10bcba8d66d61e5ae9a6e6d4f6d05d->leave($__internal_0e323d826d994cf47010ec4f95afa0f89d10bcba8d66d61e5ae9a6e6d4f6d05d_prof);

        
        $__internal_11bc12f0dd847964a2b1a66af7b3c65ef74ebf568b4879e0196a114972d69b6e->leave($__internal_11bc12f0dd847964a2b1a66af7b3c65ef74ebf568b4879e0196a114972d69b6e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 75,  302 => 68,  296 => 65,  291 => 63,  284 => 59,  279 => 57,  272 => 53,  267 => 51,  262 => 49,  258 => 48,  254 => 47,  250 => 46,  246 => 45,  242 => 44,  235 => 39,  226 => 38,  215 => 35,  211 => 33,  202 => 31,  198 => 30,  195 => 29,  192 => 28,  189 => 27,  180 => 26,  159 => 23,  156 => 22,  147 => 21,  126 => 18,  123 => 17,  114 => 16,  93 => 13,  90 => 12,  81 => 11,  60 => 8,  57 => 7,  48 => 6,  38 => 2,  36 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/registration/register.html.twig #}
{% extends 'base.html.twig' %}

 {% form_theme form _self %}

{% block _user_username_widget %}
    {% set type = type|default('text') %}
    <input type=\"{{ type }}\" class=\"form-control\" placeholder=\"Enter username\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{% endblock %}

{% block _user_email_widget %}
    {% set type = type|default('email') %}
    <input type=\"{{ type }}\" class=\"form-control\" placeholder=\"Enter email\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{% endblock %}

{% block _user_plainPassword_first_widget %}
    {% set type = type|default('password') %}
    <input type=\"{{ type }}\" class=\"form-control\" placeholder=\"Password\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{% endblock %}

{% block _user_plainPassword_second_widget %}
    {% set type = type|default('password') %}
    <input type=\"{{ type }}\" class=\"form-control\" placeholder=\"Confirm password\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{% endblock %}

{% block form_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            <div class=\"alert alert-info\" role=\"alert\">
                {% for error in errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
            </div>
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}

{% block body %}

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"card my-3 p-3\">
                <div class=\"card-body\">
                    {{ form_start(form) }}
                        {{ form_errors(form) }}
                        {{ form_errors(form.username) }}
                        {{ form_errors(form.email) }}
                        {{ form_errors(form.plainPassword.first) }}
                        {{ form_errors(form.plainPassword.second) }}
                        <div class=\"form-group row justify-content-start\">
                            <label for=\"user_username\" class=\"col-auto col-form-label mr-auto required\">{{ form_label(form.username) }}:</label>
                            <div class=\"col-9\">
                                {{ form_widget(form.username) }}
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-start\">
                            <label for=\"user_email\" class=\"col-auto col-form-label mr-auto required\">{{ form_label(form.email) }}:</label>
                            <div class=\"col-9\">
                                {{ form_widget(form.email) }}
                            </div>
                        </div>
                        <div class=\"form-group row justify-content-start\">
                            <label for=\"user_plainPassword_first\" class=\"col-auto col-form-label required\">{{ form_label(form.plainPassword.first) }}:</label>
                            <div class=\"col-auto d-flex flex-nowrap\">
                                {{ form_widget(form.plainPassword.first) }}
                            </div>
                            <div class=\"col-auto d-flex flex-nowrap\">
                                {{ form_widget(form.plainPassword.second) }}
                            </div>
                        </div>

                        <div class=\"clearfix\">
                            <button type=\"button submit\" class=\"btn btn-success btn-block float-right\">Register</button>
                        </div>
                    {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>


{% endblock %}






", "registration/register.html.twig", "/Users/mac/PhpstormProjects/task3/app/Resources/views/registration/register.html.twig");
    }
}
