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
        $__internal_955d16cafa4d58f140fe53f3a26e9c7b24bf918b93c3aa433fa84cd9139679e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955d16cafa4d58f140fe53f3a26e9c7b24bf918b93c3aa433fa84cd9139679e6->enter($__internal_955d16cafa4d58f140fe53f3a26e9c7b24bf918b93c3aa433fa84cd9139679e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b43c94b4c2aa2ffb0f4012e405e4107a92e315d5411c1c0c571243946bc8f490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43c94b4c2aa2ffb0f4012e405e4107a92e315d5411c1c0c571243946bc8f490->enter($__internal_b43c94b4c2aa2ffb0f4012e405e4107a92e315d5411c1c0c571243946bc8f490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_955d16cafa4d58f140fe53f3a26e9c7b24bf918b93c3aa433fa84cd9139679e6->leave($__internal_955d16cafa4d58f140fe53f3a26e9c7b24bf918b93c3aa433fa84cd9139679e6_prof);

        
        $__internal_b43c94b4c2aa2ffb0f4012e405e4107a92e315d5411c1c0c571243946bc8f490->leave($__internal_b43c94b4c2aa2ffb0f4012e405e4107a92e315d5411c1c0c571243946bc8f490_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64ec07757f4564b67b4befab23062426a91b869ef04c5fadc045e7e0b3cd287d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ec07757f4564b67b4befab23062426a91b869ef04c5fadc045e7e0b3cd287d->enter($__internal_64ec07757f4564b67b4befab23062426a91b869ef04c5fadc045e7e0b3cd287d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4d94171a31c4a0bf16eb443eef3ca4ca0948e719347eb7de88b18669f5784b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d94171a31c4a0bf16eb443eef3ca4ca0948e719347eb7de88b18669f5784b9->enter($__internal_d4d94171a31c4a0bf16eb443eef3ca4ca0948e719347eb7de88b18669f5784b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TvSeries";
        
        $__internal_d4d94171a31c4a0bf16eb443eef3ca4ca0948e719347eb7de88b18669f5784b9->leave($__internal_d4d94171a31c4a0bf16eb443eef3ca4ca0948e719347eb7de88b18669f5784b9_prof);

        
        $__internal_64ec07757f4564b67b4befab23062426a91b869ef04c5fadc045e7e0b3cd287d->leave($__internal_64ec07757f4564b67b4befab23062426a91b869ef04c5fadc045e7e0b3cd287d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5e37d2f27a0288465cc72a497866f043c492c69907d71d660a4b888480d7149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e37d2f27a0288465cc72a497866f043c492c69907d71d660a4b888480d7149->enter($__internal_b5e37d2f27a0288465cc72a497866f043c492c69907d71d660a4b888480d7149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4a8807ffc74ff0c358ea9c76d69ce6d0a5b3fdbdd22e7dd54b7267c106faaa69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8807ffc74ff0c358ea9c76d69ce6d0a5b3fdbdd22e7dd54b7267c106faaa69->enter($__internal_4a8807ffc74ff0c358ea9c76d69ce6d0a5b3fdbdd22e7dd54b7267c106faaa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4a8807ffc74ff0c358ea9c76d69ce6d0a5b3fdbdd22e7dd54b7267c106faaa69->leave($__internal_4a8807ffc74ff0c358ea9c76d69ce6d0a5b3fdbdd22e7dd54b7267c106faaa69_prof);

        
        $__internal_b5e37d2f27a0288465cc72a497866f043c492c69907d71d660a4b888480d7149->leave($__internal_b5e37d2f27a0288465cc72a497866f043c492c69907d71d660a4b888480d7149_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_60def86ac4dce8b754b35f1e0b57957f6133346e4d8af9cc5de73b2a50c9de50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60def86ac4dce8b754b35f1e0b57957f6133346e4d8af9cc5de73b2a50c9de50->enter($__internal_60def86ac4dce8b754b35f1e0b57957f6133346e4d8af9cc5de73b2a50c9de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10b3bc8421914b7430b9d524a4de93f55ca0c5638b1709378a99808090da1783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b3bc8421914b7430b9d524a4de93f55ca0c5638b1709378a99808090da1783->enter($__internal_10b3bc8421914b7430b9d524a4de93f55ca0c5638b1709378a99808090da1783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10b3bc8421914b7430b9d524a4de93f55ca0c5638b1709378a99808090da1783->leave($__internal_10b3bc8421914b7430b9d524a4de93f55ca0c5638b1709378a99808090da1783_prof);

        
        $__internal_60def86ac4dce8b754b35f1e0b57957f6133346e4d8af9cc5de73b2a50c9de50->leave($__internal_60def86ac4dce8b754b35f1e0b57957f6133346e4d8af9cc5de73b2a50c9de50_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37406869a777245033a10eb38bacb249ae14e70fb5fae44db44c4d09eb25d428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37406869a777245033a10eb38bacb249ae14e70fb5fae44db44c4d09eb25d428->enter($__internal_37406869a777245033a10eb38bacb249ae14e70fb5fae44db44c4d09eb25d428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_24d5caeed02b1eb7c3d9f35e6677a33ae9ce4a37f13b3a84ac38cca0809eb3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d5caeed02b1eb7c3d9f35e6677a33ae9ce4a37f13b3a84ac38cca0809eb3fc->enter($__internal_24d5caeed02b1eb7c3d9f35e6677a33ae9ce4a37f13b3a84ac38cca0809eb3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24d5caeed02b1eb7c3d9f35e6677a33ae9ce4a37f13b3a84ac38cca0809eb3fc->leave($__internal_24d5caeed02b1eb7c3d9f35e6677a33ae9ce4a37f13b3a84ac38cca0809eb3fc_prof);

        
        $__internal_37406869a777245033a10eb38bacb249ae14e70fb5fae44db44c4d09eb25d428->leave($__internal_37406869a777245033a10eb38bacb249ae14e70fb5fae44db44c4d09eb25d428_prof);

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
", "base.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/base.html.twig");
    }
}
