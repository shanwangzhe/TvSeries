<?php

/* backend/episode/index.html.twig */
class __TwigTemplate_4e3b55c32fbbb8b25713908597aa738a4d0707a458e3bb7236da262101393060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/episode/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd1361f74e28d875343bce1c20e7e2a25fd484254979c3b2988d52bf6dd3bc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1361f74e28d875343bce1c20e7e2a25fd484254979c3b2988d52bf6dd3bc04->enter($__internal_fd1361f74e28d875343bce1c20e7e2a25fd484254979c3b2988d52bf6dd3bc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/index.html.twig"));

        $__internal_d63797c0bb74e0bfcbdd096d03595d02ce0d230e2d0e390053283b97b5c20a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63797c0bb74e0bfcbdd096d03595d02ce0d230e2d0e390053283b97b5c20a61->enter($__internal_d63797c0bb74e0bfcbdd096d03595d02ce0d230e2d0e390053283b97b5c20a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd1361f74e28d875343bce1c20e7e2a25fd484254979c3b2988d52bf6dd3bc04->leave($__internal_fd1361f74e28d875343bce1c20e7e2a25fd484254979c3b2988d52bf6dd3bc04_prof);

        
        $__internal_d63797c0bb74e0bfcbdd096d03595d02ce0d230e2d0e390053283b97b5c20a61->leave($__internal_d63797c0bb74e0bfcbdd096d03595d02ce0d230e2d0e390053283b97b5c20a61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6621235c1aa47f1b885473c9b061805ef9cea96dd84149d1b2db1cc99e06841c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6621235c1aa47f1b885473c9b061805ef9cea96dd84149d1b2db1cc99e06841c->enter($__internal_6621235c1aa47f1b885473c9b061805ef9cea96dd84149d1b2db1cc99e06841c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_150027a91c48c668192b0a3d325c5c3fb13bea9f28b0c93c48ddec55e28ce0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150027a91c48c668192b0a3d325c5c3fb13bea9f28b0c93c48ddec55e28ce0d5->enter($__internal_150027a91c48c668192b0a3d325c5c3fb13bea9f28b0c93c48ddec55e28ce0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <td><a href=";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "image", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "image", array()), "html", null, true);
            echo "</a></td>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AENew", array("id" => $this->getAttribute(($context["tv"] ?? $this->getContext($context, "tv")), "id", array()))), "html", null, true);
        echo "\">Create a new Episode</a>
        </li>
    </ul>
";
        
        $__internal_150027a91c48c668192b0a3d325c5c3fb13bea9f28b0c93c48ddec55e28ce0d5->leave($__internal_150027a91c48c668192b0a3d325c5c3fb13bea9f28b0c93c48ddec55e28ce0d5_prof);

        
        $__internal_6621235c1aa47f1b885473c9b061805ef9cea96dd84149d1b2db1cc99e06841c->leave($__internal_6621235c1aa47f1b885473c9b061805ef9cea96dd84149d1b2db1cc99e06841c_prof);

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
        return array (  112 => 36,  105 => 31,  93 => 25,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  65 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backend.html.twig' %}

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
                <td><a href={{ e.image }}>{{ e.image }}</a></td>
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
            <a href=\"{{ path('_AENew',{'id':tv.id})  }}\">Create a new Episode</a>
        </li>
    </ul>
{% endblock %}", "backend/episode/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/episode/index.html.twig");
    }
}
