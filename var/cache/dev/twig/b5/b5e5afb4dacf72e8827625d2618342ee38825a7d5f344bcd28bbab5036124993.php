<?php

/* registration/register.html.twig */
class __TwigTemplate_0a508cacbf8cbc48f1c0705a3b8ff1fa06a4a566ade946b725c30f8e600a659a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67e7db7578e7daf5ce54a495bb2bd37e628ee0c30ce0069f4ec4ffbeecaf240d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e7db7578e7daf5ce54a495bb2bd37e628ee0c30ce0069f4ec4ffbeecaf240d->enter($__internal_67e7db7578e7daf5ce54a495bb2bd37e628ee0c30ce0069f4ec4ffbeecaf240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_c0d9524ff79498e2a6d56382eefd8c49edd74d73fa9a628b574fc7dae2415efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d9524ff79498e2a6d56382eefd8c49edd74d73fa9a628b574fc7dae2415efe->enter($__internal_c0d9524ff79498e2a6d56382eefd8c49edd74d73fa9a628b574fc7dae2415efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

<button type=\"submit\">Register!</button>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_67e7db7578e7daf5ce54a495bb2bd37e628ee0c30ce0069f4ec4ffbeecaf240d->leave($__internal_67e7db7578e7daf5ce54a495bb2bd37e628ee0c30ce0069f4ec4ffbeecaf240d_prof);

        
        $__internal_c0d9524ff79498e2a6d56382eefd8c49edd74d73fa9a628b574fc7dae2415efe->leave($__internal_c0d9524ff79498e2a6d56382eefd8c49edd74d73fa9a628b574fc7dae2415efe_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  37 => 4,  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}

<button type=\"submit\">Register!</button>
{{ form_end(form) }}", "registration/register.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/registration/register.html.twig");
    }
}
