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
        $__internal_733e09cd1615f2ed357ed1921d813396ed67d3679e0389d7a9539e3d84fc4174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733e09cd1615f2ed357ed1921d813396ed67d3679e0389d7a9539e3d84fc4174->enter($__internal_733e09cd1615f2ed357ed1921d813396ed67d3679e0389d7a9539e3d84fc4174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bccb9d8020433d9a3540576f245acb15d875b6bb28d46cc71c42e779ec87a00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccb9d8020433d9a3540576f245acb15d875b6bb28d46cc71c42e779ec87a00d->enter($__internal_bccb9d8020433d9a3540576f245acb15d875b6bb28d46cc71c42e779ec87a00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <a href = \"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">Index</a> |
            ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                <a href=\"";
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
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 22
        echo "        </div>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_733e09cd1615f2ed357ed1921d813396ed67d3679e0389d7a9539e3d84fc4174->leave($__internal_733e09cd1615f2ed357ed1921d813396ed67d3679e0389d7a9539e3d84fc4174_prof);

        
        $__internal_bccb9d8020433d9a3540576f245acb15d875b6bb28d46cc71c42e779ec87a00d->leave($__internal_bccb9d8020433d9a3540576f245acb15d875b6bb28d46cc71c42e779ec87a00d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d23e2125d385fb00d90879e57f89871276247d101606b15a7d21aafa049e218b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23e2125d385fb00d90879e57f89871276247d101606b15a7d21aafa049e218b->enter($__internal_d23e2125d385fb00d90879e57f89871276247d101606b15a7d21aafa049e218b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a20b2a83bb44f82cfe1f912524c34dc46c13216510b6812553b958599288d3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20b2a83bb44f82cfe1f912524c34dc46c13216510b6812553b958599288d3ee->enter($__internal_a20b2a83bb44f82cfe1f912524c34dc46c13216510b6812553b958599288d3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TvSeries";
        
        $__internal_a20b2a83bb44f82cfe1f912524c34dc46c13216510b6812553b958599288d3ee->leave($__internal_a20b2a83bb44f82cfe1f912524c34dc46c13216510b6812553b958599288d3ee_prof);

        
        $__internal_d23e2125d385fb00d90879e57f89871276247d101606b15a7d21aafa049e218b->leave($__internal_d23e2125d385fb00d90879e57f89871276247d101606b15a7d21aafa049e218b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c83b2ffd34d9e06faaf3111918a8feaf0f0819311d8a95687b8d8b33f3c8e9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83b2ffd34d9e06faaf3111918a8feaf0f0819311d8a95687b8d8b33f3c8e9b9->enter($__internal_c83b2ffd34d9e06faaf3111918a8feaf0f0819311d8a95687b8d8b33f3c8e9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_186e9b1b7cad967979511de763bebcf7ea9be36091a80b9454bdecf045e2295a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186e9b1b7cad967979511de763bebcf7ea9be36091a80b9454bdecf045e2295a->enter($__internal_186e9b1b7cad967979511de763bebcf7ea9be36091a80b9454bdecf045e2295a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_186e9b1b7cad967979511de763bebcf7ea9be36091a80b9454bdecf045e2295a->leave($__internal_186e9b1b7cad967979511de763bebcf7ea9be36091a80b9454bdecf045e2295a_prof);

        
        $__internal_c83b2ffd34d9e06faaf3111918a8feaf0f0819311d8a95687b8d8b33f3c8e9b9->leave($__internal_c83b2ffd34d9e06faaf3111918a8feaf0f0819311d8a95687b8d8b33f3c8e9b9_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5b9a1028662fb3f43a05241e94b9d534e445f1d00a161e9887074bf0324761c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b9a1028662fb3f43a05241e94b9d534e445f1d00a161e9887074bf0324761c->enter($__internal_e5b9a1028662fb3f43a05241e94b9d534e445f1d00a161e9887074bf0324761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f81fbfb0c14235126d524bfeb61db5d31ea112ab2e1c2b58528e96fc8dfefd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81fbfb0c14235126d524bfeb61db5d31ea112ab2e1c2b58528e96fc8dfefd8a->enter($__internal_f81fbfb0c14235126d524bfeb61db5d31ea112ab2e1c2b58528e96fc8dfefd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f81fbfb0c14235126d524bfeb61db5d31ea112ab2e1c2b58528e96fc8dfefd8a->leave($__internal_f81fbfb0c14235126d524bfeb61db5d31ea112ab2e1c2b58528e96fc8dfefd8a_prof);

        
        $__internal_e5b9a1028662fb3f43a05241e94b9d534e445f1d00a161e9887074bf0324761c->leave($__internal_e5b9a1028662fb3f43a05241e94b9d534e445f1d00a161e9887074bf0324761c_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5aa5786d9f89fd66106c27aad4085fb1c16361e418028d6b1db2d08fb0f7b55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa5786d9f89fd66106c27aad4085fb1c16361e418028d6b1db2d08fb0f7b55a->enter($__internal_5aa5786d9f89fd66106c27aad4085fb1c16361e418028d6b1db2d08fb0f7b55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e384e55bc4da6f6f1f088d26a7b1e56a03eeba68acda3ed8675e1afeec2ee62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e384e55bc4da6f6f1f088d26a7b1e56a03eeba68acda3ed8675e1afeec2ee62a->enter($__internal_e384e55bc4da6f6f1f088d26a7b1e56a03eeba68acda3ed8675e1afeec2ee62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e384e55bc4da6f6f1f088d26a7b1e56a03eeba68acda3ed8675e1afeec2ee62a->leave($__internal_e384e55bc4da6f6f1f088d26a7b1e56a03eeba68acda3ed8675e1afeec2ee62a_prof);

        
        $__internal_5aa5786d9f89fd66106c27aad4085fb1c16361e418028d6b1db2d08fb0f7b55a->leave($__internal_5aa5786d9f89fd66106c27aad4085fb1c16361e418028d6b1db2d08fb0f7b55a_prof);

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
        return array (  155 => 24,  138 => 23,  121 => 6,  103 => 5,  91 => 25,  88 => 24,  86 => 23,  83 => 22,  75 => 20,  69 => 17,  65 => 16,  60 => 14,  55 => 13,  53 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
            <a href = \"{{ path('_index') }}\">Index</a> |
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
", "base.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/base.html.twig");
    }
}
