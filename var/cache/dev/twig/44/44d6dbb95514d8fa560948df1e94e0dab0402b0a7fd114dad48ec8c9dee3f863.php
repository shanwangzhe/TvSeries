<?php

/* base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13d0f0a76735a7a86f821211a274d5e162a0013252e098426d96d85c21002961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d0f0a76735a7a86f821211a274d5e162a0013252e098426d96d85c21002961->enter($__internal_13d0f0a76735a7a86f821211a274d5e162a0013252e098426d96d85c21002961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_08c7c3cc77a68cc424232e57e4afb2dd0f387127cf95a1527df06da971864d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c7c3cc77a68cc424232e57e4afb2dd0f387127cf95a1527df06da971864d58->enter($__internal_08c7c3cc77a68cc424232e57e4afb2dd0f387127cf95a1527df06da971864d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div>
            ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                <a href=\"_userEpisode\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                </a>
                <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 19
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 21
        echo "        </div>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_13d0f0a76735a7a86f821211a274d5e162a0013252e098426d96d85c21002961->leave($__internal_13d0f0a76735a7a86f821211a274d5e162a0013252e098426d96d85c21002961_prof);

        
        $__internal_08c7c3cc77a68cc424232e57e4afb2dd0f387127cf95a1527df06da971864d58->leave($__internal_08c7c3cc77a68cc424232e57e4afb2dd0f387127cf95a1527df06da971864d58_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0197ee2f975e311391cd503f197f3c8458f227243cf57407a38ad24cc61fe80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0197ee2f975e311391cd503f197f3c8458f227243cf57407a38ad24cc61fe80->enter($__internal_a0197ee2f975e311391cd503f197f3c8458f227243cf57407a38ad24cc61fe80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a3a67cbac729617b6dec660b7b8360077c6de67688019bbc8f3f9ec64885a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3a67cbac729617b6dec660b7b8360077c6de67688019bbc8f3f9ec64885a8b->enter($__internal_3a3a67cbac729617b6dec660b7b8360077c6de67688019bbc8f3f9ec64885a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TvSeries";
        
        $__internal_3a3a67cbac729617b6dec660b7b8360077c6de67688019bbc8f3f9ec64885a8b->leave($__internal_3a3a67cbac729617b6dec660b7b8360077c6de67688019bbc8f3f9ec64885a8b_prof);

        
        $__internal_a0197ee2f975e311391cd503f197f3c8458f227243cf57407a38ad24cc61fe80->leave($__internal_a0197ee2f975e311391cd503f197f3c8458f227243cf57407a38ad24cc61fe80_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed91e37015e2037004183fd0a085b8bbbb58e8c0cbfe38920600d989adab5fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed91e37015e2037004183fd0a085b8bbbb58e8c0cbfe38920600d989adab5fd6->enter($__internal_ed91e37015e2037004183fd0a085b8bbbb58e8c0cbfe38920600d989adab5fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7a747763caa3acc59019cb90e77ff3b537ca1c7be7ca6a85f3c565f82bbb0adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a747763caa3acc59019cb90e77ff3b537ca1c7be7ca6a85f3c565f82bbb0adf->enter($__internal_7a747763caa3acc59019cb90e77ff3b537ca1c7be7ca6a85f3c565f82bbb0adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a747763caa3acc59019cb90e77ff3b537ca1c7be7ca6a85f3c565f82bbb0adf->leave($__internal_7a747763caa3acc59019cb90e77ff3b537ca1c7be7ca6a85f3c565f82bbb0adf_prof);

        
        $__internal_ed91e37015e2037004183fd0a085b8bbbb58e8c0cbfe38920600d989adab5fd6->leave($__internal_ed91e37015e2037004183fd0a085b8bbbb58e8c0cbfe38920600d989adab5fd6_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ffcd2d11e113adc872bfd1db33d5a87f5fe8bd8a944b34a1734dd4991f14bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffcd2d11e113adc872bfd1db33d5a87f5fe8bd8a944b34a1734dd4991f14bc9->enter($__internal_7ffcd2d11e113adc872bfd1db33d5a87f5fe8bd8a944b34a1734dd4991f14bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b419fe74a856821f9aaace3a38e80ec2e0050946869619054422075f65d69bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b419fe74a856821f9aaace3a38e80ec2e0050946869619054422075f65d69bb0->enter($__internal_b419fe74a856821f9aaace3a38e80ec2e0050946869619054422075f65d69bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b419fe74a856821f9aaace3a38e80ec2e0050946869619054422075f65d69bb0->leave($__internal_b419fe74a856821f9aaace3a38e80ec2e0050946869619054422075f65d69bb0_prof);

        
        $__internal_7ffcd2d11e113adc872bfd1db33d5a87f5fe8bd8a944b34a1734dd4991f14bc9->leave($__internal_7ffcd2d11e113adc872bfd1db33d5a87f5fe8bd8a944b34a1734dd4991f14bc9_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f86a8318232928ce49197ad0495fbd2b736c8971e64b2f8835c2db561d802591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86a8318232928ce49197ad0495fbd2b736c8971e64b2f8835c2db561d802591->enter($__internal_f86a8318232928ce49197ad0495fbd2b736c8971e64b2f8835c2db561d802591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_23ddb599547672369ced528a3f4e8eeac66896574d8fd1db0fe6bc4d1caa360e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ddb599547672369ced528a3f4e8eeac66896574d8fd1db0fe6bc4d1caa360e->enter($__internal_23ddb599547672369ced528a3f4e8eeac66896574d8fd1db0fe6bc4d1caa360e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_23ddb599547672369ced528a3f4e8eeac66896574d8fd1db0fe6bc4d1caa360e->leave($__internal_23ddb599547672369ced528a3f4e8eeac66896574d8fd1db0fe6bc4d1caa360e_prof);

        
        $__internal_f86a8318232928ce49197ad0495fbd2b736c8971e64b2f8835c2db561d802591->leave($__internal_f86a8318232928ce49197ad0495fbd2b736c8971e64b2f8835c2db561d802591_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 23,  132 => 22,  115 => 6,  97 => 5,  85 => 24,  82 => 23,  80 => 22,  77 => 21,  69 => 19,  63 => 16,  59 => 15,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}TvSeries{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <a href=\"_userEpisode\">
                    {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                </a>
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/base.html.twig");
    }
}
