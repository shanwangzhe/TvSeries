<?php

/* backend.html.twig */
class __TwigTemplate_99e33ecbb65d3de49e538a648a6b2a596b1d658a2989bdc4a0d3afeb9e6ab789 extends Twig_Template
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
        $__internal_5ec6e5ee889e0ecc23b1f8028f20f07b87ebedb5e4006a40eb079eeab2eb0c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec6e5ee889e0ecc23b1f8028f20f07b87ebedb5e4006a40eb079eeab2eb0c04->enter($__internal_5ec6e5ee889e0ecc23b1f8028f20f07b87ebedb5e4006a40eb079eeab2eb0c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend.html.twig"));

        $__internal_85722870b6a5ca21974786dbb3c24a5533383ba142f3e9df451a1af648d9707f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85722870b6a5ca21974786dbb3c24a5533383ba142f3e9df451a1af648d9707f->enter($__internal_85722870b6a5ca21974786dbb3c24a5533383ba142f3e9df451a1af648d9707f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div>
    <a href = \"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
        echo "\">Index</a> |
    ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeIndex");
            echo "\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
        </a> |
        <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 20
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 22
        echo "</div>
";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "</body>
</html>
";
        
        $__internal_5ec6e5ee889e0ecc23b1f8028f20f07b87ebedb5e4006a40eb079eeab2eb0c04->leave($__internal_5ec6e5ee889e0ecc23b1f8028f20f07b87ebedb5e4006a40eb079eeab2eb0c04_prof);

        
        $__internal_85722870b6a5ca21974786dbb3c24a5533383ba142f3e9df451a1af648d9707f->leave($__internal_85722870b6a5ca21974786dbb3c24a5533383ba142f3e9df451a1af648d9707f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c9f024c8717eb82636ec03cf51a2e18e933b342855727972bab8f61a7011864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9f024c8717eb82636ec03cf51a2e18e933b342855727972bab8f61a7011864->enter($__internal_2c9f024c8717eb82636ec03cf51a2e18e933b342855727972bab8f61a7011864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f896fbbc01d1a3f219c19c89f9d4ddca5fc8bad90a07808f5d432e9b963ffcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f896fbbc01d1a3f219c19c89f9d4ddca5fc8bad90a07808f5d432e9b963ffcd5->enter($__internal_f896fbbc01d1a3f219c19c89f9d4ddca5fc8bad90a07808f5d432e9b963ffcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TvSeries";
        
        $__internal_f896fbbc01d1a3f219c19c89f9d4ddca5fc8bad90a07808f5d432e9b963ffcd5->leave($__internal_f896fbbc01d1a3f219c19c89f9d4ddca5fc8bad90a07808f5d432e9b963ffcd5_prof);

        
        $__internal_2c9f024c8717eb82636ec03cf51a2e18e933b342855727972bab8f61a7011864->leave($__internal_2c9f024c8717eb82636ec03cf51a2e18e933b342855727972bab8f61a7011864_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8510e31609a7744b7a6f15d8bf914500eaf57c7441c0b8095806a36bf32e9cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8510e31609a7744b7a6f15d8bf914500eaf57c7441c0b8095806a36bf32e9cb1->enter($__internal_8510e31609a7744b7a6f15d8bf914500eaf57c7441c0b8095806a36bf32e9cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_242c600020c5cf57aeca918f08d560572a1b6d4f7c8045a501ba2a1e3ae32946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242c600020c5cf57aeca918f08d560572a1b6d4f7c8045a501ba2a1e3ae32946->enter($__internal_242c600020c5cf57aeca918f08d560572a1b6d4f7c8045a501ba2a1e3ae32946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_242c600020c5cf57aeca918f08d560572a1b6d4f7c8045a501ba2a1e3ae32946->leave($__internal_242c600020c5cf57aeca918f08d560572a1b6d4f7c8045a501ba2a1e3ae32946_prof);

        
        $__internal_8510e31609a7744b7a6f15d8bf914500eaf57c7441c0b8095806a36bf32e9cb1->leave($__internal_8510e31609a7744b7a6f15d8bf914500eaf57c7441c0b8095806a36bf32e9cb1_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb48c0ed9e29fe77e94ea0d370e6d9b3bf45162d418997c0f7b90817774c85e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb48c0ed9e29fe77e94ea0d370e6d9b3bf45162d418997c0f7b90817774c85e5->enter($__internal_fb48c0ed9e29fe77e94ea0d370e6d9b3bf45162d418997c0f7b90817774c85e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3bf4150f0265dc330e7f6bd7e8932bce2f460db009ff0bb48bb27b35e3c2fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bf4150f0265dc330e7f6bd7e8932bce2f460db009ff0bb48bb27b35e3c2fdb->enter($__internal_a3bf4150f0265dc330e7f6bd7e8932bce2f460db009ff0bb48bb27b35e3c2fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3bf4150f0265dc330e7f6bd7e8932bce2f460db009ff0bb48bb27b35e3c2fdb->leave($__internal_a3bf4150f0265dc330e7f6bd7e8932bce2f460db009ff0bb48bb27b35e3c2fdb_prof);

        
        $__internal_fb48c0ed9e29fe77e94ea0d370e6d9b3bf45162d418997c0f7b90817774c85e5->leave($__internal_fb48c0ed9e29fe77e94ea0d370e6d9b3bf45162d418997c0f7b90817774c85e5_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4ec87d37bc6821cf5e50941e3b1a211eb667f1e0a29340a2e1a7d595d4b2af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ec87d37bc6821cf5e50941e3b1a211eb667f1e0a29340a2e1a7d595d4b2af8->enter($__internal_c4ec87d37bc6821cf5e50941e3b1a211eb667f1e0a29340a2e1a7d595d4b2af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_791e74b9d474ca3384fe5dd763721272d1825527d802e1b4ab1b8221ef76f1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791e74b9d474ca3384fe5dd763721272d1825527d802e1b4ab1b8221ef76f1e3->enter($__internal_791e74b9d474ca3384fe5dd763721272d1825527d802e1b4ab1b8221ef76f1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_791e74b9d474ca3384fe5dd763721272d1825527d802e1b4ab1b8221ef76f1e3->leave($__internal_791e74b9d474ca3384fe5dd763721272d1825527d802e1b4ab1b8221ef76f1e3_prof);

        
        $__internal_c4ec87d37bc6821cf5e50941e3b1a211eb667f1e0a29340a2e1a7d595d4b2af8->leave($__internal_c4ec87d37bc6821cf5e50941e3b1a211eb667f1e0a29340a2e1a7d595d4b2af8_prof);

    }

    public function getTemplateName()
    {
        return "backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 24,  137 => 23,  120 => 6,  102 => 5,  90 => 25,  88 => 24,  86 => 23,  83 => 22,  75 => 20,  69 => 17,  65 => 16,  60 => 14,  55 => 13,  53 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <a href = \"{{ path('_adminIndex') }}\">Index</a> |
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <a href=\"{{ path('_userEpisodeIndex')}}\">
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}
        </a> |
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
", "backend.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend.html.twig");
    }
}
