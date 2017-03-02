<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e880170f0a2587e9eea896d70ed09048c0115aa662ee45704cd3cce0f25be649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e880170f0a2587e9eea896d70ed09048c0115aa662ee45704cd3cce0f25be649->enter($__internal_e880170f0a2587e9eea896d70ed09048c0115aa662ee45704cd3cce0f25be649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8b483bb03fab41b3d3ae7e69a89ba6996087cf7c13e96b7e1bc6e1a67f125058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b483bb03fab41b3d3ae7e69a89ba6996087cf7c13e96b7e1bc6e1a67f125058->enter($__internal_8b483bb03fab41b3d3ae7e69a89ba6996087cf7c13e96b7e1bc6e1a67f125058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e880170f0a2587e9eea896d70ed09048c0115aa662ee45704cd3cce0f25be649->leave($__internal_e880170f0a2587e9eea896d70ed09048c0115aa662ee45704cd3cce0f25be649_prof);

        
        $__internal_8b483bb03fab41b3d3ae7e69a89ba6996087cf7c13e96b7e1bc6e1a67f125058->leave($__internal_8b483bb03fab41b3d3ae7e69a89ba6996087cf7c13e96b7e1bc6e1a67f125058_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3859c5eb428533c20f91c6a594e5c1c4d53d56b6ccbb2ffd4f6619b5612bc12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3859c5eb428533c20f91c6a594e5c1c4d53d56b6ccbb2ffd4f6619b5612bc12e->enter($__internal_3859c5eb428533c20f91c6a594e5c1c4d53d56b6ccbb2ffd4f6619b5612bc12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bdf921b641de47ad398981b2b55aac7431a2e7f2d56bba6eab471ff04c31b1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf921b641de47ad398981b2b55aac7431a2e7f2d56bba6eab471ff04c31b1c5->enter($__internal_bdf921b641de47ad398981b2b55aac7431a2e7f2d56bba6eab471ff04c31b1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bdf921b641de47ad398981b2b55aac7431a2e7f2d56bba6eab471ff04c31b1c5->leave($__internal_bdf921b641de47ad398981b2b55aac7431a2e7f2d56bba6eab471ff04c31b1c5_prof);

        
        $__internal_3859c5eb428533c20f91c6a594e5c1c4d53d56b6ccbb2ffd4f6619b5612bc12e->leave($__internal_3859c5eb428533c20f91c6a594e5c1c4d53d56b6ccbb2ffd4f6619b5612bc12e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75b53f538e81d53189047942fbaf423ebdfdf1303bd924b9c2e4d73593b47fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b53f538e81d53189047942fbaf423ebdfdf1303bd924b9c2e4d73593b47fd2->enter($__internal_75b53f538e81d53189047942fbaf423ebdfdf1303bd924b9c2e4d73593b47fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_344310668181581484b923a42900ecfd02d90429cde7c1b53f812507b1a36395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344310668181581484b923a42900ecfd02d90429cde7c1b53f812507b1a36395->enter($__internal_344310668181581484b923a42900ecfd02d90429cde7c1b53f812507b1a36395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_344310668181581484b923a42900ecfd02d90429cde7c1b53f812507b1a36395->leave($__internal_344310668181581484b923a42900ecfd02d90429cde7c1b53f812507b1a36395_prof);

        
        $__internal_75b53f538e81d53189047942fbaf423ebdfdf1303bd924b9c2e4d73593b47fd2->leave($__internal_75b53f538e81d53189047942fbaf423ebdfdf1303bd924b9c2e4d73593b47fd2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9beecf4501021ed4c099510b9d974e60f3c301dc15e95016091df4de3370e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9beecf4501021ed4c099510b9d974e60f3c301dc15e95016091df4de3370e84->enter($__internal_a9beecf4501021ed4c099510b9d974e60f3c301dc15e95016091df4de3370e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4028d63cc91f11f570c9919760d96944b4c844960d9dcffe781fe967e1e8feac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4028d63cc91f11f570c9919760d96944b4c844960d9dcffe781fe967e1e8feac->enter($__internal_4028d63cc91f11f570c9919760d96944b4c844960d9dcffe781fe967e1e8feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4028d63cc91f11f570c9919760d96944b4c844960d9dcffe781fe967e1e8feac->leave($__internal_4028d63cc91f11f570c9919760d96944b4c844960d9dcffe781fe967e1e8feac_prof);

        
        $__internal_a9beecf4501021ed4c099510b9d974e60f3c301dc15e95016091df4de3370e84->leave($__internal_a9beecf4501021ed4c099510b9d974e60f3c301dc15e95016091df4de3370e84_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/pro/Desktop/M2/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
