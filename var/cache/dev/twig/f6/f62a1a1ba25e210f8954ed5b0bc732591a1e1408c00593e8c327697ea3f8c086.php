<?php

/* backend/episode/index.html.twig */
class __TwigTemplate_4e3b55c32fbbb8b25713908597aa738a4d0707a458e3bb7236da262101393060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend/episode/index.html.twig", 1);
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
        $__internal_ebd44aaf3c45c671aa4266857f2cfae75700a0fc1922a702a3c6634abdd1672b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd44aaf3c45c671aa4266857f2cfae75700a0fc1922a702a3c6634abdd1672b->enter($__internal_ebd44aaf3c45c671aa4266857f2cfae75700a0fc1922a702a3c6634abdd1672b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/index.html.twig"));

        $__internal_28385703990dc1400fc1730d6c382b4ba97300cb32b967222141a74f12d27a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28385703990dc1400fc1730d6c382b4ba97300cb32b967222141a74f12d27a21->enter($__internal_28385703990dc1400fc1730d6c382b4ba97300cb32b967222141a74f12d27a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd44aaf3c45c671aa4266857f2cfae75700a0fc1922a702a3c6634abdd1672b->leave($__internal_ebd44aaf3c45c671aa4266857f2cfae75700a0fc1922a702a3c6634abdd1672b_prof);

        
        $__internal_28385703990dc1400fc1730d6c382b4ba97300cb32b967222141a74f12d27a21->leave($__internal_28385703990dc1400fc1730d6c382b4ba97300cb32b967222141a74f12d27a21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80ccacf335c45e871a355bb82b086d34f6111b66fdeabcaf72c02dc9c8f0d641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ccacf335c45e871a355bb82b086d34f6111b66fdeabcaf72c02dc9c8f0d641->enter($__internal_80ccacf335c45e871a355bb82b086d34f6111b66fdeabcaf72c02dc9c8f0d641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b71f85adab4d0c27637e7b07f16413148ebf1b4bf83cd45faaf3e38f8121390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b71f85adab4d0c27637e7b07f16413148ebf1b4bf83cd45faaf3e38f8121390->enter($__internal_4b71f85adab4d0c27637e7b07f16413148ebf1b4bf83cd45faaf3e38f8121390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEShow", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">show</a>
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
        
        $__internal_4b71f85adab4d0c27637e7b07f16413148ebf1b4bf83cd45faaf3e38f8121390->leave($__internal_4b71f85adab4d0c27637e7b07f16413148ebf1b4bf83cd45faaf3e38f8121390_prof);

        
        $__internal_80ccacf335c45e871a355bb82b086d34f6111b66fdeabcaf72c02dc9c8f0d641->leave($__internal_80ccacf335c45e871a355bb82b086d34f6111b66fdeabcaf72c02dc9c8f0d641_prof);

    }

    public function getTemplateName()
    {
        return "backend/episode/index.html.twig";
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
                            <a href=\"{{ path('_AEShow', { 'id': e.id }) }}\">show</a>
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
{% endblock %}", "backend/episode/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/backend/episode/index.html.twig");
    }
}
