<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_b749a6d31d2a6b18af092d6877d3ad45341680a68d903f757d3d896f574f856b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_2340f829d6ef1a5773f0a8b5849590ec8dbd5bdbe6a4c042683f81865832b3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2340f829d6ef1a5773f0a8b5849590ec8dbd5bdbe6a4c042683f81865832b3ce->enter($__internal_2340f829d6ef1a5773f0a8b5849590ec8dbd5bdbe6a4c042683f81865832b3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_e374b84c59579ad5e294b25a961708ea57b9ef86788fc4ee35ddcc58063153d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e374b84c59579ad5e294b25a961708ea57b9ef86788fc4ee35ddcc58063153d4->enter($__internal_e374b84c59579ad5e294b25a961708ea57b9ef86788fc4ee35ddcc58063153d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2340f829d6ef1a5773f0a8b5849590ec8dbd5bdbe6a4c042683f81865832b3ce->leave($__internal_2340f829d6ef1a5773f0a8b5849590ec8dbd5bdbe6a4c042683f81865832b3ce_prof);

        
        $__internal_e374b84c59579ad5e294b25a961708ea57b9ef86788fc4ee35ddcc58063153d4->leave($__internal_e374b84c59579ad5e294b25a961708ea57b9ef86788fc4ee35ddcc58063153d4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96f88016d18aae9cd1d98b45454eb4bb0345f8c7f3eb93329f09089754c53d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f88016d18aae9cd1d98b45454eb4bb0345f8c7f3eb93329f09089754c53d9a->enter($__internal_96f88016d18aae9cd1d98b45454eb4bb0345f8c7f3eb93329f09089754c53d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1bba3354730156e40aa34d923d124c086f56ec6395a9902decac9eac03cdf442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bba3354730156e40aa34d923d124c086f56ec6395a9902decac9eac03cdf442->enter($__internal_1bba3354730156e40aa34d923d124c086f56ec6395a9902decac9eac03cdf442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "        <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 10
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">back to index</a>
";
        
        $__internal_1bba3354730156e40aa34d923d124c086f56ec6395a9902decac9eac03cdf442->leave($__internal_1bba3354730156e40aa34d923d124c086f56ec6395a9902decac9eac03cdf442_prof);

        
        $__internal_96f88016d18aae9cd1d98b45454eb4bb0345f8c7f3eb93329f09089754c53d9a->leave($__internal_96f88016d18aae9cd1d98b45454eb4bb0345f8c7f3eb93329f09089754c53d9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
        <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
    <a href=\"{{ path('_index') }}\">back to index</a>
{% endblock fos_user_content %}", "@FOSUser/Registration/confirmed.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
