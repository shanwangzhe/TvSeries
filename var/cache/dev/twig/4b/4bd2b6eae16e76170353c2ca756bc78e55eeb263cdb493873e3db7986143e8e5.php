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
        $__internal_723b749c608ccb4f100f54d00ac3bcba8bd7688c8af0ba1938cd2042f7d79c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723b749c608ccb4f100f54d00ac3bcba8bd7688c8af0ba1938cd2042f7d79c22->enter($__internal_723b749c608ccb4f100f54d00ac3bcba8bd7688c8af0ba1938cd2042f7d79c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_1c01ffa301bbec5655e8e570119b39d389e60688a7e5285e8c829598da52d56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c01ffa301bbec5655e8e570119b39d389e60688a7e5285e8c829598da52d56d->enter($__internal_1c01ffa301bbec5655e8e570119b39d389e60688a7e5285e8c829598da52d56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723b749c608ccb4f100f54d00ac3bcba8bd7688c8af0ba1938cd2042f7d79c22->leave($__internal_723b749c608ccb4f100f54d00ac3bcba8bd7688c8af0ba1938cd2042f7d79c22_prof);

        
        $__internal_1c01ffa301bbec5655e8e570119b39d389e60688a7e5285e8c829598da52d56d->leave($__internal_1c01ffa301bbec5655e8e570119b39d389e60688a7e5285e8c829598da52d56d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d58080aea5707e6860b28ef7ef57b6127b9afd63c20d54b5bc6b9c344ca50966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58080aea5707e6860b28ef7ef57b6127b9afd63c20d54b5bc6b9c344ca50966->enter($__internal_d58080aea5707e6860b28ef7ef57b6127b9afd63c20d54b5bc6b9c344ca50966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7692a531da669533383a3288bc0ddc675152cd11ee02e48d1f2fb78e3abd9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7692a531da669533383a3288bc0ddc675152cd11ee02e48d1f2fb78e3abd9d1->enter($__internal_a7692a531da669533383a3288bc0ddc675152cd11ee02e48d1f2fb78e3abd9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
";
        
        $__internal_a7692a531da669533383a3288bc0ddc675152cd11ee02e48d1f2fb78e3abd9d1->leave($__internal_a7692a531da669533383a3288bc0ddc675152cd11ee02e48d1f2fb78e3abd9d1_prof);

        
        $__internal_d58080aea5707e6860b28ef7ef57b6127b9afd63c20d54b5bc6b9c344ca50966->leave($__internal_d58080aea5707e6860b28ef7ef57b6127b9afd63c20d54b5bc6b9c344ca50966_prof);

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
        return array (  103 => 31,  91 => 25,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  65 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
{% endblock %}", "episode/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/episode/index.html.twig");
    }
}
