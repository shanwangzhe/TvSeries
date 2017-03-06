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
        $__internal_ca614fd5d53ba7a83dd9cb16ea0680ceee23562695f29cb9360d678abecb7b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca614fd5d53ba7a83dd9cb16ea0680ceee23562695f29cb9360d678abecb7b80->enter($__internal_ca614fd5d53ba7a83dd9cb16ea0680ceee23562695f29cb9360d678abecb7b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_ebb8e38654ece13ceb06178b28787be10a0a8bf7c05df773a5b217d266a0674b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb8e38654ece13ceb06178b28787be10a0a8bf7c05df773a5b217d266a0674b->enter($__internal_ebb8e38654ece13ceb06178b28787be10a0a8bf7c05df773a5b217d266a0674b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca614fd5d53ba7a83dd9cb16ea0680ceee23562695f29cb9360d678abecb7b80->leave($__internal_ca614fd5d53ba7a83dd9cb16ea0680ceee23562695f29cb9360d678abecb7b80_prof);

        
        $__internal_ebb8e38654ece13ceb06178b28787be10a0a8bf7c05df773a5b217d266a0674b->leave($__internal_ebb8e38654ece13ceb06178b28787be10a0a8bf7c05df773a5b217d266a0674b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9181392f318d0bf962fc29a48514a4b33325a3ddcdeca6cb3509c00aacfd6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9181392f318d0bf962fc29a48514a4b33325a3ddcdeca6cb3509c00aacfd6fc->enter($__internal_c9181392f318d0bf962fc29a48514a4b33325a3ddcdeca6cb3509c00aacfd6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0090c4df189a00b90053aeccb9ab37b405536f8aa104810945fb500cc1fd4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0090c4df189a00b90053aeccb9ab37b405536f8aa104810945fb500cc1fd4bd->enter($__internal_c0090c4df189a00b90053aeccb9ab37b405536f8aa104810945fb500cc1fd4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0090c4df189a00b90053aeccb9ab37b405536f8aa104810945fb500cc1fd4bd->leave($__internal_c0090c4df189a00b90053aeccb9ab37b405536f8aa104810945fb500cc1fd4bd_prof);

        
        $__internal_c9181392f318d0bf962fc29a48514a4b33325a3ddcdeca6cb3509c00aacfd6fc->leave($__internal_c9181392f318d0bf962fc29a48514a4b33325a3ddcdeca6cb3509c00aacfd6fc_prof);

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
{% endblock %}", "episode/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/episode/index.html.twig");
    }
}
