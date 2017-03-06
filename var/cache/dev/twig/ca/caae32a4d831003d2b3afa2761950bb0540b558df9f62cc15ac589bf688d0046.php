<?php

/* backend/tvseries/index.html.twig */
class __TwigTemplate_f4564bc3ec4c399ae0aa39a47d6792f43a19eade2d23bc75406dadc1afa87abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend/tvseries/index.html.twig", 1);
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
        $__internal_71164b0ee6ce79930de3a7c9032e8df0930a47bbc9050b0d7a7941df1cc47efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71164b0ee6ce79930de3a7c9032e8df0930a47bbc9050b0d7a7941df1cc47efa->enter($__internal_71164b0ee6ce79930de3a7c9032e8df0930a47bbc9050b0d7a7941df1cc47efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/index.html.twig"));

        $__internal_056dc1f0751739a5607e434f265985b1c6eccb145466b04a3139ac8d11790c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056dc1f0751739a5607e434f265985b1c6eccb145466b04a3139ac8d11790c6d->enter($__internal_056dc1f0751739a5607e434f265985b1c6eccb145466b04a3139ac8d11790c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/tvseries/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71164b0ee6ce79930de3a7c9032e8df0930a47bbc9050b0d7a7941df1cc47efa->leave($__internal_71164b0ee6ce79930de3a7c9032e8df0930a47bbc9050b0d7a7941df1cc47efa_prof);

        
        $__internal_056dc1f0751739a5607e434f265985b1c6eccb145466b04a3139ac8d11790c6d->leave($__internal_056dc1f0751739a5607e434f265985b1c6eccb145466b04a3139ac8d11790c6d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab2d01546fb7120e60544d5ed96c7f7eb18f4a3dcb8a96def874ee3797b6337a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2d01546fb7120e60544d5ed96c7f7eb18f4a3dcb8a96def874ee3797b6337a->enter($__internal_ab2d01546fb7120e60544d5ed96c7f7eb18f4a3dcb8a96def874ee3797b6337a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32c69ccad2adc4f689582abc1dd2835681a0b9fd137e6297fa850c3089c4b757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c69ccad2adc4f689582abc1dd2835681a0b9fd137e6297fa850c3089c4b757->enter($__internal_32c69ccad2adc4f689582abc1dd2835681a0b9fd137e6297fa850c3089c4b757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div>
        <h1>Tvseries list</h1>
    </div>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Author</th>
            <th>Releasedat</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["tvSeries"]);
        foreach ($context['_seq'] as $context["_key"] => $context["tvSeries"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_episodeIndex", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["tvSeries"], "releasedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tvSeries"], "releasedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tvSeries"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["tvSeries"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tvSeries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_new");
        echo "\">Create a new tvSeries</a>
        </li>
    </ul>
";
        
        $__internal_32c69ccad2adc4f689582abc1dd2835681a0b9fd137e6297fa850c3089c4b757->leave($__internal_32c69ccad2adc4f689582abc1dd2835681a0b9fd137e6297fa850c3089c4b757_prof);

        
        $__internal_ab2d01546fb7120e60544d5ed96c7f7eb18f4a3dcb8a96def874ee3797b6337a->leave($__internal_ab2d01546fb7120e60544d5ed96c7f7eb18f4a3dcb8a96def874ee3797b6337a_prof);

    }

    public function getTemplateName()
    {
        return "backend/tvseries/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  113 => 35,  101 => 29,  94 => 25,  90 => 24,  84 => 23,  80 => 22,  74 => 21,  71 => 20,  67 => 19,  49 => 3,  40 => 2,  11 => 1,);
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
    <div>
        <h1>Tvseries list</h1>
    </div>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Author</th>
            <th>Releasedat</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for tvSeries in tvSeries %}
            <tr>
                <td><a href=\"{{ path('_episodeIndex', { 'id': tvSeries.id }) }}\">{{ tvSeries.name }}</a></td>
                <td>{{ tvSeries.author }}</td>
                <td>{% if tvSeries.releasedAt %}{{ tvSeries.releasedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ tvSeries.description }}</td>
                <td>{{ tvSeries.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_show', { 'id': tvSeries.id }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('_new') }}\">Create a new tvSeries</a>
        </li>
    </ul>
{% endblock %}", "backend/tvseries/index.html.twig", "/Users/pro/Desktop/M2/tvseries/app/Resources/views/backend/tvseries/index.html.twig");
    }
}
