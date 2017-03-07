<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dcf7bc467160954b2db42523cdb0d3e1c2638e39c46f5ff8ffef5f7f85329cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcf7bc467160954b2db42523cdb0d3e1c2638e39c46f5ff8ffef5f7f85329cb->enter($__internal_4dcf7bc467160954b2db42523cdb0d3e1c2638e39c46f5ff8ffef5f7f85329cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2e4a651dc7801547bab2fb31122bb44f1d4ac8ef015e5bfef96bb00ece69afb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4a651dc7801547bab2fb31122bb44f1d4ac8ef015e5bfef96bb00ece69afb7->enter($__internal_2e4a651dc7801547bab2fb31122bb44f1d4ac8ef015e5bfef96bb00ece69afb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dcf7bc467160954b2db42523cdb0d3e1c2638e39c46f5ff8ffef5f7f85329cb->leave($__internal_4dcf7bc467160954b2db42523cdb0d3e1c2638e39c46f5ff8ffef5f7f85329cb_prof);

        
        $__internal_2e4a651dc7801547bab2fb31122bb44f1d4ac8ef015e5bfef96bb00ece69afb7->leave($__internal_2e4a651dc7801547bab2fb31122bb44f1d4ac8ef015e5bfef96bb00ece69afb7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7e2a0fd0deabbf63730238c179414653236ad84307a6c55ed2f2a8b28bb55ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e2a0fd0deabbf63730238c179414653236ad84307a6c55ed2f2a8b28bb55ce->enter($__internal_e7e2a0fd0deabbf63730238c179414653236ad84307a6c55ed2f2a8b28bb55ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2defb55c1814f2985a46e58d18d715110d3e53230eb8bd93aa28ed8fbcc918c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2defb55c1814f2985a46e58d18d715110d3e53230eb8bd93aa28ed8fbcc918c->enter($__internal_b2defb55c1814f2985a46e58d18d715110d3e53230eb8bd93aa28ed8fbcc918c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b2defb55c1814f2985a46e58d18d715110d3e53230eb8bd93aa28ed8fbcc918c->leave($__internal_b2defb55c1814f2985a46e58d18d715110d3e53230eb8bd93aa28ed8fbcc918c_prof);

        
        $__internal_e7e2a0fd0deabbf63730238c179414653236ad84307a6c55ed2f2a8b28bb55ce->leave($__internal_e7e2a0fd0deabbf63730238c179414653236ad84307a6c55ed2f2a8b28bb55ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f83cc867bbeea2f047c07583a858be96978c1919a7c24cd958e136052d70bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f83cc867bbeea2f047c07583a858be96978c1919a7c24cd958e136052d70bd6->enter($__internal_4f83cc867bbeea2f047c07583a858be96978c1919a7c24cd958e136052d70bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecfc2b3d3254b79d683646c8c8bb32e4dc02ff6bdfae6daf46a431ef2fd38ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfc2b3d3254b79d683646c8c8bb32e4dc02ff6bdfae6daf46a431ef2fd38ffc->enter($__internal_ecfc2b3d3254b79d683646c8c8bb32e4dc02ff6bdfae6daf46a431ef2fd38ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ecfc2b3d3254b79d683646c8c8bb32e4dc02ff6bdfae6daf46a431ef2fd38ffc->leave($__internal_ecfc2b3d3254b79d683646c8c8bb32e4dc02ff6bdfae6daf46a431ef2fd38ffc_prof);

        
        $__internal_4f83cc867bbeea2f047c07583a858be96978c1919a7c24cd958e136052d70bd6->leave($__internal_4f83cc867bbeea2f047c07583a858be96978c1919a7c24cd958e136052d70bd6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2099d87705e5300395fb868cdbcdd1f8198192b7ae3c862a8e303a02df36a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2099d87705e5300395fb868cdbcdd1f8198192b7ae3c862a8e303a02df36a56->enter($__internal_a2099d87705e5300395fb868cdbcdd1f8198192b7ae3c862a8e303a02df36a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00d25eaaf73baaebf8dde2b2f79f03afe8da9d1f6302ae99239d6c5249d25eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d25eaaf73baaebf8dde2b2f79f03afe8da9d1f6302ae99239d6c5249d25eec->enter($__internal_00d25eaaf73baaebf8dde2b2f79f03afe8da9d1f6302ae99239d6c5249d25eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_00d25eaaf73baaebf8dde2b2f79f03afe8da9d1f6302ae99239d6c5249d25eec->leave($__internal_00d25eaaf73baaebf8dde2b2f79f03afe8da9d1f6302ae99239d6c5249d25eec_prof);

        
        $__internal_a2099d87705e5300395fb868cdbcdd1f8198192b7ae3c862a8e303a02df36a56->leave($__internal_a2099d87705e5300395fb868cdbcdd1f8198192b7ae3c862a8e303a02df36a56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/pro/Desktop/test/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
