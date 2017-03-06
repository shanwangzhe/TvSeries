<?php

/* admin/new.html.twig */
class __TwigTemplate_5e1d3c1b7806829ac1ad9f22458f9b366727843754321661b1a4f618fc6af01d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/new.html.twig", 1);
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
        $__internal_9a8ceee17cf7ec76b3da133a0a49018661f4e9f7906d8bf7d30a1256a6c51772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8ceee17cf7ec76b3da133a0a49018661f4e9f7906d8bf7d30a1256a6c51772->enter($__internal_9a8ceee17cf7ec76b3da133a0a49018661f4e9f7906d8bf7d30a1256a6c51772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new.html.twig"));

        $__internal_723456d599c0f237554ec8d5ee9eede6cde905a7d67f10654f9b3b37b1dfdbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723456d599c0f237554ec8d5ee9eede6cde905a7d67f10654f9b3b37b1dfdbcf->enter($__internal_723456d599c0f237554ec8d5ee9eede6cde905a7d67f10654f9b3b37b1dfdbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8ceee17cf7ec76b3da133a0a49018661f4e9f7906d8bf7d30a1256a6c51772->leave($__internal_9a8ceee17cf7ec76b3da133a0a49018661f4e9f7906d8bf7d30a1256a6c51772_prof);

        
        $__internal_723456d599c0f237554ec8d5ee9eede6cde905a7d67f10654f9b3b37b1dfdbcf->leave($__internal_723456d599c0f237554ec8d5ee9eede6cde905a7d67f10654f9b3b37b1dfdbcf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4777cb0c115a3c01d6e366d082421de5af41320734b7cb644c4c183b2e0ac5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4777cb0c115a3c01d6e366d082421de5af41320734b7cb644c4c183b2e0ac5a->enter($__internal_d4777cb0c115a3c01d6e366d082421de5af41320734b7cb644c4c183b2e0ac5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_928869023d7ab3c2bcc4405af6317f2c54fe975b77bda87412a821d3f8287650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928869023d7ab3c2bcc4405af6317f2c54fe975b77bda87412a821d3f8287650->enter($__internal_928869023d7ab3c2bcc4405af6317f2c54fe975b77bda87412a821d3f8287650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_928869023d7ab3c2bcc4405af6317f2c54fe975b77bda87412a821d3f8287650->leave($__internal_928869023d7ab3c2bcc4405af6317f2c54fe975b77bda87412a821d3f8287650_prof);

        
        $__internal_d4777cb0c115a3c01d6e366d082421de5af41320734b7cb644c4c183b2e0ac5a->leave($__internal_d4777cb0c115a3c01d6e366d082421de5af41320734b7cb644c4c183b2e0ac5a_prof);

    }

    public function getTemplateName()
    {
        return "admin/new.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
", "admin/new.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/admin/new.html.twig");
    }
}
