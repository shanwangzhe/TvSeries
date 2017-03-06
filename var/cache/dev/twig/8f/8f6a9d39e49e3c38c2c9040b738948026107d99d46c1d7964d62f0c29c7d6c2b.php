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
        $__internal_f8108295f15a0104dfda7ff0ad19a36f97b37b44718de4ffc091da747f8001b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8108295f15a0104dfda7ff0ad19a36f97b37b44718de4ffc091da747f8001b5->enter($__internal_f8108295f15a0104dfda7ff0ad19a36f97b37b44718de4ffc091da747f8001b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/show.html.twig"));

        $__internal_8e61ea3710fbf6e870917de7340fcd27940c60daa1988e5174cb72f748cdf5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e61ea3710fbf6e870917de7340fcd27940c60daa1988e5174cb72f748cdf5f7->enter($__internal_8e61ea3710fbf6e870917de7340fcd27940c60daa1988e5174cb72f748cdf5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8108295f15a0104dfda7ff0ad19a36f97b37b44718de4ffc091da747f8001b5->leave($__internal_f8108295f15a0104dfda7ff0ad19a36f97b37b44718de4ffc091da747f8001b5_prof);

        
        $__internal_8e61ea3710fbf6e870917de7340fcd27940c60daa1988e5174cb72f748cdf5f7->leave($__internal_8e61ea3710fbf6e870917de7340fcd27940c60daa1988e5174cb72f748cdf5f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bb5545030ea3732caa813cce236bcd63ca5b53f7d6739f6ce5631278f9e7ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb5545030ea3732caa813cce236bcd63ca5b53f7d6739f6ce5631278f9e7ab2->enter($__internal_1bb5545030ea3732caa813cce236bcd63ca5b53f7d6739f6ce5631278f9e7ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efde57eac70fefc865af3952b4de2bda0b821c209f509997b01dadcfe65d4972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efde57eac70fefc865af3952b4de2bda0b821c209f509997b01dadcfe65d4972->enter($__internal_efde57eac70fefc865af3952b4de2bda0b821c209f509997b01dadcfe65d4972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEIndex", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "tvSeriesId", array()))), "html", null, true);
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEEdit", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()))), "html", null, true);
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
        
        $__internal_efde57eac70fefc865af3952b4de2bda0b821c209f509997b01dadcfe65d4972->leave($__internal_efde57eac70fefc865af3952b4de2bda0b821c209f509997b01dadcfe65d4972_prof);

        
        $__internal_1bb5545030ea3732caa813cce236bcd63ca5b53f7d6739f6ce5631278f9e7ab2->leave($__internal_1bb5545030ea3732caa813cce236bcd63ca5b53f7d6739f6ce5631278f9e7ab2_prof);

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
            <a href=\"{{ path('_AEIndex',{'id':tvSeries.tvSeriesId}) }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_AEEdit', { 'id': tvSeries.id }) }}\">Edit</a>
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
