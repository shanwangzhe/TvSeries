<?php

/* admin/tvseries/edit.html.twig */
class __TwigTemplate_a487200b495976aa98cb7030da563b3742a70944a4912485675021807b8c331b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/tvseries/edit.html.twig", 1);
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
        $__internal_164d723abed131e090a933fcffc95cd5458f0cea1bbc94c6f3bfedc6907f5d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164d723abed131e090a933fcffc95cd5458f0cea1bbc94c6f3bfedc6907f5d3a->enter($__internal_164d723abed131e090a933fcffc95cd5458f0cea1bbc94c6f3bfedc6907f5d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tvseries/edit.html.twig"));

        $__internal_da880a03e385c5476ca2bff1737817dc6d5ae6dab546e3986ff49de5eea6f1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da880a03e385c5476ca2bff1737817dc6d5ae6dab546e3986ff49de5eea6f1ac->enter($__internal_da880a03e385c5476ca2bff1737817dc6d5ae6dab546e3986ff49de5eea6f1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tvseries/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_164d723abed131e090a933fcffc95cd5458f0cea1bbc94c6f3bfedc6907f5d3a->leave($__internal_164d723abed131e090a933fcffc95cd5458f0cea1bbc94c6f3bfedc6907f5d3a_prof);

        
        $__internal_da880a03e385c5476ca2bff1737817dc6d5ae6dab546e3986ff49de5eea6f1ac->leave($__internal_da880a03e385c5476ca2bff1737817dc6d5ae6dab546e3986ff49de5eea6f1ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3c35a607cf6cf2e7127ab72b7e471967f7ce268ebb1a10d51771b39ad1db1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c35a607cf6cf2e7127ab72b7e471967f7ce268ebb1a10d51771b39ad1db1de->enter($__internal_c3c35a607cf6cf2e7127ab72b7e471967f7ce268ebb1a10d51771b39ad1db1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4462f3f77f6709f19f2e1e1ebb80ea144a80610396b6054b996bac57f4f46c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4462f3f77f6709f19f2e1e1ebb80ea144a80610396b6054b996bac57f4f46c04->enter($__internal_4462f3f77f6709f19f2e1e1ebb80ea144a80610396b6054b996bac57f4f46c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4462f3f77f6709f19f2e1e1ebb80ea144a80610396b6054b996bac57f4f46c04->leave($__internal_4462f3f77f6709f19f2e1e1ebb80ea144a80610396b6054b996bac57f4f46c04_prof);

        
        $__internal_c3c35a607cf6cf2e7127ab72b7e471967f7ce268ebb1a10d51771b39ad1db1de->leave($__internal_c3c35a607cf6cf2e7127ab72b7e471967f7ce268ebb1a10d51771b39ad1db1de_prof);

    }

    public function getTemplateName()
    {
        return "admin/tvseries/edit.html.twig";
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
", "admin/tvseries/edit.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/admin/tvseries/edit.html.twig");
    }
}
