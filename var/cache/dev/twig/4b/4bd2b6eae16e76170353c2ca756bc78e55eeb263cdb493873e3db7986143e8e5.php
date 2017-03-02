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
        $__internal_ef612ffb38f3c46d9b5e11425af2d68daa9e5d99f5e21f0eb508e5b24724f75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef612ffb38f3c46d9b5e11425af2d68daa9e5d99f5e21f0eb508e5b24724f75a->enter($__internal_ef612ffb38f3c46d9b5e11425af2d68daa9e5d99f5e21f0eb508e5b24724f75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_20723f244dc633eedb5f23d7a905664b0f187c013eeaed2bde42f927094c82bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20723f244dc633eedb5f23d7a905664b0f187c013eeaed2bde42f927094c82bf->enter($__internal_20723f244dc633eedb5f23d7a905664b0f187c013eeaed2bde42f927094c82bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef612ffb38f3c46d9b5e11425af2d68daa9e5d99f5e21f0eb508e5b24724f75a->leave($__internal_ef612ffb38f3c46d9b5e11425af2d68daa9e5d99f5e21f0eb508e5b24724f75a_prof);

        
        $__internal_20723f244dc633eedb5f23d7a905664b0f187c013eeaed2bde42f927094c82bf->leave($__internal_20723f244dc633eedb5f23d7a905664b0f187c013eeaed2bde42f927094c82bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbb0696a2bb14d7d07e72f4ad39051d394ee078da618b6da7d75f193b61883c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb0696a2bb14d7d07e72f4ad39051d394ee078da618b6da7d75f193b61883c2->enter($__internal_fbb0696a2bb14d7d07e72f4ad39051d394ee078da618b6da7d75f193b61883c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccf0d613b911baa38a7b9d6adb9eca8f42f6178bf2b99079918c3d2db96ef675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf0d613b911baa38a7b9d6adb9eca8f42f6178bf2b99079918c3d2db96ef675->enter($__internal_ccf0d613b911baa38a7b9d6adb9eca8f42f6178bf2b99079918c3d2db96ef675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "episodeNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">watch</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_episodeNew", array("id" => $this->getAttribute(($context["tv"] ?? $this->getContext($context, "tv")), "id", array()))), "html", null, true);
        echo "\">Create a new Episode</a>
        </li>
    </ul>
";
        
        $__internal_ccf0d613b911baa38a7b9d6adb9eca8f42f6178bf2b99079918c3d2db96ef675->leave($__internal_ccf0d613b911baa38a7b9d6adb9eca8f42f6178bf2b99079918c3d2db96ef675_prof);

        
        $__internal_fbb0696a2bb14d7d07e72f4ad39051d394ee078da618b6da7d75f193b61883c2->leave($__internal_fbb0696a2bb14d7d07e72f4ad39051d394ee078da618b6da7d75f193b61883c2_prof);

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
        return array (  110 => 36,  103 => 31,  91 => 25,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  65 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        {% for e in episodes %}
            <tr>
                <td>{{ e.name }}</td>
                <td>{{ e.episodeNumber }}</td>
                <td>{{ e.description }}</td>
                <td>{{ e.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_index', { 'id': e.id }) }}\">watch</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('_episodeNew',{'id':tv.id})  }}\">Create a new Episode</a>
        </li>
    </ul>
{% endblock %}", "episode/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/episode/index.html.twig");
    }
}
