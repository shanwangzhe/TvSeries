<?php

/* backend/episode/show.html.twig */
class __TwigTemplate_a481d8da0053880a2e28229da63574cbf240d7e363f39e1031e697efd237c008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/episode/show.html.twig", 1);
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
        $__internal_d58a182877cb285f602fc1c5bb0fedfd5f7c67bec6038d6334c46cca6c30b139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58a182877cb285f602fc1c5bb0fedfd5f7c67bec6038d6334c46cca6c30b139->enter($__internal_d58a182877cb285f602fc1c5bb0fedfd5f7c67bec6038d6334c46cca6c30b139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/show.html.twig"));

        $__internal_8925895df344ceb1c13f2a11582f4b6502a6036cd3d9b5a59c66f5db2e4b9fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8925895df344ceb1c13f2a11582f4b6502a6036cd3d9b5a59c66f5db2e4b9fc0->enter($__internal_8925895df344ceb1c13f2a11582f4b6502a6036cd3d9b5a59c66f5db2e4b9fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d58a182877cb285f602fc1c5bb0fedfd5f7c67bec6038d6334c46cca6c30b139->leave($__internal_d58a182877cb285f602fc1c5bb0fedfd5f7c67bec6038d6334c46cca6c30b139_prof);

        
        $__internal_8925895df344ceb1c13f2a11582f4b6502a6036cd3d9b5a59c66f5db2e4b9fc0->leave($__internal_8925895df344ceb1c13f2a11582f4b6502a6036cd3d9b5a59c66f5db2e4b9fc0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_055b353532915b8dffcd7a235a05908e24d7046c627f21af15e66edd8d3e458d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055b353532915b8dffcd7a235a05908e24d7046c627f21af15e66edd8d3e458d->enter($__internal_055b353532915b8dffcd7a235a05908e24d7046c627f21af15e66edd8d3e458d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af6636b62fb7b516376d7817586291a4a8ae89053de7fb629d8bdaef679ffcfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6636b62fb7b516376d7817586291a4a8ae89053de7fb629d8bdaef679ffcfd->enter($__internal_af6636b62fb7b516376d7817586291a4a8ae89053de7fb629d8bdaef679ffcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "name", array()), "html", null, true);
        echo "</h1>

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
            <th>Description</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "image", array()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEIndex", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "tvSeriesId", array()))), "html", null, true);
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEEdit", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_af6636b62fb7b516376d7817586291a4a8ae89053de7fb629d8bdaef679ffcfd->leave($__internal_af6636b62fb7b516376d7817586291a4a8ae89053de7fb629d8bdaef679ffcfd_prof);

        
        $__internal_055b353532915b8dffcd7a235a05908e24d7046c627f21af15e66edd8d3e458d->leave($__internal_055b353532915b8dffcd7a235a05908e24d7046c627f21af15e66edd8d3e458d_prof);

    }

    public function getTemplateName()
    {
        return "backend/episode/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  80 => 22,  73 => 18,  66 => 14,  59 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{ tvSeries.name }}</h1>

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
            <a href=\"{{ path('_AEIndex',{'id':tvSeries.tvSeriesId}) }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_AEEdit', { 'id': tvSeries.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}", "backend/episode/show.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/episode/show.html.twig");
    }
}
