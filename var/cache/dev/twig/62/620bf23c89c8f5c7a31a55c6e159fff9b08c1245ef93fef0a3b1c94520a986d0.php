<?php

/* episode/new.html.twig */
class __TwigTemplate_a565624b1ad98e71de9a539b25185e3e908d80744258ecb12baa11410855027d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "episode/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_758ae7ee2301af90a8b0440b11b02a8c99b00e41ff42a65b298046a5ad2db4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758ae7ee2301af90a8b0440b11b02a8c99b00e41ff42a65b298046a5ad2db4c1->enter($__internal_758ae7ee2301af90a8b0440b11b02a8c99b00e41ff42a65b298046a5ad2db4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/new.html.twig"));

        $__internal_83adce45433e66186363dfdeb539dfdfd4635cef7b4d1d00d7526624b672f6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83adce45433e66186363dfdeb539dfdfd4635cef7b4d1d00d7526624b672f6f9->enter($__internal_83adce45433e66186363dfdeb539dfdfd4635cef7b4d1d00d7526624b672f6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758ae7ee2301af90a8b0440b11b02a8c99b00e41ff42a65b298046a5ad2db4c1->leave($__internal_758ae7ee2301af90a8b0440b11b02a8c99b00e41ff42a65b298046a5ad2db4c1_prof);

        
        $__internal_83adce45433e66186363dfdeb539dfdfd4635cef7b4d1d00d7526624b672f6f9->leave($__internal_83adce45433e66186363dfdeb539dfdfd4635cef7b4d1d00d7526624b672f6f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceb855df96049ac71fe3b0b50d9829869112b51919eca9f07877a78397b4a075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb855df96049ac71fe3b0b50d9829869112b51919eca9f07877a78397b4a075->enter($__internal_ceb855df96049ac71fe3b0b50d9829869112b51919eca9f07877a78397b4a075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9e83754107138106d9689e394a0b87ec4f78792436e43bb407ed9085a44a91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e83754107138106d9689e394a0b87ec4f78792436e43bb407ed9085a44a91e->enter($__internal_f9e83754107138106d9689e394a0b87ec4f78792436e43bb407ed9085a44a91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9e83754107138106d9689e394a0b87ec4f78792436e43bb407ed9085a44a91e->leave($__internal_f9e83754107138106d9689e394a0b87ec4f78792436e43bb407ed9085a44a91e_prof);

        
        $__internal_ceb855df96049ac71fe3b0b50d9829869112b51919eca9f07877a78397b4a075->leave($__internal_ceb855df96049ac71fe3b0b50d9829869112b51919eca9f07877a78397b4a075_prof);

    }

    public function getTemplateName()
    {
        return "episode/new.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Episode creation</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}


{% endblock %}
", "episode/new.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/episode/new.html.twig");
    }
}
