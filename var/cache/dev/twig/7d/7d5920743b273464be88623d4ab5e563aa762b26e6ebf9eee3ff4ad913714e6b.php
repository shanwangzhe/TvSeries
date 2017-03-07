<?php

/* backend/episode/new.html.twig */
class __TwigTemplate_67522d7bf50eaa879b7296537e70d8a269211b0304030027396a40010ffa5090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/episode/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d2058f288b3938b2a811ac4b1a38f0d7712c04ea2c60e1368a6d1c98f4822e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2058f288b3938b2a811ac4b1a38f0d7712c04ea2c60e1368a6d1c98f4822e5->enter($__internal_6d2058f288b3938b2a811ac4b1a38f0d7712c04ea2c60e1368a6d1c98f4822e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/new.html.twig"));

        $__internal_c35f2bb1d32ed7c651234f7e82f7661f6aec9fdfd08979670bc181abc0b10e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35f2bb1d32ed7c651234f7e82f7661f6aec9fdfd08979670bc181abc0b10e40->enter($__internal_c35f2bb1d32ed7c651234f7e82f7661f6aec9fdfd08979670bc181abc0b10e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2058f288b3938b2a811ac4b1a38f0d7712c04ea2c60e1368a6d1c98f4822e5->leave($__internal_6d2058f288b3938b2a811ac4b1a38f0d7712c04ea2c60e1368a6d1c98f4822e5_prof);

        
        $__internal_c35f2bb1d32ed7c651234f7e82f7661f6aec9fdfd08979670bc181abc0b10e40->leave($__internal_c35f2bb1d32ed7c651234f7e82f7661f6aec9fdfd08979670bc181abc0b10e40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f31f9782f90882f93fc0f8ac8a51e7edf2b40d5dc224d14c43045a71f694909f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31f9782f90882f93fc0f8ac8a51e7edf2b40d5dc224d14c43045a71f694909f->enter($__internal_f31f9782f90882f93fc0f8ac8a51e7edf2b40d5dc224d14c43045a71f694909f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3baebf2556a5be77e77d4301b43a53d1d622b4771ea0f212f8a344af223b83a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baebf2556a5be77e77d4301b43a53d1d622b4771ea0f212f8a344af223b83a6->enter($__internal_3baebf2556a5be77e77d4301b43a53d1d622b4771ea0f212f8a344af223b83a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episode creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_3baebf2556a5be77e77d4301b43a53d1d622b4771ea0f212f8a344af223b83a6->leave($__internal_3baebf2556a5be77e77d4301b43a53d1d622b4771ea0f212f8a344af223b83a6_prof);

        
        $__internal_f31f9782f90882f93fc0f8ac8a51e7edf2b40d5dc224d14c43045a71f694909f->leave($__internal_f31f9782f90882f93fc0f8ac8a51e7edf2b40d5dc224d14c43045a71f694909f_prof);

    }

    public function getTemplateName()
    {
        return "backend/episode/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backend.html.twig' %}

{% block body %}
    <h1>Episode creation</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}


{% endblock %}
", "backend/episode/new.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/episode/new.html.twig");
    }
}
