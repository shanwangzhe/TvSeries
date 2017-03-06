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
        $__internal_57348425be4af0465a2688f242655bfa58e2b4f52ccd1805de8dc54b583ebac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57348425be4af0465a2688f242655bfa58e2b4f52ccd1805de8dc54b583ebac3->enter($__internal_57348425be4af0465a2688f242655bfa58e2b4f52ccd1805de8dc54b583ebac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_549a2b2b546c2f909295e8b6fd6da5b64ac05dce031d68e3a6be8488185539ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549a2b2b546c2f909295e8b6fd6da5b64ac05dce031d68e3a6be8488185539ec->enter($__internal_549a2b2b546c2f909295e8b6fd6da5b64ac05dce031d68e3a6be8488185539ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57348425be4af0465a2688f242655bfa58e2b4f52ccd1805de8dc54b583ebac3->leave($__internal_57348425be4af0465a2688f242655bfa58e2b4f52ccd1805de8dc54b583ebac3_prof);

        
        $__internal_549a2b2b546c2f909295e8b6fd6da5b64ac05dce031d68e3a6be8488185539ec->leave($__internal_549a2b2b546c2f909295e8b6fd6da5b64ac05dce031d68e3a6be8488185539ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a2e4fa7ad32bf8c81b7c5bf70bdd65d805974f4f190c9d5799a7c905fa68a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2e4fa7ad32bf8c81b7c5bf70bdd65d805974f4f190c9d5799a7c905fa68a3e->enter($__internal_2a2e4fa7ad32bf8c81b7c5bf70bdd65d805974f4f190c9d5799a7c905fa68a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a2e619564df2ff377981fa27e7e2a9aec6d14f38eea98a218096066455ee10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2e619564df2ff377981fa27e7e2a9aec6d14f38eea98a218096066455ee10d->enter($__internal_2a2e619564df2ff377981fa27e7e2a9aec6d14f38eea98a218096066455ee10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeNew", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
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
        
        $__internal_2a2e619564df2ff377981fa27e7e2a9aec6d14f38eea98a218096066455ee10d->leave($__internal_2a2e619564df2ff377981fa27e7e2a9aec6d14f38eea98a218096066455ee10d_prof);

        
        $__internal_2a2e4fa7ad32bf8c81b7c5bf70bdd65d805974f4f190c9d5799a7c905fa68a3e->leave($__internal_2a2e4fa7ad32bf8c81b7c5bf70bdd65d805974f4f190c9d5799a7c905fa68a3e_prof);

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
                            <a href=\"{{ path('_userEpisodeNew', { 'id': e.id }) }}\">watch</a>
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
