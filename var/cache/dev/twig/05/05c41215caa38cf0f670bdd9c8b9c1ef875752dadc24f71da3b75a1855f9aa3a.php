<?php

/* episode/show.html.twig */
class __TwigTemplate_d7916765d15456aedaaa344bf22ecb135df7961efe26d072a3e0e8b0d39aa94b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "episode/show.html.twig", 1);
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
        $__internal_5d01b880e81e0405c25e1fb61052e1d68d79cca6d0e3fe3658ef20e2392449d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d01b880e81e0405c25e1fb61052e1d68d79cca6d0e3fe3658ef20e2392449d0->enter($__internal_5d01b880e81e0405c25e1fb61052e1d68d79cca6d0e3fe3658ef20e2392449d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $__internal_db3ec50db3ba0af6726afcb715c187eea06a397a7af1c3ba912fbcd811b04fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3ec50db3ba0af6726afcb715c187eea06a397a7af1c3ba912fbcd811b04fbb->enter($__internal_db3ec50db3ba0af6726afcb715c187eea06a397a7af1c3ba912fbcd811b04fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d01b880e81e0405c25e1fb61052e1d68d79cca6d0e3fe3658ef20e2392449d0->leave($__internal_5d01b880e81e0405c25e1fb61052e1d68d79cca6d0e3fe3658ef20e2392449d0_prof);

        
        $__internal_db3ec50db3ba0af6726afcb715c187eea06a397a7af1c3ba912fbcd811b04fbb->leave($__internal_db3ec50db3ba0af6726afcb715c187eea06a397a7af1c3ba912fbcd811b04fbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_324221d0238dda105325b9a6d886b7e351bb31638207b4c3a6871afa17f9f0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324221d0238dda105325b9a6d886b7e351bb31638207b4c3a6871afa17f9f0b6->enter($__internal_324221d0238dda105325b9a6d886b7e351bb31638207b4c3a6871afa17f9f0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1957e3eccbbc520c5e55068c0e91c8123ac0064b443891f23ec9d2017400ea06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1957e3eccbbc520c5e55068c0e91c8123ac0064b443891f23ec9d2017400ea06->enter($__internal_1957e3eccbbc520c5e55068c0e91c8123ac0064b443891f23ec9d2017400ea06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()))), "html", null, true);
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
        
        $__internal_1957e3eccbbc520c5e55068c0e91c8123ac0064b443891f23ec9d2017400ea06->leave($__internal_1957e3eccbbc520c5e55068c0e91c8123ac0064b443891f23ec9d2017400ea06_prof);

        
        $__internal_324221d0238dda105325b9a6d886b7e351bb31638207b4c3a6871afa17f9f0b6->leave($__internal_324221d0238dda105325b9a6d886b7e351bb31638207b4c3a6871afa17f9f0b6_prof);

    }

    public function getTemplateName()
    {
        return "episode/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
            <a href=\"{{ path('_edit', { 'id': tvSeries.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}", "episode/show.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/episode/show.html.twig");
    }
}
