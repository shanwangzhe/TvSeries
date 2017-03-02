<?php

/* security/login.html.twig */
class __TwigTemplate_29e47417cba2abbac7daa815e4ef419427f75b7faed93e2410db4f6b3c655cad extends Twig_Template
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
        $__internal_f92dffac266c82ce02aca58581caa63b304388fc559ac03fc129ed289e564ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92dffac266c82ce02aca58581caa63b304388fc559ac03fc129ed289e564ab1->enter($__internal_f92dffac266c82ce02aca58581caa63b304388fc559ac03fc129ed289e564ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_23b3f85a705c1a0eba30379d3a4a3c8b53bd7e0f5f0029c5ef49148a3ba4da93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b3f85a705c1a0eba30379d3a4a3c8b53bd7e0f5f0029c5ef49148a3ba4da93->enter($__internal_23b3f85a705c1a0eba30379d3a4a3c8b53bd7e0f5f0029c5ef49148a3ba4da93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 17
        echo "
    <button type=\"submit\">login</button>
</form>";
        
        $__internal_f92dffac266c82ce02aca58581caa63b304388fc559ac03fc129ed289e564ab1->leave($__internal_f92dffac266c82ce02aca58581caa63b304388fc559ac03fc129ed289e564ab1_prof);

        
        $__internal_23b3f85a705c1a0eba30379d3a4a3c8b53bd7e0f5f0029c5ef49148a3ba4da93->leave($__internal_23b3f85a705c1a0eba30379d3a4a3c8b53bd7e0f5f0029c5ef49148a3ba4da93_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  41 => 7,  36 => 5,  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>", "security/login.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/security/login.html.twig");
    }
}
