<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_23c572a2e707ab1b6a918259947e4541860b81903a0e6d1ce619beb7fd2303b2 extends Twig_Template
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
        $__internal_032f4622e81513673319f337acf5d296f453dc83f2fcb181b9ca14b907c9076b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032f4622e81513673319f337acf5d296f453dc83f2fcb181b9ca14b907c9076b->enter($__internal_032f4622e81513673319f337acf5d296f453dc83f2fcb181b9ca14b907c9076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_0ccb4d69bc69e292a30cf0163dbd3d807ff6db7d3a7d075fbf80fc1e0f1c0d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccb4d69bc69e292a30cf0163dbd3d807ff6db7d3a7d075fbf80fc1e0f1c0d97->enter($__internal_0ccb4d69bc69e292a30cf0163dbd3d807ff6db7d3a7d075fbf80fc1e0f1c0d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_032f4622e81513673319f337acf5d296f453dc83f2fcb181b9ca14b907c9076b->leave($__internal_032f4622e81513673319f337acf5d296f453dc83f2fcb181b9ca14b907c9076b_prof);

        
        $__internal_0ccb4d69bc69e292a30cf0163dbd3d807ff6db7d3a7d075fbf80fc1e0f1c0d97->leave($__internal_0ccb4d69bc69e292a30cf0163dbd3d807ff6db7d3a7d075fbf80fc1e0f1c0d97_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d5cd0a6f17a086d51d34f9ebca7994fca7187a2d715f35784135f5c97bc838a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5cd0a6f17a086d51d34f9ebca7994fca7187a2d715f35784135f5c97bc838a->enter($__internal_4d5cd0a6f17a086d51d34f9ebca7994fca7187a2d715f35784135f5c97bc838a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4ba9c26ab6b20d405f13aee700968cb4207c5f7f9e724080a940a22189f3a376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba9c26ab6b20d405f13aee700968cb4207c5f7f9e724080a940a22189f3a376->enter($__internal_4ba9c26ab6b20d405f13aee700968cb4207c5f7f9e724080a940a22189f3a376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">register</a>
    ";
        // line 4
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4ba9c26ab6b20d405f13aee700968cb4207c5f7f9e724080a940a22189f3a376->leave($__internal_4ba9c26ab6b20d405f13aee700968cb4207c5f7f9e724080a940a22189f3a376_prof);

        
        $__internal_4d5cd0a6f17a086d51d34f9ebca7994fca7187a2d715f35784135f5c97bc838a->leave($__internal_4d5cd0a6f17a086d51d34f9ebca7994fca7187a2d715f35784135f5c97bc838a_prof);

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
        return array (  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <a href=\"{{ path('fos_user_registration_register') }}\">register</a>
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
