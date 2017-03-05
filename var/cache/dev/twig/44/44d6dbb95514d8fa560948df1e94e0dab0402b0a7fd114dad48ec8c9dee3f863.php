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
        $__internal_9f55b7dc5f81db86012d593c7529f579d0d921245bcb485f4e34d1ccf6d6ea13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f55b7dc5f81db86012d593c7529f579d0d921245bcb485f4e34d1ccf6d6ea13->enter($__internal_9f55b7dc5f81db86012d593c7529f579d0d921245bcb485f4e34d1ccf6d6ea13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c300422c642bab2427c05ad078ca7c8b747355decd489cc94b804fc80496a309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c300422c642bab2427c05ad078ca7c8b747355decd489cc94b804fc80496a309->enter($__internal_c300422c642bab2427c05ad078ca7c8b747355decd489cc94b804fc80496a309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeIndex");
            echo "\">
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
        
        $__internal_9f55b7dc5f81db86012d593c7529f579d0d921245bcb485f4e34d1ccf6d6ea13->leave($__internal_9f55b7dc5f81db86012d593c7529f579d0d921245bcb485f4e34d1ccf6d6ea13_prof);

        
        $__internal_c300422c642bab2427c05ad078ca7c8b747355decd489cc94b804fc80496a309->leave($__internal_c300422c642bab2427c05ad078ca7c8b747355decd489cc94b804fc80496a309_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e107905b500fa18f80d55775057023bf97c8268b918c80dde64e6b76a79da92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e107905b500fa18f80d55775057023bf97c8268b918c80dde64e6b76a79da92->enter($__internal_1e107905b500fa18f80d55775057023bf97c8268b918c80dde64e6b76a79da92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5337b06ed15eabf2a4e89cd936434b7cf3cc444444f103b38163f86adf923ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5337b06ed15eabf2a4e89cd936434b7cf3cc444444f103b38163f86adf923ba->enter($__internal_d5337b06ed15eabf2a4e89cd936434b7cf3cc444444f103b38163f86adf923ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TvSeries";
        
        $__internal_d5337b06ed15eabf2a4e89cd936434b7cf3cc444444f103b38163f86adf923ba->leave($__internal_d5337b06ed15eabf2a4e89cd936434b7cf3cc444444f103b38163f86adf923ba_prof);

        
        $__internal_1e107905b500fa18f80d55775057023bf97c8268b918c80dde64e6b76a79da92->leave($__internal_1e107905b500fa18f80d55775057023bf97c8268b918c80dde64e6b76a79da92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d69c86c253601505de90418b6b9f5f53d32f9c72b1aff0b0bb3a54c8be298a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69c86c253601505de90418b6b9f5f53d32f9c72b1aff0b0bb3a54c8be298a86->enter($__internal_d69c86c253601505de90418b6b9f5f53d32f9c72b1aff0b0bb3a54c8be298a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cde3873b3bf185ebb6a89e9723e2582cdd9735f1aadc72a5c1cf8b3b00875e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde3873b3bf185ebb6a89e9723e2582cdd9735f1aadc72a5c1cf8b3b00875e68->enter($__internal_cde3873b3bf185ebb6a89e9723e2582cdd9735f1aadc72a5c1cf8b3b00875e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cde3873b3bf185ebb6a89e9723e2582cdd9735f1aadc72a5c1cf8b3b00875e68->leave($__internal_cde3873b3bf185ebb6a89e9723e2582cdd9735f1aadc72a5c1cf8b3b00875e68_prof);

        
        $__internal_d69c86c253601505de90418b6b9f5f53d32f9c72b1aff0b0bb3a54c8be298a86->leave($__internal_d69c86c253601505de90418b6b9f5f53d32f9c72b1aff0b0bb3a54c8be298a86_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b0a614f492cbbeee21fa0e5c7c40e63b41755e3bad15904b6936bee7a73548c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0a614f492cbbeee21fa0e5c7c40e63b41755e3bad15904b6936bee7a73548c->enter($__internal_9b0a614f492cbbeee21fa0e5c7c40e63b41755e3bad15904b6936bee7a73548c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebb4fd33f3d6100a0e8c3616624c8a89431ef01cc8d5a57f20a676233182d7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb4fd33f3d6100a0e8c3616624c8a89431ef01cc8d5a57f20a676233182d7d4->enter($__internal_ebb4fd33f3d6100a0e8c3616624c8a89431ef01cc8d5a57f20a676233182d7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ebb4fd33f3d6100a0e8c3616624c8a89431ef01cc8d5a57f20a676233182d7d4->leave($__internal_ebb4fd33f3d6100a0e8c3616624c8a89431ef01cc8d5a57f20a676233182d7d4_prof);

        
        $__internal_9b0a614f492cbbeee21fa0e5c7c40e63b41755e3bad15904b6936bee7a73548c->leave($__internal_9b0a614f492cbbeee21fa0e5c7c40e63b41755e3bad15904b6936bee7a73548c_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b373ff2d6264b55583e7f7051e126e038180da3e84655059f6c9b06291be87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b373ff2d6264b55583e7f7051e126e038180da3e84655059f6c9b06291be87b->enter($__internal_1b373ff2d6264b55583e7f7051e126e038180da3e84655059f6c9b06291be87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_75838178672a7c6fc61ffed4249acfad5f8ab2a15aa7b7afac0bd779e5c0545a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75838178672a7c6fc61ffed4249acfad5f8ab2a15aa7b7afac0bd779e5c0545a->enter($__internal_75838178672a7c6fc61ffed4249acfad5f8ab2a15aa7b7afac0bd779e5c0545a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_75838178672a7c6fc61ffed4249acfad5f8ab2a15aa7b7afac0bd779e5c0545a->leave($__internal_75838178672a7c6fc61ffed4249acfad5f8ab2a15aa7b7afac0bd779e5c0545a_prof);

        
        $__internal_1b373ff2d6264b55583e7f7051e126e038180da3e84655059f6c9b06291be87b->leave($__internal_1b373ff2d6264b55583e7f7051e126e038180da3e84655059f6c9b06291be87b_prof);

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
        return array (  151 => 23,  134 => 22,  117 => 6,  99 => 5,  87 => 24,  84 => 23,  82 => 22,  79 => 21,  71 => 19,  65 => 16,  61 => 15,  56 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                <a href=\"{{ path('_userEpisodeIndex')}}\">
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
