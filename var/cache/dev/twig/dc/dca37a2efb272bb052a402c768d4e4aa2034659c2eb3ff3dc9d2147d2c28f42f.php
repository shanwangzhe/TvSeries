<?php

/* userEpisode/show.html.twig */
class __TwigTemplate_717d69358ab1ed0da910aea4c05b2a961f3ee516b6a0813b779597e9d4f3850f extends Twig_Template
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
        $__internal_4e17567290db1f4bcd5e7e00123e645663d6385a8713a9f19cc226433ef514fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e17567290db1f4bcd5e7e00123e645663d6385a8713a9f19cc226433ef514fa->enter($__internal_4e17567290db1f4bcd5e7e00123e645663d6385a8713a9f19cc226433ef514fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/show.html.twig"));

        $__internal_42c978834a6c8bff71fb1391bd4408e0fc178a65019535b5c9bd54124879e5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c978834a6c8bff71fb1391bd4408e0fc178a65019535b5c9bd54124879e5af->enter($__internal_42c978834a6c8bff71fb1391bd4408e0fc178a65019535b5c9bd54124879e5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userEpisode/show.html.twig"));

        // line 1
        echo "You are watching this episode!
<li>
    <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_userEpisodeIndex");
        echo "\">Back to the list</a>
</li>";
        
        $__internal_4e17567290db1f4bcd5e7e00123e645663d6385a8713a9f19cc226433ef514fa->leave($__internal_4e17567290db1f4bcd5e7e00123e645663d6385a8713a9f19cc226433ef514fa_prof);

        
        $__internal_42c978834a6c8bff71fb1391bd4408e0fc178a65019535b5c9bd54124879e5af->leave($__internal_42c978834a6c8bff71fb1391bd4408e0fc178a65019535b5c9bd54124879e5af_prof);

    }

    public function getTemplateName()
    {
        return "userEpisode/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("You are watching this episode!
<li>
    <a href=\"{{ path('_userEpisodeIndex') }}\">Back to the list</a>
</li>", "userEpisode/show.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/userEpisode/show.html.twig");
    }
}
