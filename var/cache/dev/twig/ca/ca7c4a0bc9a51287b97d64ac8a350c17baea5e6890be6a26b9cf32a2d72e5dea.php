<?php

/* userEpisode/index.html.twig */
class __TwigTemplate_968154c872488da3d7e9621c85104a45c98d26ab05851514a9254e0479034b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "userEpisode/index.html.twig", 1);
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
        $__internal_8151e214ea70927286ab8d1ffd56c6473a353f8bc11ac8d953cca3025f0c3ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8151e214ea70927286ab8d1ffd56c6473a353f8bc11ac8d953cca3025f0c3ba1->enter($__internal_8151e214ea70927286ab8d1ffd56c6473a353f8bc11ac8d953cca3025f0c3ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/index.html.twig"));

        $__internal_a03ec365159d259dffb71a38586c2c9379e5cb4895cf048c180571c258e2ae18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03ec365159d259dffb71a38586c2c9379e5cb4895cf048c180571c258e2ae18->enter($__internal_a03ec365159d259dffb71a38586c2c9379e5cb4895cf048c180571c258e2ae18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8151e214ea70927286ab8d1ffd56c6473a353f8bc11ac8d953cca3025f0c3ba1->leave($__internal_8151e214ea70927286ab8d1ffd56c6473a353f8bc11ac8d953cca3025f0c3ba1_prof);

        
        $__internal_a03ec365159d259dffb71a38586c2c9379e5cb4895cf048c180571c258e2ae18->leave($__internal_a03ec365159d259dffb71a38586c2c9379e5cb4895cf048c180571c258e2ae18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4719c660912b76328acd317c3c1753da38f47e82ef5b787a9aea0d35e2ab579c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4719c660912b76328acd317c3c1753da38f47e82ef5b787a9aea0d35e2ab579c->enter($__internal_4719c660912b76328acd317c3c1753da38f47e82ef5b787a9aea0d35e2ab579c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23ef2d1623732453d9cdece4f2a80129db8f51b689dcfe707a2b6266e0e77881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ef2d1623732453d9cdece4f2a80129db8f51b689dcfe707a2b6266e0e77881->enter($__internal_23ef2d1623732453d9cdece4f2a80129db8f51b689dcfe707a2b6266e0e77881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>History</h1>

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
        $context['_seq'] = twig_ensure_traversable(($context["userEpisodes"] ?? $this->getContext($context, "userEpisodes")));
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
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeDelete", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">delete</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
";
        
        $__internal_23ef2d1623732453d9cdece4f2a80129db8f51b689dcfe707a2b6266e0e77881->leave($__internal_23ef2d1623732453d9cdece4f2a80129db8f51b689dcfe707a2b6266e0e77881_prof);

        
        $__internal_4719c660912b76328acd317c3c1753da38f47e82ef5b787a9aea0d35e2ab579c->leave($__internal_4719c660912b76328acd317c3c1753da38f47e82ef5b787a9aea0d35e2ab579c_prof);

    }

    public function getTemplateName()
    {
        return "userEpisode/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  99 => 32,  89 => 25,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>History</h1>

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
        {% for e in userEpisodes %}
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
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_userEpisodeDelete', { 'id': e.id }) }}\">delete</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "userEpisode/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/userEpisode/index.html.twig");
    }
}
