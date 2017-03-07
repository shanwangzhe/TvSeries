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
        $__internal_9a5df64940eb0d9f45564aefb85da6d2ae9d2d2a521ff073d4dd758134847e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5df64940eb0d9f45564aefb85da6d2ae9d2d2a521ff073d4dd758134847e51->enter($__internal_9a5df64940eb0d9f45564aefb85da6d2ae9d2d2a521ff073d4dd758134847e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/edit.html.twig"));

        $__internal_7df866641a7b9eed8e50c7e62018d7cf9dbeb66ae98693ead51e54ac4dd9e045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df866641a7b9eed8e50c7e62018d7cf9dbeb66ae98693ead51e54ac4dd9e045->enter($__internal_7df866641a7b9eed8e50c7e62018d7cf9dbeb66ae98693ead51e54ac4dd9e045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/episode/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a5df64940eb0d9f45564aefb85da6d2ae9d2d2a521ff073d4dd758134847e51->leave($__internal_9a5df64940eb0d9f45564aefb85da6d2ae9d2d2a521ff073d4dd758134847e51_prof);

        
        $__internal_7df866641a7b9eed8e50c7e62018d7cf9dbeb66ae98693ead51e54ac4dd9e045->leave($__internal_7df866641a7b9eed8e50c7e62018d7cf9dbeb66ae98693ead51e54ac4dd9e045_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16ff95fd29b2ff5d9afcedf2ebbc566f1b1eb1413ff0cbf91440c0fc99c1b3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ff95fd29b2ff5d9afcedf2ebbc566f1b1eb1413ff0cbf91440c0fc99c1b3e7->enter($__internal_16ff95fd29b2ff5d9afcedf2ebbc566f1b1eb1413ff0cbf91440c0fc99c1b3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f3dba4fe9beba2be7bcea903d4613d4aecc24716844fca64aa2422f89bfc0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3dba4fe9beba2be7bcea903d4613d4aecc24716844fca64aa2422f89bfc0b5->enter($__internal_5f3dba4fe9beba2be7bcea903d4613d4aecc24716844fca64aa2422f89bfc0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AEIndex", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "tvSeriesId", array()))), "html", null, true);
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
        
        $__internal_5f3dba4fe9beba2be7bcea903d4613d4aecc24716844fca64aa2422f89bfc0b5->leave($__internal_5f3dba4fe9beba2be7bcea903d4613d4aecc24716844fca64aa2422f89bfc0b5_prof);

        
        $__internal_16ff95fd29b2ff5d9afcedf2ebbc566f1b1eb1413ff0cbf91440c0fc99c1b3e7->leave($__internal_16ff95fd29b2ff5d9afcedf2ebbc566f1b1eb1413ff0cbf91440c0fc99c1b3e7_prof);

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
            <a href=\"{{ path('_AEIndex',{'id':tvSeries.tvSeriesId}) }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "backend/episode/edit.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/episode/edit.html.twig");
    }
}
