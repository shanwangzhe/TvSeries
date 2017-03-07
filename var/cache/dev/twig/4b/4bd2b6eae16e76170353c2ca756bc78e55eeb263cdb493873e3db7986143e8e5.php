<?php

/* episode/index.html.twig */
class __TwigTemplate_6354b23d0110604d150417c54ea0a0d6772cf4f5576d3b1c1f4b896daf903f18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "episode/index.html.twig", 1);
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
        $__internal_2670128a9b099712d664b7e503a47c402714e978c209f0cadb6367d902dd6954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2670128a9b099712d664b7e503a47c402714e978c209f0cadb6367d902dd6954->enter($__internal_2670128a9b099712d664b7e503a47c402714e978c209f0cadb6367d902dd6954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_7c5a5b0735e520c9e6c92502becf2ead220ff5d9fa8ad2040c4535f2f4079275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5a5b0735e520c9e6c92502becf2ead220ff5d9fa8ad2040c4535f2f4079275->enter($__internal_7c5a5b0735e520c9e6c92502becf2ead220ff5d9fa8ad2040c4535f2f4079275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2670128a9b099712d664b7e503a47c402714e978c209f0cadb6367d902dd6954->leave($__internal_2670128a9b099712d664b7e503a47c402714e978c209f0cadb6367d902dd6954_prof);

        
        $__internal_7c5a5b0735e520c9e6c92502becf2ead220ff5d9fa8ad2040c4535f2f4079275->leave($__internal_7c5a5b0735e520c9e6c92502becf2ead220ff5d9fa8ad2040c4535f2f4079275_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_56893d4acf29b7226ac9c785a768059d3a92228599597068c0ce334fc4b7d1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56893d4acf29b7226ac9c785a768059d3a92228599597068c0ce334fc4b7d1e7->enter($__internal_56893d4acf29b7226ac9c785a768059d3a92228599597068c0ce334fc4b7d1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aeec6a1023bf8785481f891313361a9beaa3c27ffcde539be18c5c3c8156c2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeec6a1023bf8785481f891313361a9beaa3c27ffcde539be18c5c3c8156c2de->enter($__internal_aeec6a1023bf8785481f891313361a9beaa3c27ffcde539be18c5c3c8156c2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tv"] ?? $this->getContext($context, "tv")), "name", array()), "html", null, true);
        echo " Episode list</h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeNew", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "episodeNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>
";
        
        $__internal_aeec6a1023bf8785481f891313361a9beaa3c27ffcde539be18c5c3c8156c2de->leave($__internal_aeec6a1023bf8785481f891313361a9beaa3c27ffcde539be18c5c3c8156c2de_prof);

        
        $__internal_56893d4acf29b7226ac9c785a768059d3a92228599597068c0ce334fc4b7d1e7->leave($__internal_56893d4acf29b7226ac9c785a768059d3a92228599597068c0ce334fc4b7d1e7_prof);

    }

    public function getTemplateName()
    {
        return "episode/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  81 => 19,  77 => 18,  71 => 17,  68 => 16,  64 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
   <h1>{{ tv.name }} Episode list</h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        {% for e in episodes %}
            <tr>
                <td><a href=\"{{ path('_userEpisodeNew', { 'id': e.id }) }}\">{{ e.name }}</a></td>
                <td>{{ e.episodeNumber }}</td>
                <td>{{ e.description }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "episode/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/episode/index.html.twig");
    }
}
