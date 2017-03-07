<?php

/* backend/tvseries/show.html.twig */
class __TwigTemplate_6de8d24ea017548929e36c53d35f64b37ffa9c43827a508fa440230b97f2dd85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/tvseries/show.html.twig", 1);
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
        $__internal_99f0afba80dedd9ac0294b5b3b1bfda18d4fb1c3c495ca3e48a5a67545ebb711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f0afba80dedd9ac0294b5b3b1bfda18d4fb1c3c495ca3e48a5a67545ebb711->enter($__internal_99f0afba80dedd9ac0294b5b3b1bfda18d4fb1c3c495ca3e48a5a67545ebb711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/show.html.twig"));

        $__internal_326de6e75aa53ba77c5b0f9b55e0f377a9df2b815a4e3c241c42d4126cc6a148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326de6e75aa53ba77c5b0f9b55e0f377a9df2b815a4e3c241c42d4126cc6a148->enter($__internal_326de6e75aa53ba77c5b0f9b55e0f377a9df2b815a4e3c241c42d4126cc6a148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f0afba80dedd9ac0294b5b3b1bfda18d4fb1c3c495ca3e48a5a67545ebb711->leave($__internal_99f0afba80dedd9ac0294b5b3b1bfda18d4fb1c3c495ca3e48a5a67545ebb711_prof);

        
        $__internal_326de6e75aa53ba77c5b0f9b55e0f377a9df2b815a4e3c241c42d4126cc6a148->leave($__internal_326de6e75aa53ba77c5b0f9b55e0f377a9df2b815a4e3c241c42d4126cc6a148_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe318a18d9ec55760aa73af4fec0c2c4b69b7743749b662767d3ad8ea5914b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe318a18d9ec55760aa73af4fec0c2c4b69b7743749b662767d3ad8ea5914b37->enter($__internal_fe318a18d9ec55760aa73af4fec0c2c4b69b7743749b662767d3ad8ea5914b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5726ea1da9bd98ad7bb006080a45fe23d6eb157020e10f4f640fb188ec9afc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5726ea1da9bd98ad7bb006080a45fe23d6eb157020e10f4f640fb188ec9afc2d->enter($__internal_5726ea1da9bd98ad7bb006080a45fe23d6eb157020e10f4f640fb188ec9afc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tvseries</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "author", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Releasedat</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "releasedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5726ea1da9bd98ad7bb006080a45fe23d6eb157020e10f4f640fb188ec9afc2d->leave($__internal_5726ea1da9bd98ad7bb006080a45fe23d6eb157020e10f4f640fb188ec9afc2d_prof);

        
        $__internal_fe318a18d9ec55760aa73af4fec0c2c4b69b7743749b662767d3ad8ea5914b37->leave($__internal_fe318a18d9ec55760aa73af4fec0c2c4b69b7743749b662767d3ad8ea5914b37_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 43,  110 => 40,  104 => 37,  94 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tvseries</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ tvSeries.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ tvSeries.name }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ tvSeries.author }}</td>
            </tr>
            <tr>
                <th>Releasedat</th>
                <td>{% if tvSeries.releasedAt %}{{ tvSeries.releasedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ tvSeries.description }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ tvSeries.image }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('_adminIndex') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_edit', { 'id': tvSeries.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "backend/tvseries/show.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/tvseries/show.html.twig");
    }
}
