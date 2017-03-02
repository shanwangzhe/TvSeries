<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3320d51ad91284b9a37d3e58fc67ba18242f253fd06c25fb267aa5786ab4691d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84a9c48176066a37dce349985b40dbdd8a48fc3f00d94f6542762678bb996f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a9c48176066a37dce349985b40dbdd8a48fc3f00d94f6542762678bb996f9e->enter($__internal_84a9c48176066a37dce349985b40dbdd8a48fc3f00d94f6542762678bb996f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_2caefcf2309df68e278adc54b155d37dcf1b61f26ed248fb73e96efeb945af93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2caefcf2309df68e278adc54b155d37dcf1b61f26ed248fb73e96efeb945af93->enter($__internal_2caefcf2309df68e278adc54b155d37dcf1b61f26ed248fb73e96efeb945af93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a9c48176066a37dce349985b40dbdd8a48fc3f00d94f6542762678bb996f9e->leave($__internal_84a9c48176066a37dce349985b40dbdd8a48fc3f00d94f6542762678bb996f9e_prof);

        
        $__internal_2caefcf2309df68e278adc54b155d37dcf1b61f26ed248fb73e96efeb945af93->leave($__internal_2caefcf2309df68e278adc54b155d37dcf1b61f26ed248fb73e96efeb945af93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9cf6b7b56bce61cf9dbc6f03c961249f6e1546669e846d45bce69b81edd5e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9cf6b7b56bce61cf9dbc6f03c961249f6e1546669e846d45bce69b81edd5e59->enter($__internal_a9cf6b7b56bce61cf9dbc6f03c961249f6e1546669e846d45bce69b81edd5e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5df753d3106d1b95191fe17226130e687314ea0a31f585200a081b1c56110fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5df753d3106d1b95191fe17226130e687314ea0a31f585200a081b1c56110fa->enter($__internal_c5df753d3106d1b95191fe17226130e687314ea0a31f585200a081b1c56110fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c5df753d3106d1b95191fe17226130e687314ea0a31f585200a081b1c56110fa->leave($__internal_c5df753d3106d1b95191fe17226130e687314ea0a31f585200a081b1c56110fa_prof);

        
        $__internal_a9cf6b7b56bce61cf9dbc6f03c961249f6e1546669e846d45bce69b81edd5e59->leave($__internal_a9cf6b7b56bce61cf9dbc6f03c961249f6e1546669e846d45bce69b81edd5e59_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/pro/Desktop/M2/tvseries/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
