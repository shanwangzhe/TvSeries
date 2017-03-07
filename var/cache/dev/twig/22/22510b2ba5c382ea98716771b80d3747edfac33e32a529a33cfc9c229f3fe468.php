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
        $__internal_c0e180781ae286f720d5dd732ac9caa329d1713329d63028918afea71ff2e9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e180781ae286f720d5dd732ac9caa329d1713329d63028918afea71ff2e9dd->enter($__internal_c0e180781ae286f720d5dd732ac9caa329d1713329d63028918afea71ff2e9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5a22f830baa59881ceabd50f53c8facf7574cbe1771d4872df01ce352caecdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a22f830baa59881ceabd50f53c8facf7574cbe1771d4872df01ce352caecdd5->enter($__internal_5a22f830baa59881ceabd50f53c8facf7574cbe1771d4872df01ce352caecdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e180781ae286f720d5dd732ac9caa329d1713329d63028918afea71ff2e9dd->leave($__internal_c0e180781ae286f720d5dd732ac9caa329d1713329d63028918afea71ff2e9dd_prof);

        
        $__internal_5a22f830baa59881ceabd50f53c8facf7574cbe1771d4872df01ce352caecdd5->leave($__internal_5a22f830baa59881ceabd50f53c8facf7574cbe1771d4872df01ce352caecdd5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_355f1fdf247d44479e62ca2ca1a484eb9abd3628b61c832512fa03d2dfdcce13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355f1fdf247d44479e62ca2ca1a484eb9abd3628b61c832512fa03d2dfdcce13->enter($__internal_355f1fdf247d44479e62ca2ca1a484eb9abd3628b61c832512fa03d2dfdcce13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26424417b1c15d32f73bda653a4797f6b15c0232d3de331ae657302a6be94361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26424417b1c15d32f73bda653a4797f6b15c0232d3de331ae657302a6be94361->enter($__internal_26424417b1c15d32f73bda653a4797f6b15c0232d3de331ae657302a6be94361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_26424417b1c15d32f73bda653a4797f6b15c0232d3de331ae657302a6be94361->leave($__internal_26424417b1c15d32f73bda653a4797f6b15c0232d3de331ae657302a6be94361_prof);

        
        $__internal_355f1fdf247d44479e62ca2ca1a484eb9abd3628b61c832512fa03d2dfdcce13->leave($__internal_355f1fdf247d44479e62ca2ca1a484eb9abd3628b61c832512fa03d2dfdcce13_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc86683e67d4c8179d6c161ace065be2de6456493d7c5dd29d1ff6d575946065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc86683e67d4c8179d6c161ace065be2de6456493d7c5dd29d1ff6d575946065->enter($__internal_dc86683e67d4c8179d6c161ace065be2de6456493d7c5dd29d1ff6d575946065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e45132b82ce27f137b8cb2b31eae185734b1f7c34af81f30c35b7ebf3b8f7345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45132b82ce27f137b8cb2b31eae185734b1f7c34af81f30c35b7ebf3b8f7345->enter($__internal_e45132b82ce27f137b8cb2b31eae185734b1f7c34af81f30c35b7ebf3b8f7345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e45132b82ce27f137b8cb2b31eae185734b1f7c34af81f30c35b7ebf3b8f7345->leave($__internal_e45132b82ce27f137b8cb2b31eae185734b1f7c34af81f30c35b7ebf3b8f7345_prof);

        
        $__internal_dc86683e67d4c8179d6c161ace065be2de6456493d7c5dd29d1ff6d575946065->leave($__internal_dc86683e67d4c8179d6c161ace065be2de6456493d7c5dd29d1ff6d575946065_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c1f94ce3cd212cec0ac0d2990c1c469568abb7bafeed15d132f637067f9d6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1f94ce3cd212cec0ac0d2990c1c469568abb7bafeed15d132f637067f9d6e0->enter($__internal_8c1f94ce3cd212cec0ac0d2990c1c469568abb7bafeed15d132f637067f9d6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4218ffefda46d7f21b4d2956c3e26f7e885fb7b98125a02be6817c8afaac743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4218ffefda46d7f21b4d2956c3e26f7e885fb7b98125a02be6817c8afaac743->enter($__internal_c4218ffefda46d7f21b4d2956c3e26f7e885fb7b98125a02be6817c8afaac743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c4218ffefda46d7f21b4d2956c3e26f7e885fb7b98125a02be6817c8afaac743->leave($__internal_c4218ffefda46d7f21b4d2956c3e26f7e885fb7b98125a02be6817c8afaac743_prof);

        
        $__internal_8c1f94ce3cd212cec0ac0d2990c1c469568abb7bafeed15d132f637067f9d6e0->leave($__internal_8c1f94ce3cd212cec0ac0d2990c1c469568abb7bafeed15d132f637067f9d6e0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/pro/Desktop/test/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
