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
        $__internal_9294aafff3ced7117c23671d8a6f63f4c3980801d0e30abce0dd3a9f4513d774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9294aafff3ced7117c23671d8a6f63f4c3980801d0e30abce0dd3a9f4513d774->enter($__internal_9294aafff3ced7117c23671d8a6f63f4c3980801d0e30abce0dd3a9f4513d774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_cb05737a78d12dd065cc92fb75f3155458bea8e27cb64d776cb55f29016b7745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb05737a78d12dd065cc92fb75f3155458bea8e27cb64d776cb55f29016b7745->enter($__internal_cb05737a78d12dd065cc92fb75f3155458bea8e27cb64d776cb55f29016b7745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9294aafff3ced7117c23671d8a6f63f4c3980801d0e30abce0dd3a9f4513d774->leave($__internal_9294aafff3ced7117c23671d8a6f63f4c3980801d0e30abce0dd3a9f4513d774_prof);

        
        $__internal_cb05737a78d12dd065cc92fb75f3155458bea8e27cb64d776cb55f29016b7745->leave($__internal_cb05737a78d12dd065cc92fb75f3155458bea8e27cb64d776cb55f29016b7745_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c078280d7006b60acee2056dd82585e4514aa130fa250e50b18987ba1c0cd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c078280d7006b60acee2056dd82585e4514aa130fa250e50b18987ba1c0cd63->enter($__internal_6c078280d7006b60acee2056dd82585e4514aa130fa250e50b18987ba1c0cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5667322e21c02a77249f458d0d3ca284591ad653c6dbea6b3e1bc7225055d7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5667322e21c02a77249f458d0d3ca284591ad653c6dbea6b3e1bc7225055d7fc->enter($__internal_5667322e21c02a77249f458d0d3ca284591ad653c6dbea6b3e1bc7225055d7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5667322e21c02a77249f458d0d3ca284591ad653c6dbea6b3e1bc7225055d7fc->leave($__internal_5667322e21c02a77249f458d0d3ca284591ad653c6dbea6b3e1bc7225055d7fc_prof);

        
        $__internal_6c078280d7006b60acee2056dd82585e4514aa130fa250e50b18987ba1c0cd63->leave($__internal_6c078280d7006b60acee2056dd82585e4514aa130fa250e50b18987ba1c0cd63_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a7ba1d67eb8435e9d0564fa821c2ac0a804b64f74f623cf600457a5181f7839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7ba1d67eb8435e9d0564fa821c2ac0a804b64f74f623cf600457a5181f7839->enter($__internal_9a7ba1d67eb8435e9d0564fa821c2ac0a804b64f74f623cf600457a5181f7839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2569355d84d4e688a2d7758fbceab88e30fdcfa29745ab53136d53b58db9a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2569355d84d4e688a2d7758fbceab88e30fdcfa29745ab53136d53b58db9a10->enter($__internal_a2569355d84d4e688a2d7758fbceab88e30fdcfa29745ab53136d53b58db9a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2569355d84d4e688a2d7758fbceab88e30fdcfa29745ab53136d53b58db9a10->leave($__internal_a2569355d84d4e688a2d7758fbceab88e30fdcfa29745ab53136d53b58db9a10_prof);

        
        $__internal_9a7ba1d67eb8435e9d0564fa821c2ac0a804b64f74f623cf600457a5181f7839->leave($__internal_9a7ba1d67eb8435e9d0564fa821c2ac0a804b64f74f623cf600457a5181f7839_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/Users/pro/Desktop/test/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
