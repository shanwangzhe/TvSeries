<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_2d9e19b881deb27b46c61a0e9b638b8c9691b84d7201a2ba5d31d62bd09089bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_732749ccb5c9bfe1430d0c088b5d83ae2804a486aee1b10bc607785546ef5a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732749ccb5c9bfe1430d0c088b5d83ae2804a486aee1b10bc607785546ef5a29->enter($__internal_732749ccb5c9bfe1430d0c088b5d83ae2804a486aee1b10bc607785546ef5a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_cca86935dc9d70893316124d9bab4644577338c4650a03c06b9cbfd2c83af337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca86935dc9d70893316124d9bab4644577338c4650a03c06b9cbfd2c83af337->enter($__internal_cca86935dc9d70893316124d9bab4644577338c4650a03c06b9cbfd2c83af337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_732749ccb5c9bfe1430d0c088b5d83ae2804a486aee1b10bc607785546ef5a29->leave($__internal_732749ccb5c9bfe1430d0c088b5d83ae2804a486aee1b10bc607785546ef5a29_prof);

        
        $__internal_cca86935dc9d70893316124d9bab4644577338c4650a03c06b9cbfd2c83af337->leave($__internal_cca86935dc9d70893316124d9bab4644577338c4650a03c06b9cbfd2c83af337_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed1ca962b3eabc73e29057f3fff84c3f2cdebbfe66736254b143b3e947e01426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1ca962b3eabc73e29057f3fff84c3f2cdebbfe66736254b143b3e947e01426->enter($__internal_ed1ca962b3eabc73e29057f3fff84c3f2cdebbfe66736254b143b3e947e01426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9afb43f0d159b2f1276ec976df6b83a8108b024fc81c0d14bb6881c6829d4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9afb43f0d159b2f1276ec976df6b83a8108b024fc81c0d14bb6881c6829d4e6->enter($__internal_e9afb43f0d159b2f1276ec976df6b83a8108b024fc81c0d14bb6881c6829d4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e9afb43f0d159b2f1276ec976df6b83a8108b024fc81c0d14bb6881c6829d4e6->leave($__internal_e9afb43f0d159b2f1276ec976df6b83a8108b024fc81c0d14bb6881c6829d4e6_prof);

        
        $__internal_ed1ca962b3eabc73e29057f3fff84c3f2cdebbfe66736254b143b3e947e01426->leave($__internal_ed1ca962b3eabc73e29057f3fff84c3f2cdebbfe66736254b143b3e947e01426_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/pro/Desktop/M2/tvseries/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
