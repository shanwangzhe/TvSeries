<?php

/* backend/tvseries/edit.html.twig */
class __TwigTemplate_ddc4b60bcb2c723e30776450b5c7345d451e2c3eab3baf87b735a8b995a37940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend/tvseries/edit.html.twig", 1);
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
        $__internal_cc58700d968f232ed6eadbe118909095c4bd3600ba1fb12c13ff77be87bce367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc58700d968f232ed6eadbe118909095c4bd3600ba1fb12c13ff77be87bce367->enter($__internal_cc58700d968f232ed6eadbe118909095c4bd3600ba1fb12c13ff77be87bce367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/edit.html.twig"));

        $__internal_4d21cde1a9224d37992fe412e7f2c96e03e976565d788f326bd064b39109151d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d21cde1a9224d37992fe412e7f2c96e03e976565d788f326bd064b39109151d->enter($__internal_4d21cde1a9224d37992fe412e7f2c96e03e976565d788f326bd064b39109151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc58700d968f232ed6eadbe118909095c4bd3600ba1fb12c13ff77be87bce367->leave($__internal_cc58700d968f232ed6eadbe118909095c4bd3600ba1fb12c13ff77be87bce367_prof);

        
        $__internal_4d21cde1a9224d37992fe412e7f2c96e03e976565d788f326bd064b39109151d->leave($__internal_4d21cde1a9224d37992fe412e7f2c96e03e976565d788f326bd064b39109151d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97ca6984bef3a36f278737672db49711724e0ddc69c4b656b98b6674777358b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ca6984bef3a36f278737672db49711724e0ddc69c4b656b98b6674777358b3->enter($__internal_97ca6984bef3a36f278737672db49711724e0ddc69c4b656b98b6674777358b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ebbb456d9feca2195d854b4acb9135becc6b7e5faf2610c218fdc45a48c01b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ebbb456d9feca2195d854b4acb9135becc6b7e5faf2610c218fdc45a48c01b6->enter($__internal_4ebbb456d9feca2195d854b4acb9135becc6b7e5faf2610c218fdc45a48c01b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
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
        
        $__internal_4ebbb456d9feca2195d854b4acb9135becc6b7e5faf2610c218fdc45a48c01b6->leave($__internal_4ebbb456d9feca2195d854b4acb9135becc6b7e5faf2610c218fdc45a48c01b6_prof);

        
        $__internal_97ca6984bef3a36f278737672db49711724e0ddc69c4b656b98b6674777358b3->leave($__internal_97ca6984bef3a36f278737672db49711724e0ddc69c4b656b98b6674777358b3_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/edit.html.twig";
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
            <a href=\"{{ path('_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "backend/tvseries/edit.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/backend/tvseries/edit.html.twig");
    }
}
