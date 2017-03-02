<?php

/* default/index.html.twig */
class __TwigTemplate_95037066e25c238379d2683ef141d26d9c743b9e8fa6f9f69f4798984d6b1243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_94131566bad1a7e94a83dc38079527eec596b0479e4cf1e9fa2e6666b081e660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94131566bad1a7e94a83dc38079527eec596b0479e4cf1e9fa2e6666b081e660->enter($__internal_94131566bad1a7e94a83dc38079527eec596b0479e4cf1e9fa2e6666b081e660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_945980cfc49c68ce0bffe501c0a986e49b913c30cf11c7b022d7dcc291c91b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945980cfc49c68ce0bffe501c0a986e49b913c30cf11c7b022d7dcc291c91b6d->enter($__internal_945980cfc49c68ce0bffe501c0a986e49b913c30cf11c7b022d7dcc291c91b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94131566bad1a7e94a83dc38079527eec596b0479e4cf1e9fa2e6666b081e660->leave($__internal_94131566bad1a7e94a83dc38079527eec596b0479e4cf1e9fa2e6666b081e660_prof);

        
        $__internal_945980cfc49c68ce0bffe501c0a986e49b913c30cf11c7b022d7dcc291c91b6d->leave($__internal_945980cfc49c68ce0bffe501c0a986e49b913c30cf11c7b022d7dcc291c91b6d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_be2c9821cd82cd61203addf2aa35942d1a0df20239527cd5bd642062b97978dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2c9821cd82cd61203addf2aa35942d1a0df20239527cd5bd642062b97978dc->enter($__internal_be2c9821cd82cd61203addf2aa35942d1a0df20239527cd5bd642062b97978dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91449ce21fd8744dd8c8d972c02ff366e6119c2566398a0f31784b642316224e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91449ce21fd8744dd8c8d972c02ff366e6119c2566398a0f31784b642316224e->enter($__internal_91449ce21fd8744dd8c8d972c02ff366e6119c2566398a0f31784b642316224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div>
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
            echo "        <tr>
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
        echo "    </tbody>
</table>
";
        
        $__internal_91449ce21fd8744dd8c8d972c02ff366e6119c2566398a0f31784b642316224e->leave($__internal_91449ce21fd8744dd8c8d972c02ff366e6119c2566398a0f31784b642316224e_prof);

        
        $__internal_be2c9821cd82cd61203addf2aa35942d1a0df20239527cd5bd642062b97978dc->leave($__internal_be2c9821cd82cd61203addf2aa35942d1a0df20239527cd5bd642062b97978dc_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  101 => 29,  94 => 25,  90 => 24,  84 => 23,  80 => 22,  74 => 21,  71 => 20,  67 => 19,  49 => 3,  40 => 2,  11 => 1,);
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
{% endblock %}


", "default/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/default/index.html.twig");
    }
}
