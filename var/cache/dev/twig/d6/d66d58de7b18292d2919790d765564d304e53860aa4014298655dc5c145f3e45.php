<?php

/* admin/index.html.twig */
class __TwigTemplate_8022fa8c8368fe06b75bcdfcc1b22a96b67f327d718a2f403f57357a6bbe0721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_ee67f5636f4e5b7aa6ff35984e6df69b3a51a9907a09d993e42029154d6aabcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee67f5636f4e5b7aa6ff35984e6df69b3a51a9907a09d993e42029154d6aabcd->enter($__internal_ee67f5636f4e5b7aa6ff35984e6df69b3a51a9907a09d993e42029154d6aabcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_ada05bf6b7e4dd42cc8688e3c61041bbd62487eb0a9055239206f465e22900ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada05bf6b7e4dd42cc8688e3c61041bbd62487eb0a9055239206f465e22900ce->enter($__internal_ada05bf6b7e4dd42cc8688e3c61041bbd62487eb0a9055239206f465e22900ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee67f5636f4e5b7aa6ff35984e6df69b3a51a9907a09d993e42029154d6aabcd->leave($__internal_ee67f5636f4e5b7aa6ff35984e6df69b3a51a9907a09d993e42029154d6aabcd_prof);

        
        $__internal_ada05bf6b7e4dd42cc8688e3c61041bbd62487eb0a9055239206f465e22900ce->leave($__internal_ada05bf6b7e4dd42cc8688e3c61041bbd62487eb0a9055239206f465e22900ce_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_94f471fda11f61f78c2710b98d54ed979f2509a70e74d42cdb8373076079183f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f471fda11f61f78c2710b98d54ed979f2509a70e74d42cdb8373076079183f->enter($__internal_94f471fda11f61f78c2710b98d54ed979f2509a70e74d42cdb8373076079183f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffb89f40c84ccb22d735874abba6468b5403015c86848ac65e47cde5eb691bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb89f40c84ccb22d735874abba6468b5403015c86848ac65e47cde5eb691bef->enter($__internal_ffb89f40c84ccb22d735874abba6468b5403015c86848ac65e47cde5eb691bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ffb89f40c84ccb22d735874abba6468b5403015c86848ac65e47cde5eb691bef->leave($__internal_ffb89f40c84ccb22d735874abba6468b5403015c86848ac65e47cde5eb691bef_prof);

        
        $__internal_94f471fda11f61f78c2710b98d54ed979f2509a70e74d42cdb8373076079183f->leave($__internal_94f471fda11f61f78c2710b98d54ed979f2509a70e74d42cdb8373076079183f_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
{% endblock %}", "admin/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/admin/index.html.twig");
    }
}
