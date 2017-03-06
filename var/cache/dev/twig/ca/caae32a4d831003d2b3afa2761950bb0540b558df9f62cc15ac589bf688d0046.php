<?php

/* backend/tvseries/index.html.twig */
class __TwigTemplate_f4564bc3ec4c399ae0aa39a47d6792f43a19eade2d23bc75406dadc1afa87abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend/tvseries/index.html.twig", 1);
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
        $__internal_fe7f7219aa37a46f7015335220a7c654b7dc25d324449cfae01fea048e5b9fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7f7219aa37a46f7015335220a7c654b7dc25d324449cfae01fea048e5b9fc4->enter($__internal_fe7f7219aa37a46f7015335220a7c654b7dc25d324449cfae01fea048e5b9fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/index.html.twig"));

        $__internal_c8eeb3110e412398b5117866cebd7cfac1c3c2d6752c0c7f35ffc81f097b5a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8eeb3110e412398b5117866cebd7cfac1c3c2d6752c0c7f35ffc81f097b5a6e->enter($__internal_c8eeb3110e412398b5117866cebd7cfac1c3c2d6752c0c7f35ffc81f097b5a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe7f7219aa37a46f7015335220a7c654b7dc25d324449cfae01fea048e5b9fc4->leave($__internal_fe7f7219aa37a46f7015335220a7c654b7dc25d324449cfae01fea048e5b9fc4_prof);

        
        $__internal_c8eeb3110e412398b5117866cebd7cfac1c3c2d6752c0c7f35ffc81f097b5a6e->leave($__internal_c8eeb3110e412398b5117866cebd7cfac1c3c2d6752c0c7f35ffc81f097b5a6e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d25b9a18213235a105e635fad3ad66d716182cf3a450aef45152ca4e3283aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d25b9a18213235a105e635fad3ad66d716182cf3a450aef45152ca4e3283aaf->enter($__internal_9d25b9a18213235a105e635fad3ad66d716182cf3a450aef45152ca4e3283aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12099ecf4b17fc0a2fbfccecee0dfca1897ba1308907d595598d2866cffe8f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12099ecf4b17fc0a2fbfccecee0dfca1897ba1308907d595598d2866cffe8f7c->enter($__internal_12099ecf4b17fc0a2fbfccecee0dfca1897ba1308907d595598d2866cffe8f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12099ecf4b17fc0a2fbfccecee0dfca1897ba1308907d595598d2866cffe8f7c->leave($__internal_12099ecf4b17fc0a2fbfccecee0dfca1897ba1308907d595598d2866cffe8f7c_prof);

        
        $__internal_9d25b9a18213235a105e635fad3ad66d716182cf3a450aef45152ca4e3283aaf->leave($__internal_9d25b9a18213235a105e635fad3ad66d716182cf3a450aef45152ca4e3283aaf_prof);

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
{% endblock %}", "backend/tvseries/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/backend/tvseries/index.html.twig");
    }
}
