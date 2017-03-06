<?php

/* tvseries/edit.html.twig */
class __TwigTemplate_f025e357307fc39357e2744d4ede7c3da28b2102332d413f9dd3f05c4435efe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tvseries/edit.html.twig", 1);
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
        $__internal_0019ec4da3fd7364357cf716634a18aca52330d2a413b56a2be5e5376feedd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0019ec4da3fd7364357cf716634a18aca52330d2a413b56a2be5e5376feedd0c->enter($__internal_0019ec4da3fd7364357cf716634a18aca52330d2a413b56a2be5e5376feedd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tvseries/edit.html.twig"));

        $__internal_4a90f02ae51e90b4cb577522a0e81b8654018686c1232dee848f8c2eef5b9ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a90f02ae51e90b4cb577522a0e81b8654018686c1232dee848f8c2eef5b9ae4->enter($__internal_4a90f02ae51e90b4cb577522a0e81b8654018686c1232dee848f8c2eef5b9ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tvseries/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0019ec4da3fd7364357cf716634a18aca52330d2a413b56a2be5e5376feedd0c->leave($__internal_0019ec4da3fd7364357cf716634a18aca52330d2a413b56a2be5e5376feedd0c_prof);

        
        $__internal_4a90f02ae51e90b4cb577522a0e81b8654018686c1232dee848f8c2eef5b9ae4->leave($__internal_4a90f02ae51e90b4cb577522a0e81b8654018686c1232dee848f8c2eef5b9ae4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fb4469433b9b620a4fc3a62c632f7362e41c42eda4c9023974830f52d629161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb4469433b9b620a4fc3a62c632f7362e41c42eda4c9023974830f52d629161->enter($__internal_9fb4469433b9b620a4fc3a62c632f7362e41c42eda4c9023974830f52d629161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea849b2714e19fc29f1cb16c7ad852f8eb838389eba68f4bef1ecf38e56e12f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea849b2714e19fc29f1cb16c7ad852f8eb838389eba68f4bef1ecf38e56e12f0->enter($__internal_ea849b2714e19fc29f1cb16c7ad852f8eb838389eba68f4bef1ecf38e56e12f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea849b2714e19fc29f1cb16c7ad852f8eb838389eba68f4bef1ecf38e56e12f0->leave($__internal_ea849b2714e19fc29f1cb16c7ad852f8eb838389eba68f4bef1ecf38e56e12f0_prof);

        
        $__internal_9fb4469433b9b620a4fc3a62c632f7362e41c42eda4c9023974830f52d629161->leave($__internal_9fb4469433b9b620a4fc3a62c632f7362e41c42eda4c9023974830f52d629161_prof);

    }

    public function getTemplateName()
    {
        return "tvseries/edit.html.twig";
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
", "tvseries/edit.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/tvseries/edit.html.twig");
    }
}
