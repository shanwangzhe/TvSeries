<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bdf241645c4cf382ba511a98e963ea4b256d240ae44647916e03970b85063f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cb1169a65ecb758d7d1a64709b1f52fbf4922f65b9b8cfe135c7cd383ebf513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb1169a65ecb758d7d1a64709b1f52fbf4922f65b9b8cfe135c7cd383ebf513->enter($__internal_9cb1169a65ecb758d7d1a64709b1f52fbf4922f65b9b8cfe135c7cd383ebf513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_63920ca8506a8a27572710729ebe75a759076cc0fbbe4f2791bbaac7cb95f925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63920ca8506a8a27572710729ebe75a759076cc0fbbe4f2791bbaac7cb95f925->enter($__internal_63920ca8506a8a27572710729ebe75a759076cc0fbbe4f2791bbaac7cb95f925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb1169a65ecb758d7d1a64709b1f52fbf4922f65b9b8cfe135c7cd383ebf513->leave($__internal_9cb1169a65ecb758d7d1a64709b1f52fbf4922f65b9b8cfe135c7cd383ebf513_prof);

        
        $__internal_63920ca8506a8a27572710729ebe75a759076cc0fbbe4f2791bbaac7cb95f925->leave($__internal_63920ca8506a8a27572710729ebe75a759076cc0fbbe4f2791bbaac7cb95f925_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_875aea007634e0ea4d1fb107d3d645bcd2dcc9da19fef2e29ac6dd3083eeef60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875aea007634e0ea4d1fb107d3d645bcd2dcc9da19fef2e29ac6dd3083eeef60->enter($__internal_875aea007634e0ea4d1fb107d3d645bcd2dcc9da19fef2e29ac6dd3083eeef60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_64fa0e05e054ae97ff3d5c21e6dfe68e9adfad854c837e5e30eca325db6ebb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fa0e05e054ae97ff3d5c21e6dfe68e9adfad854c837e5e30eca325db6ebb83->enter($__internal_64fa0e05e054ae97ff3d5c21e6dfe68e9adfad854c837e5e30eca325db6ebb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_64fa0e05e054ae97ff3d5c21e6dfe68e9adfad854c837e5e30eca325db6ebb83->leave($__internal_64fa0e05e054ae97ff3d5c21e6dfe68e9adfad854c837e5e30eca325db6ebb83_prof);

        
        $__internal_875aea007634e0ea4d1fb107d3d645bcd2dcc9da19fef2e29ac6dd3083eeef60->leave($__internal_875aea007634e0ea4d1fb107d3d645bcd2dcc9da19fef2e29ac6dd3083eeef60_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec0aa4238ab8a8a8c6e3149354c9db03fa3081ec73de7fa6499b6f9aa9dde299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0aa4238ab8a8a8c6e3149354c9db03fa3081ec73de7fa6499b6f9aa9dde299->enter($__internal_ec0aa4238ab8a8a8c6e3149354c9db03fa3081ec73de7fa6499b6f9aa9dde299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1188b0add43adf081b1efbd31435f6c3f34fac1a10425c194ebb91fdd802f3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1188b0add43adf081b1efbd31435f6c3f34fac1a10425c194ebb91fdd802f3fe->enter($__internal_1188b0add43adf081b1efbd31435f6c3f34fac1a10425c194ebb91fdd802f3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1188b0add43adf081b1efbd31435f6c3f34fac1a10425c194ebb91fdd802f3fe->leave($__internal_1188b0add43adf081b1efbd31435f6c3f34fac1a10425c194ebb91fdd802f3fe_prof);

        
        $__internal_ec0aa4238ab8a8a8c6e3149354c9db03fa3081ec73de7fa6499b6f9aa9dde299->leave($__internal_ec0aa4238ab8a8a8c6e3149354c9db03fa3081ec73de7fa6499b6f9aa9dde299_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/pro/Desktop/M2/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
