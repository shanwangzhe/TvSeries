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
        $__internal_4b0fe354258cc09387dc0fa3c27d410d5f684946627e64de0dae7466140a6c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b0fe354258cc09387dc0fa3c27d410d5f684946627e64de0dae7466140a6c11->enter($__internal_4b0fe354258cc09387dc0fa3c27d410d5f684946627e64de0dae7466140a6c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8d4424684258f38aacfc2aed5890a84c79b7827cc2af0bf83742b30bab49c576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4424684258f38aacfc2aed5890a84c79b7827cc2af0bf83742b30bab49c576->enter($__internal_8d4424684258f38aacfc2aed5890a84c79b7827cc2af0bf83742b30bab49c576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b0fe354258cc09387dc0fa3c27d410d5f684946627e64de0dae7466140a6c11->leave($__internal_4b0fe354258cc09387dc0fa3c27d410d5f684946627e64de0dae7466140a6c11_prof);

        
        $__internal_8d4424684258f38aacfc2aed5890a84c79b7827cc2af0bf83742b30bab49c576->leave($__internal_8d4424684258f38aacfc2aed5890a84c79b7827cc2af0bf83742b30bab49c576_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07115fdfe65328276f5857f8ce0f5ae51b86348055190761f460a7b9b897cb29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07115fdfe65328276f5857f8ce0f5ae51b86348055190761f460a7b9b897cb29->enter($__internal_07115fdfe65328276f5857f8ce0f5ae51b86348055190761f460a7b9b897cb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e45a36170dfe3863f7b95af78d0b217151a51fd3bc16ad793ce250298a8d1056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45a36170dfe3863f7b95af78d0b217151a51fd3bc16ad793ce250298a8d1056->enter($__internal_e45a36170dfe3863f7b95af78d0b217151a51fd3bc16ad793ce250298a8d1056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e45a36170dfe3863f7b95af78d0b217151a51fd3bc16ad793ce250298a8d1056->leave($__internal_e45a36170dfe3863f7b95af78d0b217151a51fd3bc16ad793ce250298a8d1056_prof);

        
        $__internal_07115fdfe65328276f5857f8ce0f5ae51b86348055190761f460a7b9b897cb29->leave($__internal_07115fdfe65328276f5857f8ce0f5ae51b86348055190761f460a7b9b897cb29_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_653a64598deb08cc34813eb423c5fc22cfcf9f5680a01dd6aa62872e3c53be21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653a64598deb08cc34813eb423c5fc22cfcf9f5680a01dd6aa62872e3c53be21->enter($__internal_653a64598deb08cc34813eb423c5fc22cfcf9f5680a01dd6aa62872e3c53be21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45a85b3673357b2a5eedee85fe78d0252d4444c3687640e0b0e5d2f1c3564b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a85b3673357b2a5eedee85fe78d0252d4444c3687640e0b0e5d2f1c3564b94->enter($__internal_45a85b3673357b2a5eedee85fe78d0252d4444c3687640e0b0e5d2f1c3564b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_45a85b3673357b2a5eedee85fe78d0252d4444c3687640e0b0e5d2f1c3564b94->leave($__internal_45a85b3673357b2a5eedee85fe78d0252d4444c3687640e0b0e5d2f1c3564b94_prof);

        
        $__internal_653a64598deb08cc34813eb423c5fc22cfcf9f5680a01dd6aa62872e3c53be21->leave($__internal_653a64598deb08cc34813eb423c5fc22cfcf9f5680a01dd6aa62872e3c53be21_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_69952dc63c9ced5d212176e05ec8d1b1ece05c0f8b3dc9bb4396fd010d1a785c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69952dc63c9ced5d212176e05ec8d1b1ece05c0f8b3dc9bb4396fd010d1a785c->enter($__internal_69952dc63c9ced5d212176e05ec8d1b1ece05c0f8b3dc9bb4396fd010d1a785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e8c1e5a7c0e6e80ea2541132fc85b3aa0b369a88c967e771847fca5ee6485a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8c1e5a7c0e6e80ea2541132fc85b3aa0b369a88c967e771847fca5ee6485a5->enter($__internal_9e8c1e5a7c0e6e80ea2541132fc85b3aa0b369a88c967e771847fca5ee6485a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9e8c1e5a7c0e6e80ea2541132fc85b3aa0b369a88c967e771847fca5ee6485a5->leave($__internal_9e8c1e5a7c0e6e80ea2541132fc85b3aa0b369a88c967e771847fca5ee6485a5_prof);

        
        $__internal_69952dc63c9ced5d212176e05ec8d1b1ece05c0f8b3dc9bb4396fd010d1a785c->leave($__internal_69952dc63c9ced5d212176e05ec8d1b1ece05c0f8b3dc9bb4396fd010d1a785c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/pro/Desktop/M2/tvseries/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
