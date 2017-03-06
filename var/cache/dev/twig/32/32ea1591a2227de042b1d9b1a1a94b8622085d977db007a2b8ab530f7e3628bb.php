<?php

/* admin/tvseries/index.html.twig */
class __TwigTemplate_3759d99baa690bd9161f2e7b7fe2ec41220351169b16426212e574340b80bc15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/tvseries/index.html.twig", 1);
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
        $__internal_6a697afc08d0752a757e4919ef015e9affa5378aeb1b6b5138cec58f15d4cbd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a697afc08d0752a757e4919ef015e9affa5378aeb1b6b5138cec58f15d4cbd8->enter($__internal_6a697afc08d0752a757e4919ef015e9affa5378aeb1b6b5138cec58f15d4cbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tvseries/index.html.twig"));

        $__internal_f441b5bc8d3b904831c583c27ef061322a4be5bcf3fcf368018ee7d3c78c2429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f441b5bc8d3b904831c583c27ef061322a4be5bcf3fcf368018ee7d3c78c2429->enter($__internal_f441b5bc8d3b904831c583c27ef061322a4be5bcf3fcf368018ee7d3c78c2429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tvseries/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a697afc08d0752a757e4919ef015e9affa5378aeb1b6b5138cec58f15d4cbd8->leave($__internal_6a697afc08d0752a757e4919ef015e9affa5378aeb1b6b5138cec58f15d4cbd8_prof);

        
        $__internal_f441b5bc8d3b904831c583c27ef061322a4be5bcf3fcf368018ee7d3c78c2429->leave($__internal_f441b5bc8d3b904831c583c27ef061322a4be5bcf3fcf368018ee7d3c78c2429_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_084a1c0827320ceda63da15585a576b187013601c1dec07402b998e0bb7839a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084a1c0827320ceda63da15585a576b187013601c1dec07402b998e0bb7839a5->enter($__internal_084a1c0827320ceda63da15585a576b187013601c1dec07402b998e0bb7839a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09ab5a81530ba052518e23c2fc22c3dac42ad328398109fb0e7a49e2a74c467c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ab5a81530ba052518e23c2fc22c3dac42ad328398109fb0e7a49e2a74c467c->enter($__internal_09ab5a81530ba052518e23c2fc22c3dac42ad328398109fb0e7a49e2a74c467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div>
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
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tvSeries"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tvSeries"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_episodeIndex", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["tvSeries"], "releasedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tvSeries"], "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tvSeries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_new");
        echo "\">Create a new tvSeries</a>
        </li>
    </ul>
";
        
        $__internal_09ab5a81530ba052518e23c2fc22c3dac42ad328398109fb0e7a49e2a74c467c->leave($__internal_09ab5a81530ba052518e23c2fc22c3dac42ad328398109fb0e7a49e2a74c467c_prof);

        
        $__internal_084a1c0827320ceda63da15585a576b187013601c1dec07402b998e0bb7839a5->leave($__internal_084a1c0827320ceda63da15585a576b187013601c1dec07402b998e0bb7839a5_prof);

    }

    public function getTemplateName()
    {
        return "admin/tvseries/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  113 => 35,  101 => 29,  94 => 25,  90 => 24,  84 => 23,  80 => 22,  74 => 21,  71 => 20,  67 => 19,  49 => 3,  40 => 2,  11 => 1,);
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
            <th>Actions</th>
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
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_show', { 'id': tvSeries.id }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('_new') }}\">Create a new tvSeries</a>
        </li>
    </ul>
{% endblock %}", "admin/tvseries/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/admin/tvseries/index.html.twig");
    }
}
