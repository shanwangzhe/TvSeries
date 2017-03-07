<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3d45665a07b596ab86f7c0af4b5c561aa5b56dd599a283c57148b305745caa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d45665a07b596ab86f7c0af4b5c561aa5b56dd599a283c57148b305745caa75->enter($__internal_3d45665a07b596ab86f7c0af4b5c561aa5b56dd599a283c57148b305745caa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_96889807c707ec5ee914739d4e06bc93f9c2d703ebcf9094fa86c15ce2fd1db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96889807c707ec5ee914739d4e06bc93f9c2d703ebcf9094fa86c15ce2fd1db3->enter($__internal_96889807c707ec5ee914739d4e06bc93f9c2d703ebcf9094fa86c15ce2fd1db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d45665a07b596ab86f7c0af4b5c561aa5b56dd599a283c57148b305745caa75->leave($__internal_3d45665a07b596ab86f7c0af4b5c561aa5b56dd599a283c57148b305745caa75_prof);

        
        $__internal_96889807c707ec5ee914739d4e06bc93f9c2d703ebcf9094fa86c15ce2fd1db3->leave($__internal_96889807c707ec5ee914739d4e06bc93f9c2d703ebcf9094fa86c15ce2fd1db3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_994bbf1c52e0984eb4791da2459db27b0730410f732fc212c54cbc1527c9a61e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994bbf1c52e0984eb4791da2459db27b0730410f732fc212c54cbc1527c9a61e->enter($__internal_994bbf1c52e0984eb4791da2459db27b0730410f732fc212c54cbc1527c9a61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ed0897444de696a75e9aee1818dd18060dbe3a6e7ed4f9392fe8a341d889b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed0897444de696a75e9aee1818dd18060dbe3a6e7ed4f9392fe8a341d889b5e->enter($__internal_5ed0897444de696a75e9aee1818dd18060dbe3a6e7ed4f9392fe8a341d889b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ed0897444de696a75e9aee1818dd18060dbe3a6e7ed4f9392fe8a341d889b5e->leave($__internal_5ed0897444de696a75e9aee1818dd18060dbe3a6e7ed4f9392fe8a341d889b5e_prof);

        
        $__internal_994bbf1c52e0984eb4791da2459db27b0730410f732fc212c54cbc1527c9a61e->leave($__internal_994bbf1c52e0984eb4791da2459db27b0730410f732fc212c54cbc1527c9a61e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d65128f6b39c934d364e90d536098c33447dca7516ef29c1899c8c83ab7c644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d65128f6b39c934d364e90d536098c33447dca7516ef29c1899c8c83ab7c644->enter($__internal_7d65128f6b39c934d364e90d536098c33447dca7516ef29c1899c8c83ab7c644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ea4f237915c7eb5626cb334c428177c34d4a8f1f593b66e2341bf35f6e414aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4f237915c7eb5626cb334c428177c34d4a8f1f593b66e2341bf35f6e414aad->enter($__internal_ea4f237915c7eb5626cb334c428177c34d4a8f1f593b66e2341bf35f6e414aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea4f237915c7eb5626cb334c428177c34d4a8f1f593b66e2341bf35f6e414aad->leave($__internal_ea4f237915c7eb5626cb334c428177c34d4a8f1f593b66e2341bf35f6e414aad_prof);

        
        $__internal_7d65128f6b39c934d364e90d536098c33447dca7516ef29c1899c8c83ab7c644->leave($__internal_7d65128f6b39c934d364e90d536098c33447dca7516ef29c1899c8c83ab7c644_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e516b40aee96a6e69d0135c33550e2065bc6228665aa7c4d944fe1442c4acf43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e516b40aee96a6e69d0135c33550e2065bc6228665aa7c4d944fe1442c4acf43->enter($__internal_e516b40aee96a6e69d0135c33550e2065bc6228665aa7c4d944fe1442c4acf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d205a9592d31b65dcb66a220938e45246d4913e916c777ebf5f2663ca8fe251e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d205a9592d31b65dcb66a220938e45246d4913e916c777ebf5f2663ca8fe251e->enter($__internal_d205a9592d31b65dcb66a220938e45246d4913e916c777ebf5f2663ca8fe251e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d205a9592d31b65dcb66a220938e45246d4913e916c777ebf5f2663ca8fe251e->leave($__internal_d205a9592d31b65dcb66a220938e45246d4913e916c777ebf5f2663ca8fe251e_prof);

        
        $__internal_e516b40aee96a6e69d0135c33550e2065bc6228665aa7c4d944fe1442c4acf43->leave($__internal_e516b40aee96a6e69d0135c33550e2065bc6228665aa7c4d944fe1442c4acf43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/pro/Desktop/test/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
