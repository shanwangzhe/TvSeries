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
        $__internal_b9da7fbdab4c561ef8e8932311856067053b02ecb6c3b703dadf6f87506d7092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9da7fbdab4c561ef8e8932311856067053b02ecb6c3b703dadf6f87506d7092->enter($__internal_b9da7fbdab4c561ef8e8932311856067053b02ecb6c3b703dadf6f87506d7092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/index.html.twig"));

        $__internal_cdbcc3343df09fb730bb7498239588404489347fca42cd4bec309aaf256150e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbcc3343df09fb730bb7498239588404489347fca42cd4bec309aaf256150e2->enter($__internal_cdbcc3343df09fb730bb7498239588404489347fca42cd4bec309aaf256150e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9da7fbdab4c561ef8e8932311856067053b02ecb6c3b703dadf6f87506d7092->leave($__internal_b9da7fbdab4c561ef8e8932311856067053b02ecb6c3b703dadf6f87506d7092_prof);

        
        $__internal_cdbcc3343df09fb730bb7498239588404489347fca42cd4bec309aaf256150e2->leave($__internal_cdbcc3343df09fb730bb7498239588404489347fca42cd4bec309aaf256150e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a422883b2a6706286e79f5b63318577e91a17a9c82f39a214b21ce877d7c3c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a422883b2a6706286e79f5b63318577e91a17a9c82f39a214b21ce877d7c3c21->enter($__internal_a422883b2a6706286e79f5b63318577e91a17a9c82f39a214b21ce877d7c3c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d4927f78bad1a7bb97f74546ac3a076dc28e298f38158150a050ccbbfdb632a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4927f78bad1a7bb97f74546ac3a076dc28e298f38158150a050ccbbfdb632a->enter($__internal_8d4927f78bad1a7bb97f74546ac3a076dc28e298f38158150a050ccbbfdb632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>History</h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>EpisodeNumber</th>
            <th>Description</th>
            <th>watchedAt</th>
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
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeNew", array("id" => $this->getAttribute($context["e"], "episode_id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</a></td>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "watched", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
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
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_8d4927f78bad1a7bb97f74546ac3a076dc28e298f38158150a050ccbbfdb632a->leave($__internal_8d4927f78bad1a7bb97f74546ac3a076dc28e298f38158150a050ccbbfdb632a_prof);

        
        $__internal_a422883b2a6706286e79f5b63318577e91a17a9c82f39a214b21ce877d7c3c21->leave($__internal_a422883b2a6706286e79f5b63318577e91a17a9c82f39a214b21ce877d7c3c21_prof);

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
        return array (  103 => 31,  91 => 25,  84 => 21,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
            <th>watchedAt</th>
        </tr>
        </thead>
        <tbody>
        {% for e in userEpisodes %}
            <tr>
                <td><a href=\"{{ path('_userEpisodeNew', { 'id': e.episode_id }) }}\">{{ e.name }}</a></td>
                <td>{{ e.episodeNumber }}</td>
                <td>{{ e.description }}</td>
                <td>{{ e.watched }}</td>
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
{% endblock %}", "userEpisode/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/userEpisode/index.html.twig");
    }
}
