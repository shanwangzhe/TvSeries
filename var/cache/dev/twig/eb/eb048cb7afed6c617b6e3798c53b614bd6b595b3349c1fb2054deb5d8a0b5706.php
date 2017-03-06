<?php

/* backend/episode/edit.html.twig */
class __TwigTemplate_2fc9245b6019ba51befefa2121cd78ca46b86c562d72b6d13743ce139829161b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend/episode/edit.html.twig", 1);
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
        $__internal_685edb510b8062d7a6fdc025bbf479bf16c91cd0cac1ad6743638098f2548289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685edb510b8062d7a6fdc025bbf479bf16c91cd0cac1ad6743638098f2548289->enter($__internal_685edb510b8062d7a6fdc025bbf479bf16c91cd0cac1ad6743638098f2548289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/edit.html.twig"));

        $__internal_62a11d20dda0e6fb3aa6ba45d2a16d5e3d52026906d192c61498129750a046f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a11d20dda0e6fb3aa6ba45d2a16d5e3d52026906d192c61498129750a046f4->enter($__internal_62a11d20dda0e6fb3aa6ba45d2a16d5e3d52026906d192c61498129750a046f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685edb510b8062d7a6fdc025bbf479bf16c91cd0cac1ad6743638098f2548289->leave($__internal_685edb510b8062d7a6fdc025bbf479bf16c91cd0cac1ad6743638098f2548289_prof);

        
        $__internal_62a11d20dda0e6fb3aa6ba45d2a16d5e3d52026906d192c61498129750a046f4->leave($__internal_62a11d20dda0e6fb3aa6ba45d2a16d5e3d52026906d192c61498129750a046f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cffcc0b97d090291adba9a4d5e6e125552a44f2a5343edc71a5bb2c99480056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cffcc0b97d090291adba9a4d5e6e125552a44f2a5343edc71a5bb2c99480056->enter($__internal_0cffcc0b97d090291adba9a4d5e6e125552a44f2a5343edc71a5bb2c99480056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a17ebc2a624895c3654ae1a5cf4be747734b2d248974d7e720fc728d44bd63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a17ebc2a624895c3654ae1a5cf4be747734b2d248974d7e720fc728d44bd63e->enter($__internal_0a17ebc2a624895c3654ae1a5cf4be747734b2d248974d7e720fc728d44bd63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tvseries edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_episodeIndex", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "tvSeriesId", array()))), "html", null, true);
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0a17ebc2a624895c3654ae1a5cf4be747734b2d248974d7e720fc728d44bd63e->leave($__internal_0a17ebc2a624895c3654ae1a5cf4be747734b2d248974d7e720fc728d44bd63e_prof);

        
        $__internal_0cffcc0b97d090291adba9a4d5e6e125552a44f2a5343edc71a5bb2c99480056->leave($__internal_0cffcc0b97d090291adba9a4d5e6e125552a44f2a5343edc71a5bb2c99480056_prof);

    }

    public function getTemplateName()
    {
        return "backend/episode/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tvseries edit</h1>

    {{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
    <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('_episodeIndex',{'id':tvSeries.tvSeriesId}) }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "backend/episode/edit.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/backend/episode/edit.html.twig");
    }
}
