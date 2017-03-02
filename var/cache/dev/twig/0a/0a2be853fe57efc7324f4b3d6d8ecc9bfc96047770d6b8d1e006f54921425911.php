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
        $__internal_dc98347f88637a49ad9fc3e7a2ea5a89d2f7d0306ff9ceecd7954e4c4a88b52e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc98347f88637a49ad9fc3e7a2ea5a89d2f7d0306ff9ceecd7954e4c4a88b52e->enter($__internal_dc98347f88637a49ad9fc3e7a2ea5a89d2f7d0306ff9ceecd7954e4c4a88b52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9617704d26b76d3a68aaf97fada3122b57c49f727a54ed949c0eec04e1079225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9617704d26b76d3a68aaf97fada3122b57c49f727a54ed949c0eec04e1079225->enter($__internal_9617704d26b76d3a68aaf97fada3122b57c49f727a54ed949c0eec04e1079225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc98347f88637a49ad9fc3e7a2ea5a89d2f7d0306ff9ceecd7954e4c4a88b52e->leave($__internal_dc98347f88637a49ad9fc3e7a2ea5a89d2f7d0306ff9ceecd7954e4c4a88b52e_prof);

        
        $__internal_9617704d26b76d3a68aaf97fada3122b57c49f727a54ed949c0eec04e1079225->leave($__internal_9617704d26b76d3a68aaf97fada3122b57c49f727a54ed949c0eec04e1079225_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f03de99b937120b8007e45f4af2bd835800a09ae71fb1342e1808518abf8817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f03de99b937120b8007e45f4af2bd835800a09ae71fb1342e1808518abf8817->enter($__internal_3f03de99b937120b8007e45f4af2bd835800a09ae71fb1342e1808518abf8817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0e6eb146119a0c62bc2ab72150857db60368d801efe132dcb6ca00b537e352f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6eb146119a0c62bc2ab72150857db60368d801efe132dcb6ca00b537e352f5->enter($__internal_0e6eb146119a0c62bc2ab72150857db60368d801efe132dcb6ca00b537e352f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e6eb146119a0c62bc2ab72150857db60368d801efe132dcb6ca00b537e352f5->leave($__internal_0e6eb146119a0c62bc2ab72150857db60368d801efe132dcb6ca00b537e352f5_prof);

        
        $__internal_3f03de99b937120b8007e45f4af2bd835800a09ae71fb1342e1808518abf8817->leave($__internal_3f03de99b937120b8007e45f4af2bd835800a09ae71fb1342e1808518abf8817_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c092e7482a9efe2553cb0dfd92ae56538f823b0615747ba419bd7164094758a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c092e7482a9efe2553cb0dfd92ae56538f823b0615747ba419bd7164094758a->enter($__internal_8c092e7482a9efe2553cb0dfd92ae56538f823b0615747ba419bd7164094758a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78621defded721d472932707f7edc132fcc76d522cec93ce1e95b99101b2a3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78621defded721d472932707f7edc132fcc76d522cec93ce1e95b99101b2a3f6->enter($__internal_78621defded721d472932707f7edc132fcc76d522cec93ce1e95b99101b2a3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78621defded721d472932707f7edc132fcc76d522cec93ce1e95b99101b2a3f6->leave($__internal_78621defded721d472932707f7edc132fcc76d522cec93ce1e95b99101b2a3f6_prof);

        
        $__internal_8c092e7482a9efe2553cb0dfd92ae56538f823b0615747ba419bd7164094758a->leave($__internal_8c092e7482a9efe2553cb0dfd92ae56538f823b0615747ba419bd7164094758a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04f3113cb2b8437d944d0c514396b7029c2438fd76cae10a017ab1dc735936aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f3113cb2b8437d944d0c514396b7029c2438fd76cae10a017ab1dc735936aa->enter($__internal_04f3113cb2b8437d944d0c514396b7029c2438fd76cae10a017ab1dc735936aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d461d76d4b7a8c8b2c0fb7d942a2acbaea5ea6275512cd74619029977a29a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d461d76d4b7a8c8b2c0fb7d942a2acbaea5ea6275512cd74619029977a29a33->enter($__internal_6d461d76d4b7a8c8b2c0fb7d942a2acbaea5ea6275512cd74619029977a29a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6d461d76d4b7a8c8b2c0fb7d942a2acbaea5ea6275512cd74619029977a29a33->leave($__internal_6d461d76d4b7a8c8b2c0fb7d942a2acbaea5ea6275512cd74619029977a29a33_prof);

        
        $__internal_04f3113cb2b8437d944d0c514396b7029c2438fd76cae10a017ab1dc735936aa->leave($__internal_04f3113cb2b8437d944d0c514396b7029c2438fd76cae10a017ab1dc735936aa_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/pro/Desktop/M2/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
