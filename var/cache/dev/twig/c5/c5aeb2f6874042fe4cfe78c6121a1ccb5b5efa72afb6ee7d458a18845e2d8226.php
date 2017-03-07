<?php

/* backend/tvseries/edit.html.twig */
class __TwigTemplate_ddc4b60bcb2c723e30776450b5c7345d451e2c3eab3baf87b735a8b995a37940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "backend/tvseries/edit.html.twig", 1);
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
        $__internal_bf3fb105f7a601d946b757623c2622e1ebc6d0ab68eb1cd708b70c4b47801617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3fb105f7a601d946b757623c2622e1ebc6d0ab68eb1cd708b70c4b47801617->enter($__internal_bf3fb105f7a601d946b757623c2622e1ebc6d0ab68eb1cd708b70c4b47801617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/edit.html.twig"));

        $__internal_789c15ef238ecdb6f61c2d591ff65e2bbde1f6a9da8a496d1ecd76875b7509e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789c15ef238ecdb6f61c2d591ff65e2bbde1f6a9da8a496d1ecd76875b7509e1->enter($__internal_789c15ef238ecdb6f61c2d591ff65e2bbde1f6a9da8a496d1ecd76875b7509e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf3fb105f7a601d946b757623c2622e1ebc6d0ab68eb1cd708b70c4b47801617->leave($__internal_bf3fb105f7a601d946b757623c2622e1ebc6d0ab68eb1cd708b70c4b47801617_prof);

        
        $__internal_789c15ef238ecdb6f61c2d591ff65e2bbde1f6a9da8a496d1ecd76875b7509e1->leave($__internal_789c15ef238ecdb6f61c2d591ff65e2bbde1f6a9da8a496d1ecd76875b7509e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45e1b241b028b8bea3ea898e0a7b2e3d66d83a444d20b1e22dcff168a29cb4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e1b241b028b8bea3ea898e0a7b2e3d66d83a444d20b1e22dcff168a29cb4f0->enter($__internal_45e1b241b028b8bea3ea898e0a7b2e3d66d83a444d20b1e22dcff168a29cb4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acadefed4da10e7f62535861528653471da7b3326126c78bbe51df8ab29147e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acadefed4da10e7f62535861528653471da7b3326126c78bbe51df8ab29147e2->enter($__internal_acadefed4da10e7f62535861528653471da7b3326126c78bbe51df8ab29147e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
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
        
        $__internal_acadefed4da10e7f62535861528653471da7b3326126c78bbe51df8ab29147e2->leave($__internal_acadefed4da10e7f62535861528653471da7b3326126c78bbe51df8ab29147e2_prof);

        
        $__internal_45e1b241b028b8bea3ea898e0a7b2e3d66d83a444d20b1e22dcff168a29cb4f0->leave($__internal_45e1b241b028b8bea3ea898e0a7b2e3d66d83a444d20b1e22dcff168a29cb4f0_prof);

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
        return new Twig_Source("{% extends 'backend.html.twig' %}

{% block body %}
    <h1>Tvseries edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('_adminIndex') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "backend/tvseries/edit.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/views/backend/tvseries/edit.html.twig");
    }
}
