<?php

/* admin/edit.html.twig */
class __TwigTemplate_a237b65fd544892bae7d60e5de911b2daeb9342ee3716ee028173d845bedd3fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/edit.html.twig", 1);
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
        $__internal_a2a1ed8e2c6b68a15c6ebb7b05cdace837f6801965f8eeb44c9ff13c9059d324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a1ed8e2c6b68a15c6ebb7b05cdace837f6801965f8eeb44c9ff13c9059d324->enter($__internal_a2a1ed8e2c6b68a15c6ebb7b05cdace837f6801965f8eeb44c9ff13c9059d324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $__internal_7939457cfd45b2641a9a25b54f438b69ad769dff555d933ce3ab846e5c3e6903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7939457cfd45b2641a9a25b54f438b69ad769dff555d933ce3ab846e5c3e6903->enter($__internal_7939457cfd45b2641a9a25b54f438b69ad769dff555d933ce3ab846e5c3e6903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a1ed8e2c6b68a15c6ebb7b05cdace837f6801965f8eeb44c9ff13c9059d324->leave($__internal_a2a1ed8e2c6b68a15c6ebb7b05cdace837f6801965f8eeb44c9ff13c9059d324_prof);

        
        $__internal_7939457cfd45b2641a9a25b54f438b69ad769dff555d933ce3ab846e5c3e6903->leave($__internal_7939457cfd45b2641a9a25b54f438b69ad769dff555d933ce3ab846e5c3e6903_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f303a52486e7c4bdd6ae473357f81ca2c603a4066ce9376400aa2a6542fa2e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f303a52486e7c4bdd6ae473357f81ca2c603a4066ce9376400aa2a6542fa2e2e->enter($__internal_f303a52486e7c4bdd6ae473357f81ca2c603a4066ce9376400aa2a6542fa2e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e7d40cb2988665e60125a02ed66485562314ee297ad5e318c74e76afeec6bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7d40cb2988665e60125a02ed66485562314ee297ad5e318c74e76afeec6bf1->enter($__internal_3e7d40cb2988665e60125a02ed66485562314ee297ad5e318c74e76afeec6bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e7d40cb2988665e60125a02ed66485562314ee297ad5e318c74e76afeec6bf1->leave($__internal_3e7d40cb2988665e60125a02ed66485562314ee297ad5e318c74e76afeec6bf1_prof);

        
        $__internal_f303a52486e7c4bdd6ae473357f81ca2c603a4066ce9376400aa2a6542fa2e2e->leave($__internal_f303a52486e7c4bdd6ae473357f81ca2c603a4066ce9376400aa2a6542fa2e2e_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit.html.twig";
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
", "admin/edit.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/admin/edit.html.twig");
    }
}
