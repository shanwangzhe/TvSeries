<?php

/* admin/tvseries/show.html.twig */
class __TwigTemplate_6420d2b3bb7bd4bba4b0541648f82abd25bb61b5dbec432a1da37d383551f9f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/tvseries/show.html.twig", 1);
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
        $__internal_b31297c8262637f70040850dd6c2877eb42fa12669e5b6c8341f194e32b5a84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31297c8262637f70040850dd6c2877eb42fa12669e5b6c8341f194e32b5a84d->enter($__internal_b31297c8262637f70040850dd6c2877eb42fa12669e5b6c8341f194e32b5a84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tvseries/show.html.twig"));

        $__internal_cf0d8a79121eb6ca5002731a1d53d925dd480e2c27016d7e86e70e4a94191c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0d8a79121eb6ca5002731a1d53d925dd480e2c27016d7e86e70e4a94191c4a->enter($__internal_cf0d8a79121eb6ca5002731a1d53d925dd480e2c27016d7e86e70e4a94191c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tvseries/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31297c8262637f70040850dd6c2877eb42fa12669e5b6c8341f194e32b5a84d->leave($__internal_b31297c8262637f70040850dd6c2877eb42fa12669e5b6c8341f194e32b5a84d_prof);

        
        $__internal_cf0d8a79121eb6ca5002731a1d53d925dd480e2c27016d7e86e70e4a94191c4a->leave($__internal_cf0d8a79121eb6ca5002731a1d53d925dd480e2c27016d7e86e70e4a94191c4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d629efbedce5beed3ab156a42939843e881dbf698e6a99b369a467bb528e15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d629efbedce5beed3ab156a42939843e881dbf698e6a99b369a467bb528e15d->enter($__internal_8d629efbedce5beed3ab156a42939843e881dbf698e6a99b369a467bb528e15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4481fa1ddd639b86f2a21b6be5efd97429b0b0a61f6bc3b3ec623533cbefa4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4481fa1ddd639b86f2a21b6be5efd97429b0b0a61f6bc3b3ec623533cbefa4d3->enter($__internal_4481fa1ddd639b86f2a21b6be5efd97429b0b0a61f6bc3b3ec623533cbefa4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
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
        
        $__internal_4481fa1ddd639b86f2a21b6be5efd97429b0b0a61f6bc3b3ec623533cbefa4d3->leave($__internal_4481fa1ddd639b86f2a21b6be5efd97429b0b0a61f6bc3b3ec623533cbefa4d3_prof);

        
        $__internal_8d629efbedce5beed3ab156a42939843e881dbf698e6a99b369a467bb528e15d->leave($__internal_8d629efbedce5beed3ab156a42939843e881dbf698e6a99b369a467bb528e15d_prof);

    }

    public function getTemplateName()
    {
        return "admin/tvseries/show.html.twig";
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
            <a href=\"{{ path('_adminIndex') }}\">Back to the list</a>
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
", "admin/tvseries/show.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/admin/tvseries/show.html.twig");
    }
}
