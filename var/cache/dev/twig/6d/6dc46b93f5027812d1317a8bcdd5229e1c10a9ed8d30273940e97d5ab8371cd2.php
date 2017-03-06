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
        $__internal_6d4eb970786fd5012ac66e86f74d9df8352010eb1a9eb8ef08cacef24dea139e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4eb970786fd5012ac66e86f74d9df8352010eb1a9eb8ef08cacef24dea139e->enter($__internal_6d4eb970786fd5012ac66e86f74d9df8352010eb1a9eb8ef08cacef24dea139e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_2f560ea408f241c9517efc2f8038f6d6b97408545d2a00a69adadb9f892fe4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f560ea408f241c9517efc2f8038f6d6b97408545d2a00a69adadb9f892fe4aa->enter($__internal_2f560ea408f241c9517efc2f8038f6d6b97408545d2a00a69adadb9f892fe4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4eb970786fd5012ac66e86f74d9df8352010eb1a9eb8ef08cacef24dea139e->leave($__internal_6d4eb970786fd5012ac66e86f74d9df8352010eb1a9eb8ef08cacef24dea139e_prof);

        
        $__internal_2f560ea408f241c9517efc2f8038f6d6b97408545d2a00a69adadb9f892fe4aa->leave($__internal_2f560ea408f241c9517efc2f8038f6d6b97408545d2a00a69adadb9f892fe4aa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a823ef2800a80c0d02ede5a64b8035a69d65b2af0cfe6477895fba3be0f54df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a823ef2800a80c0d02ede5a64b8035a69d65b2af0cfe6477895fba3be0f54df1->enter($__internal_a823ef2800a80c0d02ede5a64b8035a69d65b2af0cfe6477895fba3be0f54df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d300c0535efe8071ffbf4c7b16015e3febf0c7968ceda52586bfef33d668582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d300c0535efe8071ffbf4c7b16015e3febf0c7968ceda52586bfef33d668582->enter($__internal_0d300c0535efe8071ffbf4c7b16015e3febf0c7968ceda52586bfef33d668582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d300c0535efe8071ffbf4c7b16015e3febf0c7968ceda52586bfef33d668582->leave($__internal_0d300c0535efe8071ffbf4c7b16015e3febf0c7968ceda52586bfef33d668582_prof);

        
        $__internal_a823ef2800a80c0d02ede5a64b8035a69d65b2af0cfe6477895fba3be0f54df1->leave($__internal_a823ef2800a80c0d02ede5a64b8035a69d65b2af0cfe6477895fba3be0f54df1_prof);

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


", "default/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/default/index.html.twig");
    }
}
