<?php

/* users/userslist.html.twig */
class __TwigTemplate_b943ba9c066e4b5bfdeb1c2f54dcef93591f8f27e7a132ff9ae08ed420969640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/userslist.html.twig", 1);
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
        $__internal_5f6c026b83c2ffc7025db30c299bd198966f568f6432f633664ab55a684b630b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6c026b83c2ffc7025db30c299bd198966f568f6432f633664ab55a684b630b->enter($__internal_5f6c026b83c2ffc7025db30c299bd198966f568f6432f633664ab55a684b630b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/userslist.html.twig"));

        $__internal_8b32e7a3570a8f64eeef8ef3ff0a59db59498a492fa8dff886c5c5bb307e8230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b32e7a3570a8f64eeef8ef3ff0a59db59498a492fa8dff886c5c5bb307e8230->enter($__internal_8b32e7a3570a8f64eeef8ef3ff0a59db59498a492fa8dff886c5c5bb307e8230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/userslist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f6c026b83c2ffc7025db30c299bd198966f568f6432f633664ab55a684b630b->leave($__internal_5f6c026b83c2ffc7025db30c299bd198966f568f6432f633664ab55a684b630b_prof);

        
        $__internal_8b32e7a3570a8f64eeef8ef3ff0a59db59498a492fa8dff886c5c5bb307e8230->leave($__internal_8b32e7a3570a8f64eeef8ef3ff0a59db59498a492fa8dff886c5c5bb307e8230_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eddd014bf6ae23869951a722599a4884ac7d026fbc045a5fdccdc1abcbb7317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eddd014bf6ae23869951a722599a4884ac7d026fbc045a5fdccdc1abcbb7317->enter($__internal_3eddd014bf6ae23869951a722599a4884ac7d026fbc045a5fdccdc1abcbb7317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9dcdf8bd8de079f4dfb23412f3c3e179cac04c973abcd314cd097875e333cd20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcdf8bd8de079f4dfb23412f3c3e179cac04c973abcd314cd097875e333cd20->enter($__internal_9dcdf8bd8de079f4dfb23412f3c3e179cac04c973abcd314cd097875e333cd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete");
        echo "\" method=\"post\">
    <button type=\"button submit\" class=\"btn btn-warning m-2\" name=\"block\">Block</button>
    <button type=\"button submit\" class=\"btn btn-danger m-2\" name=\"delete\">Delete</button>
    <table class=\"table\">
        <thead class=\"thead-default\">
        <tr>
            <th>#</th>
            <th></th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Is_active</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "            <tr>
                <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</th>
                <td><input type=\"checkbox\" class=\"form-check-input\" name=\"checkedUsers[]\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "ROLE", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "isactive", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
    </form>
</div>
";
        
        $__internal_9dcdf8bd8de079f4dfb23412f3c3e179cac04c973abcd314cd097875e333cd20->leave($__internal_9dcdf8bd8de079f4dfb23412f3c3e179cac04c973abcd314cd097875e333cd20_prof);

        
        $__internal_3eddd014bf6ae23869951a722599a4884ac7d026fbc045a5fdccdc1abcbb7317->leave($__internal_3eddd014bf6ae23869951a722599a4884ac7d026fbc045a5fdccdc1abcbb7317_prof);

    }

    public function getTemplateName()
    {
        return "users/userslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  74 => 21,  70 => 20,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <form action=\"{{ path('delete') }}\" method=\"post\">
    <button type=\"button submit\" class=\"btn btn-warning m-2\" name=\"block\">Block</button>
    <button type=\"button submit\" class=\"btn btn-danger m-2\" name=\"delete\">Delete</button>
    <table class=\"table\">
        <thead class=\"thead-default\">
        <tr>
            <th>#</th>
            <th></th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Is_active</th>
        </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <th scope=\"row\">{{ user.id }}</th>
                <td><input type=\"checkbox\" class=\"form-check-input\" name=\"checkedUsers[]\" value=\"{{ user.id }}\"></td>
                <td>{{ user.username }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.ROLE }}</td>
                <td>{{ user.isactive }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </form>
</div>
{% endblock %}", "users/userslist.html.twig", "/Users/mac/PhpstormProjects/task3/app/Resources/views/users/userslist.html.twig");
    }
}
