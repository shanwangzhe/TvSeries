<?php

/* backend/episode/show.html.twig */
class __TwigTemplate_a481d8da0053880a2e28229da63574cbf240d7e363f39e1031e697efd237c008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend/episode/show.html.twig", 1);
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
        $__internal_137ff29579e7579a33bff82c565e7a070b233a7de6066e6747f2399f389742e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137ff29579e7579a33bff82c565e7a070b233a7de6066e6747f2399f389742e0->enter($__internal_137ff29579e7579a33bff82c565e7a070b233a7de6066e6747f2399f389742e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/show.html.twig"));

        $__internal_a859ad32b4e8ffbc466a48e2ffeb74e9b0b17abe33f6bd9c3a4943357764b2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a859ad32b4e8ffbc466a48e2ffeb74e9b0b17abe33f6bd9c3a4943357764b2bd->enter($__internal_a859ad32b4e8ffbc466a48e2ffeb74e9b0b17abe33f6bd9c3a4943357764b2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137ff29579e7579a33bff82c565e7a070b233a7de6066e6747f2399f389742e0->leave($__internal_137ff29579e7579a33bff82c565e7a070b233a7de6066e6747f2399f389742e0_prof);

        
        $__internal_a859ad32b4e8ffbc466a48e2ffeb74e9b0b17abe33f6bd9c3a4943357764b2bd->leave($__internal_a859ad32b4e8ffbc466a48e2ffeb74e9b0b17abe33f6bd9c3a4943357764b2bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9f684fc4d149153b8fa042f64b67cf080a72bc3f575db6c94596e555be554e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f684fc4d149153b8fa042f64b67cf080a72bc3f575db6c94596e555be554e8->enter($__internal_a9f684fc4d149153b8fa042f64b67cf080a72bc3f575db6c94596e555be554e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34453f05853e08ad088939f0f14c56a4946b7a0616be760cb3fa68c5ebc143df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34453f05853e08ad088939f0f14c56a4946b7a0616be760cb3fa68c5ebc143df->enter($__internal_34453f05853e08ad088939f0f14c56a4946b7a0616be760cb3fa68c5ebc143df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "name", array()), "html", null, true);
        echo "</h1>

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
            <th>Description</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "image", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_episodeIndex", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "tvSeriesId", array()))), "html", null, true);
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_episodeEdit", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_34453f05853e08ad088939f0f14c56a4946b7a0616be760cb3fa68c5ebc143df->leave($__internal_34453f05853e08ad088939f0f14c56a4946b7a0616be760cb3fa68c5ebc143df_prof);

        
        $__internal_a9f684fc4d149153b8fa042f64b67cf080a72bc3f575db6c94596e555be554e8->leave($__internal_a9f684fc4d149153b8fa042f64b67cf080a72bc3f575db6c94596e555be554e8_prof);

    }

    public function getTemplateName()
    {
        return "backend/episode/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  80 => 22,  73 => 18,  66 => 14,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{ tvSeries.name }}</h1>

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
            <a href=\"{{ path('_episodeIndex',{'id':tvSeries.tvSeriesId}) }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_episodeEdit', { 'id': tvSeries.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}", "backend/episode/show.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/backend/episode/show.html.twig");
    }
}
