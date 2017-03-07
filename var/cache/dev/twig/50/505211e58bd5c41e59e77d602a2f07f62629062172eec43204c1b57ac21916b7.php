<?php

/* backend/tvseries/new.html.twig */
class __TwigTemplate_2473ec0f93b8646a7abef1a89930659a0aedf86ce549896dfc81870a57073e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/tvseries/new.html.twig", 1);
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
        $__internal_4aa59c67aed5dd5537fbf6fc11c4dc29de9349db2304c0bd6c6cac069899a103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa59c67aed5dd5537fbf6fc11c4dc29de9349db2304c0bd6c6cac069899a103->enter($__internal_4aa59c67aed5dd5537fbf6fc11c4dc29de9349db2304c0bd6c6cac069899a103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/new.html.twig"));

        $__internal_a2874260440e9ad2f2a3221d2e0c51ad25e49cb692493faeafe338d7dd7ac805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2874260440e9ad2f2a3221d2e0c51ad25e49cb692493faeafe338d7dd7ac805->enter($__internal_a2874260440e9ad2f2a3221d2e0c51ad25e49cb692493faeafe338d7dd7ac805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa59c67aed5dd5537fbf6fc11c4dc29de9349db2304c0bd6c6cac069899a103->leave($__internal_4aa59c67aed5dd5537fbf6fc11c4dc29de9349db2304c0bd6c6cac069899a103_prof);

        
        $__internal_a2874260440e9ad2f2a3221d2e0c51ad25e49cb692493faeafe338d7dd7ac805->leave($__internal_a2874260440e9ad2f2a3221d2e0c51ad25e49cb692493faeafe338d7dd7ac805_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7239bcde6047877b60f89f35deb63bb11fa6371f1c7ccd3db9f56c6f5fb68470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7239bcde6047877b60f89f35deb63bb11fa6371f1c7ccd3db9f56c6f5fb68470->enter($__internal_7239bcde6047877b60f89f35deb63bb11fa6371f1c7ccd3db9f56c6f5fb68470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79548d6f1ae2890150d57449ba05b144d64649fb8d712a41435b0bcfb33c7cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79548d6f1ae2890150d57449ba05b144d64649fb8d712a41435b0bcfb33c7cde->enter($__internal_79548d6f1ae2890150d57449ba05b144d64649fb8d712a41435b0bcfb33c7cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tvseries creation</h1>

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

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_79548d6f1ae2890150d57449ba05b144d64649fb8d712a41435b0bcfb33c7cde->leave($__internal_79548d6f1ae2890150d57449ba05b144d64649fb8d712a41435b0bcfb33c7cde_prof);

        
        $__internal_7239bcde6047877b60f89f35deb63bb11fa6371f1c7ccd3db9f56c6f5fb68470->leave($__internal_7239bcde6047877b60f89f35deb63bb11fa6371f1c7ccd3db9f56c6f5fb68470_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tvseries creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('_adminIndex') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "backend/tvseries/new.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/tvseries/new.html.twig");
    }
}
