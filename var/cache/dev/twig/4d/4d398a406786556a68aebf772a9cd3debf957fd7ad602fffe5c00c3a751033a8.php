<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_23c572a2e707ab1b6a918259947e4541860b81903a0e6d1ce619beb7fd2303b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5116b5d4d2129160fb30d5e39e88fc92bfd584c4631659148733c265db7b5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5116b5d4d2129160fb30d5e39e88fc92bfd584c4631659148733c265db7b5ec->enter($__internal_b5116b5d4d2129160fb30d5e39e88fc92bfd584c4631659148733c265db7b5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_51f96cb0685e93b64b14f65b104be1ff5700577a9771c83ded44acc3f2ccb142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f96cb0685e93b64b14f65b104be1ff5700577a9771c83ded44acc3f2ccb142->enter($__internal_51f96cb0685e93b64b14f65b104be1ff5700577a9771c83ded44acc3f2ccb142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5116b5d4d2129160fb30d5e39e88fc92bfd584c4631659148733c265db7b5ec->leave($__internal_b5116b5d4d2129160fb30d5e39e88fc92bfd584c4631659148733c265db7b5ec_prof);

        
        $__internal_51f96cb0685e93b64b14f65b104be1ff5700577a9771c83ded44acc3f2ccb142->leave($__internal_51f96cb0685e93b64b14f65b104be1ff5700577a9771c83ded44acc3f2ccb142_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20990fbdcda1b50396820eff3f621475ca504a94e851e4080c78de51a6fa09c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20990fbdcda1b50396820eff3f621475ca504a94e851e4080c78de51a6fa09c0->enter($__internal_20990fbdcda1b50396820eff3f621475ca504a94e851e4080c78de51a6fa09c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7fa3e921cf2b045ae1eca07e5b703bfa3010a57b6e53b21d1ee9ac00977f0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fa3e921cf2b045ae1eca07e5b703bfa3010a57b6e53b21d1ee9ac00977f0f7->enter($__internal_c7fa3e921cf2b045ae1eca07e5b703bfa3010a57b6e53b21d1ee9ac00977f0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">register</a>
    ";
        // line 4
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c7fa3e921cf2b045ae1eca07e5b703bfa3010a57b6e53b21d1ee9ac00977f0f7->leave($__internal_c7fa3e921cf2b045ae1eca07e5b703bfa3010a57b6e53b21d1ee9ac00977f0f7_prof);

        
        $__internal_20990fbdcda1b50396820eff3f621475ca504a94e851e4080c78de51a6fa09c0->leave($__internal_20990fbdcda1b50396820eff3f621475ca504a94e851e4080c78de51a6fa09c0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}
{% block fos_user_content %}
    <a href=\"{{ path('fos_user_registration_register') }}\">register</a>
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "/Users/pro/Desktop/test/tvseries/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
