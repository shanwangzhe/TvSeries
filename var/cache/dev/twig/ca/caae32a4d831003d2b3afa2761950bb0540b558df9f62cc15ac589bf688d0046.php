<?php

/* backend/tvseries/index.html.twig */
class __TwigTemplate_f4564bc3ec4c399ae0aa39a47d6792f43a19eade2d23bc75406dadc1afa87abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/tvseries/index.html.twig", 1);
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
        $__internal_51bbe1d8dacf91d0899d3353ef16c4c16656ed38482a71c10eb21d2fa9efc50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bbe1d8dacf91d0899d3353ef16c4c16656ed38482a71c10eb21d2fa9efc50a->enter($__internal_51bbe1d8dacf91d0899d3353ef16c4c16656ed38482a71c10eb21d2fa9efc50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/index.html.twig"));

        $__internal_e949493c496ec3f925e40bb990239c8812acefa5c88d51b3955856f9ac36f0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e949493c496ec3f925e40bb990239c8812acefa5c88d51b3955856f9ac36f0f1->enter($__internal_e949493c496ec3f925e40bb990239c8812acefa5c88d51b3955856f9ac36f0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51bbe1d8dacf91d0899d3353ef16c4c16656ed38482a71c10eb21d2fa9efc50a->leave($__internal_51bbe1d8dacf91d0899d3353ef16c4c16656ed38482a71c10eb21d2fa9efc50a_prof);

        
        $__internal_e949493c496ec3f925e40bb990239c8812acefa5c88d51b3955856f9ac36f0f1->leave($__internal_e949493c496ec3f925e40bb990239c8812acefa5c88d51b3955856f9ac36f0f1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2aa988900f6ead99583dfc90cefc012a482de866efab076c6dd08e83b10d1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2aa988900f6ead99583dfc90cefc012a482de866efab076c6dd08e83b10d1f0->enter($__internal_c2aa988900f6ead99583dfc90cefc012a482de866efab076c6dd08e83b10d1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4efc2cc7222a651e9511443b742e9885b0a2a1b26ebbf8d7c12db36633692443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efc2cc7222a651e9511443b742e9885b0a2a1b26ebbf8d7c12db36633692443->enter($__internal_4efc2cc7222a651e9511443b742e9885b0a2a1b26ebbf8d7c12db36633692443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEIndex", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
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
        
        $__internal_4efc2cc7222a651e9511443b742e9885b0a2a1b26ebbf8d7c12db36633692443->leave($__internal_4efc2cc7222a651e9511443b742e9885b0a2a1b26ebbf8d7c12db36633692443_prof);

        
        $__internal_c2aa988900f6ead99583dfc90cefc012a482de866efab076c6dd08e83b10d1f0->leave($__internal_c2aa988900f6ead99583dfc90cefc012a482de866efab076c6dd08e83b10d1f0_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/index.html.twig";
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
        return new Twig_Source("{% extends 'backend.html.twig' %}
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
                <td><a href=\"{{ path('_AEIndex', { 'id': tvSeries.id }) }}\">{{ tvSeries.name }}</a></td>
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
{% endblock %}", "backend/tvseries/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/tvseries/index.html.twig");
    }
}
