<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_397bc6bb7f46b9fd82ef362ae6afe1d29c28068d983e3a986a504704e9a55f8e extends Twig_Template
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
        $__internal_da070bca7f262d7f88342a9549da39e49cf08976158f19a4ff4248e0300e01a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da070bca7f262d7f88342a9549da39e49cf08976158f19a4ff4248e0300e01a5->enter($__internal_da070bca7f262d7f88342a9549da39e49cf08976158f19a4ff4248e0300e01a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_55636951e4a1dcd6e5450a83e3ef7b25d7f71c7b155d4d1b927e8346f9ac6ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55636951e4a1dcd6e5450a83e3ef7b25d7f71c7b155d4d1b927e8346f9ac6ff3->enter($__internal_55636951e4a1dcd6e5450a83e3ef7b25d7f71c7b155d4d1b927e8346f9ac6ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da070bca7f262d7f88342a9549da39e49cf08976158f19a4ff4248e0300e01a5->leave($__internal_da070bca7f262d7f88342a9549da39e49cf08976158f19a4ff4248e0300e01a5_prof);

        
        $__internal_55636951e4a1dcd6e5450a83e3ef7b25d7f71c7b155d4d1b927e8346f9ac6ff3->leave($__internal_55636951e4a1dcd6e5450a83e3ef7b25d7f71c7b155d4d1b927e8346f9ac6ff3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3553aa5a70468788724c4e089a4d54598af5fc5aabaab231cae2d60addf83ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3553aa5a70468788724c4e089a4d54598af5fc5aabaab231cae2d60addf83ce6->enter($__internal_3553aa5a70468788724c4e089a4d54598af5fc5aabaab231cae2d60addf83ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6092279dad759cf7b6f25d6ac67781bd295ff52386b741255d0d73d912173cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6092279dad759cf7b6f25d6ac67781bd295ff52386b741255d0d73d912173cd1->enter($__internal_6092279dad759cf7b6f25d6ac67781bd295ff52386b741255d0d73d912173cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_6092279dad759cf7b6f25d6ac67781bd295ff52386b741255d0d73d912173cd1->leave($__internal_6092279dad759cf7b6f25d6ac67781bd295ff52386b741255d0d73d912173cd1_prof);

        
        $__internal_3553aa5a70468788724c4e089a4d54598af5fc5aabaab231cae2d60addf83ce6->leave($__internal_3553aa5a70468788724c4e089a4d54598af5fc5aabaab231cae2d60addf83ce6_prof);

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
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Users/pro/Desktop/M2/tvseries/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
