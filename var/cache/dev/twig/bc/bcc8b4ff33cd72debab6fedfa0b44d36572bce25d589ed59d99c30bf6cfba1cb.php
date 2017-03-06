<?php

/* admin/show.html.twig */
class __TwigTemplate_ae6c4a715abc8dd418f62e36896b691b9984b8353a055a4e2a5b1b28f047ae97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/show.html.twig", 1);
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
        $__internal_e304d7c1bc6b901ed73626b1352a49f257190364a5127215e8596bdac3d2757f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e304d7c1bc6b901ed73626b1352a49f257190364a5127215e8596bdac3d2757f->enter($__internal_e304d7c1bc6b901ed73626b1352a49f257190364a5127215e8596bdac3d2757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        $__internal_d7f8b176bebd9d05ea189f76d84cedea7c4b0a23427577ffe68be6f2f799e07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f8b176bebd9d05ea189f76d84cedea7c4b0a23427577ffe68be6f2f799e07e->enter($__internal_d7f8b176bebd9d05ea189f76d84cedea7c4b0a23427577ffe68be6f2f799e07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e304d7c1bc6b901ed73626b1352a49f257190364a5127215e8596bdac3d2757f->leave($__internal_e304d7c1bc6b901ed73626b1352a49f257190364a5127215e8596bdac3d2757f_prof);

        
        $__internal_d7f8b176bebd9d05ea189f76d84cedea7c4b0a23427577ffe68be6f2f799e07e->leave($__internal_d7f8b176bebd9d05ea189f76d84cedea7c4b0a23427577ffe68be6f2f799e07e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78ff54bd3c10b2ee39ae572097f1ef6dbac89822203efbdc4db951200f5f43f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ff54bd3c10b2ee39ae572097f1ef6dbac89822203efbdc4db951200f5f43f6->enter($__internal_78ff54bd3c10b2ee39ae572097f1ef6dbac89822203efbdc4db951200f5f43f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0573c63feb3db4ad66385baa9e584f9ddd20c5f29aa8d2f5d1e2fc1ac0df587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0573c63feb3db4ad66385baa9e584f9ddd20c5f29aa8d2f5d1e2fc1ac0df587->enter($__internal_f0573c63feb3db4ad66385baa9e584f9ddd20c5f29aa8d2f5d1e2fc1ac0df587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tvseries</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "author", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Releasedat</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "releasedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_adminIndex");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute(($context["tvSeries"] ?? $this->getContext($context, "tvSeries")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f0573c63feb3db4ad66385baa9e584f9ddd20c5f29aa8d2f5d1e2fc1ac0df587->leave($__internal_f0573c63feb3db4ad66385baa9e584f9ddd20c5f29aa8d2f5d1e2fc1ac0df587_prof);

        
        $__internal_78ff54bd3c10b2ee39ae572097f1ef6dbac89822203efbdc4db951200f5f43f6->leave($__internal_78ff54bd3c10b2ee39ae572097f1ef6dbac89822203efbdc4db951200f5f43f6_prof);

    }

    public function getTemplateName()
    {
        return "admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 43,  110 => 40,  104 => 37,  94 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tvseries</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ tvSeries.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ tvSeries.name }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ tvSeries.author }}</td>
            </tr>
            <tr>
                <th>Releasedat</th>
                <td>{% if tvSeries.releasedAt %}{{ tvSeries.releasedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ tvSeries.description }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ tvSeries.image }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('_adminIndex') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_edit', { 'id': tvSeries.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "admin/show.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/admin/show.html.twig");
    }
}
