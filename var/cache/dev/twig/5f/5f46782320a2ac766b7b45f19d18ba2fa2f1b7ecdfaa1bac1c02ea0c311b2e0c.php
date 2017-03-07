<?php

/* tvseries/index.html.twig */
class __TwigTemplate_2b495823bbd9cd8751454083653ccfbf01f1688794cc10866dec25c0031d4ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tvseries/index.html.twig", 1);
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
        $__internal_5181f604d7dbdc8ac03e52576062b873dd1a793b34b774eaf521ac201b19a9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5181f604d7dbdc8ac03e52576062b873dd1a793b34b774eaf521ac201b19a9f4->enter($__internal_5181f604d7dbdc8ac03e52576062b873dd1a793b34b774eaf521ac201b19a9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tvseries/index.html.twig"));

        $__internal_183c70ef61a46db65f251742b902302385a98fe7268ccfbddbbef9f0ebe10cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183c70ef61a46db65f251742b902302385a98fe7268ccfbddbbef9f0ebe10cda->enter($__internal_183c70ef61a46db65f251742b902302385a98fe7268ccfbddbbef9f0ebe10cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tvseries/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5181f604d7dbdc8ac03e52576062b873dd1a793b34b774eaf521ac201b19a9f4->leave($__internal_5181f604d7dbdc8ac03e52576062b873dd1a793b34b774eaf521ac201b19a9f4_prof);

        
        $__internal_183c70ef61a46db65f251742b902302385a98fe7268ccfbddbbef9f0ebe10cda->leave($__internal_183c70ef61a46db65f251742b902302385a98fe7268ccfbddbbef9f0ebe10cda_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed7e3a5de76ca91a53d0f88adbb9d557697efbd9e1f799bc437fae45781f87a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7e3a5de76ca91a53d0f88adbb9d557697efbd9e1f799bc437fae45781f87a3->enter($__internal_ed7e3a5de76ca91a53d0f88adbb9d557697efbd9e1f799bc437fae45781f87a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e3fabd21830dda48cb0a9c76a6344d1a169a5a99e08fbdecf4e8500d70f4853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3fabd21830dda48cb0a9c76a6344d1a169a5a99e08fbdecf4e8500d70f4853->enter($__internal_5e3fabd21830dda48cb0a9c76a6344d1a169a5a99e08fbdecf4e8500d70f4853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tvSeries"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tvSeries"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_episodeIndex", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["tvSeries"], "releasedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tvSeries"], "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "image", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tvSeries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_5e3fabd21830dda48cb0a9c76a6344d1a169a5a99e08fbdecf4e8500d70f4853->leave($__internal_5e3fabd21830dda48cb0a9c76a6344d1a169a5a99e08fbdecf4e8500d70f4853_prof);

        
        $__internal_ed7e3a5de76ca91a53d0f88adbb9d557697efbd9e1f799bc437fae45781f87a3->leave($__internal_ed7e3a5de76ca91a53d0f88adbb9d557697efbd9e1f799bc437fae45781f87a3_prof);

    }

    public function getTemplateName()
    {
        return "tvseries/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  93 => 24,  89 => 23,  83 => 22,  79 => 21,  73 => 20,  70 => 19,  66 => 18,  49 => 3,  40 => 2,  11 => 1,);
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
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}


", "tvseries/index.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/tvseries/index.html.twig");
    }
}
