<?php

/* default/index.html.twig */
class __TwigTemplate_95037066e25c238379d2683ef141d26d9c743b9e8fa6f9f69f4798984d6b1243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_33f9f174ae45532e136b57c4bd16bedcfbf5122a1deae5023d3ca6aae5c120c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f9f174ae45532e136b57c4bd16bedcfbf5122a1deae5023d3ca6aae5c120c2->enter($__internal_33f9f174ae45532e136b57c4bd16bedcfbf5122a1deae5023d3ca6aae5c120c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_ce2b5b24a250d17a69239d921886e871ea38f206bcb4d2fb78618c2a2f107d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2b5b24a250d17a69239d921886e871ea38f206bcb4d2fb78618c2a2f107d4e->enter($__internal_ce2b5b24a250d17a69239d921886e871ea38f206bcb4d2fb78618c2a2f107d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33f9f174ae45532e136b57c4bd16bedcfbf5122a1deae5023d3ca6aae5c120c2->leave($__internal_33f9f174ae45532e136b57c4bd16bedcfbf5122a1deae5023d3ca6aae5c120c2_prof);

        
        $__internal_ce2b5b24a250d17a69239d921886e871ea38f206bcb4d2fb78618c2a2f107d4e->leave($__internal_ce2b5b24a250d17a69239d921886e871ea38f206bcb4d2fb78618c2a2f107d4e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ee82475285c95455ea9281656f04e37dfe0b0cf3d0aa2c596f3b19681f1ae47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee82475285c95455ea9281656f04e37dfe0b0cf3d0aa2c596f3b19681f1ae47->enter($__internal_9ee82475285c95455ea9281656f04e37dfe0b0cf3d0aa2c596f3b19681f1ae47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bea4a3a1bbe17cdfd132c05959387ece23e1b27038b74da371eaf037c4367cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea4a3a1bbe17cdfd132c05959387ece23e1b27038b74da371eaf037c4367cc6->enter($__internal_bea4a3a1bbe17cdfd132c05959387ece23e1b27038b74da371eaf037c4367cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div>
    <h1>Tvseries list</h1>
</div>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Author</th>
        <th>Releasedat</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tvSeries"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tvSeries"]) {
            // line 19
            echo "        <tr>
            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_episodeIndex", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "name", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "author", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            if ($this->getAttribute($context["tvSeries"], "releasedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tvSeries"], "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "description", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "image", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tvSeries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>
";
        
        $__internal_bea4a3a1bbe17cdfd132c05959387ece23e1b27038b74da371eaf037c4367cc6->leave($__internal_bea4a3a1bbe17cdfd132c05959387ece23e1b27038b74da371eaf037c4367cc6_prof);

        
        $__internal_9ee82475285c95455ea9281656f04e37dfe0b0cf3d0aa2c596f3b19681f1ae47->leave($__internal_9ee82475285c95455ea9281656f04e37dfe0b0cf3d0aa2c596f3b19681f1ae47_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  93 => 24,  89 => 23,  83 => 22,  79 => 21,  73 => 20,  70 => 19,  66 => 18,  49 => 3,  40 => 2,  11 => 1,);
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
<div>
    <h1>Tvseries list</h1>
</div>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Author</th>
        <th>Releasedat</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    {% for tvSeries in tvSeries %}
        <tr>
            <td><a href=\"{{ path('_episodeIndex', { 'id': tvSeries.id }) }}\">{{ tvSeries.name }}</a></td>
            <td>{{ tvSeries.author }}</td>
            <td>{% if tvSeries.releasedAt %}{{ tvSeries.releasedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            <td>{{ tvSeries.description }}</td>
            <td>{{ tvSeries.image }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
{% endblock %}


", "default/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/default/index.html.twig");
    }
}
