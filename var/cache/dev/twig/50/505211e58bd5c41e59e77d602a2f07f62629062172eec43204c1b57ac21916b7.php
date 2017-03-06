<?php

/* backend/tvseries/new.html.twig */
class __TwigTemplate_2473ec0f93b8646a7abef1a89930659a0aedf86ce549896dfc81870a57073e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend/tvseries/new.html.twig", 1);
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
        $__internal_6c6f7d3cd2615be05d641c815155ad17b41c35746346f4aaee91353823d48330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6f7d3cd2615be05d641c815155ad17b41c35746346f4aaee91353823d48330->enter($__internal_6c6f7d3cd2615be05d641c815155ad17b41c35746346f4aaee91353823d48330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/new.html.twig"));

        $__internal_bf77f4daf3bcc697380978a0c3421716ec51be2ed1dac1a6adc440e5d35e15a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf77f4daf3bcc697380978a0c3421716ec51be2ed1dac1a6adc440e5d35e15a4->enter($__internal_bf77f4daf3bcc697380978a0c3421716ec51be2ed1dac1a6adc440e5d35e15a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c6f7d3cd2615be05d641c815155ad17b41c35746346f4aaee91353823d48330->leave($__internal_6c6f7d3cd2615be05d641c815155ad17b41c35746346f4aaee91353823d48330_prof);

        
        $__internal_bf77f4daf3bcc697380978a0c3421716ec51be2ed1dac1a6adc440e5d35e15a4->leave($__internal_bf77f4daf3bcc697380978a0c3421716ec51be2ed1dac1a6adc440e5d35e15a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89362b2884319c49599517dcd815b47ad5fd93bb7e4b03d40a024cf61ddf570e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89362b2884319c49599517dcd815b47ad5fd93bb7e4b03d40a024cf61ddf570e->enter($__internal_89362b2884319c49599517dcd815b47ad5fd93bb7e4b03d40a024cf61ddf570e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_117f8b32aaf829da38e1f507185d376d08a74d3b6de4ee1d0b3517409af86bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117f8b32aaf829da38e1f507185d376d08a74d3b6de4ee1d0b3517409af86bb9->enter($__internal_117f8b32aaf829da38e1f507185d376d08a74d3b6de4ee1d0b3517409af86bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tvseries creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_117f8b32aaf829da38e1f507185d376d08a74d3b6de4ee1d0b3517409af86bb9->leave($__internal_117f8b32aaf829da38e1f507185d376d08a74d3b6de4ee1d0b3517409af86bb9_prof);

        
        $__internal_89362b2884319c49599517dcd815b47ad5fd93bb7e4b03d40a024cf61ddf570e->leave($__internal_89362b2884319c49599517dcd815b47ad5fd93bb7e4b03d40a024cf61ddf570e_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tvseries creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('_adminIndex') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "backend/tvseries/new.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/backend/tvseries/new.html.twig");
    }
}
