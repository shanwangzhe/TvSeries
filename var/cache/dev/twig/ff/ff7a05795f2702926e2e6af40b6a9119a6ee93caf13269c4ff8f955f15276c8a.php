<?php

/* tvseries/show.html.twig */
class __TwigTemplate_8b5d6b9ef9cc2e0a347e95f21c8ed748a53a18750e45e09120bad66103f8ddef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tvseries/show.html.twig", 1);
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
        $__internal_16b3ef6322d6adf011ff79cf2e03bab2c2ffd2e639289dbbf265a7e4380f4eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b3ef6322d6adf011ff79cf2e03bab2c2ffd2e639289dbbf265a7e4380f4eb8->enter($__internal_16b3ef6322d6adf011ff79cf2e03bab2c2ffd2e639289dbbf265a7e4380f4eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tvseries/show.html.twig"));

        $__internal_9437d56b6fa21518101af7a4c571d9a913e48952b04d1f0e547cbc80caf08a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9437d56b6fa21518101af7a4c571d9a913e48952b04d1f0e547cbc80caf08a5e->enter($__internal_9437d56b6fa21518101af7a4c571d9a913e48952b04d1f0e547cbc80caf08a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tvseries/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b3ef6322d6adf011ff79cf2e03bab2c2ffd2e639289dbbf265a7e4380f4eb8->leave($__internal_16b3ef6322d6adf011ff79cf2e03bab2c2ffd2e639289dbbf265a7e4380f4eb8_prof);

        
        $__internal_9437d56b6fa21518101af7a4c571d9a913e48952b04d1f0e547cbc80caf08a5e->leave($__internal_9437d56b6fa21518101af7a4c571d9a913e48952b04d1f0e547cbc80caf08a5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_459ed3b00f3a15f6c9e38b3738ba352217761e5bba361ee72692d4f59d5a238d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459ed3b00f3a15f6c9e38b3738ba352217761e5bba361ee72692d4f59d5a238d->enter($__internal_459ed3b00f3a15f6c9e38b3738ba352217761e5bba361ee72692d4f59d5a238d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd31627321861655683706cdc9a09bc877238675eeeaf2bf3a51b8a731db3394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd31627321861655683706cdc9a09bc877238675eeeaf2bf3a51b8a731db3394->enter($__internal_fd31627321861655683706cdc9a09bc877238675eeeaf2bf3a51b8a731db3394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tvseries</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "author", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Releasedat</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "releasedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fd31627321861655683706cdc9a09bc877238675eeeaf2bf3a51b8a731db3394->leave($__internal_fd31627321861655683706cdc9a09bc877238675eeeaf2bf3a51b8a731db3394_prof);

        
        $__internal_459ed3b00f3a15f6c9e38b3738ba352217761e5bba361ee72692d4f59d5a238d->leave($__internal_459ed3b00f3a15f6c9e38b3738ba352217761e5bba361ee72692d4f59d5a238d_prof);

    }

    public function getTemplateName()
    {
        return "tvseries/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 43,  110 => 40,  104 => 37,  94 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tvseries</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ tvSeries.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ tvSeries.name }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ tvSeries.author }}</td>
            </tr>
            <tr>
                <th>Releasedat</th>
                <td>{% if tvSeries.releasedAt %}{{ tvSeries.releasedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ tvSeries.description }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ tvSeries.image }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_edit', { 'id': tvSeries.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "tvseries/show.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/tvseries/show.html.twig");
    }
}
