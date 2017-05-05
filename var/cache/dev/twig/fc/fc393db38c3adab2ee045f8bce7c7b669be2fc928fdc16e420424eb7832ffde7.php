<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eebed8d324785e24378ebbf02ec64d6e26d3ed3fb9e3cef95046baac6693cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1080a600181d85ac4b1591fb6865e944de2fdbe306168389feedd52125ac5a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1080a600181d85ac4b1591fb6865e944de2fdbe306168389feedd52125ac5a1e->enter($__internal_1080a600181d85ac4b1591fb6865e944de2fdbe306168389feedd52125ac5a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9c9176ab5311dbb8da52052fed9f9b4e89ea394df67ab24cae94dc5cf832e3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9176ab5311dbb8da52052fed9f9b4e89ea394df67ab24cae94dc5cf832e3d5->enter($__internal_9c9176ab5311dbb8da52052fed9f9b4e89ea394df67ab24cae94dc5cf832e3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1080a600181d85ac4b1591fb6865e944de2fdbe306168389feedd52125ac5a1e->leave($__internal_1080a600181d85ac4b1591fb6865e944de2fdbe306168389feedd52125ac5a1e_prof);

        
        $__internal_9c9176ab5311dbb8da52052fed9f9b4e89ea394df67ab24cae94dc5cf832e3d5->leave($__internal_9c9176ab5311dbb8da52052fed9f9b4e89ea394df67ab24cae94dc5cf832e3d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_758c39929171cecd624ed9440de3b84b9a4836fdc4e92470b8c9c0d245a80df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758c39929171cecd624ed9440de3b84b9a4836fdc4e92470b8c9c0d245a80df2->enter($__internal_758c39929171cecd624ed9440de3b84b9a4836fdc4e92470b8c9c0d245a80df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c693daed46e10a4a70b1a891f3109e6af26a256b81e44be05ff66c9a8119faa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c693daed46e10a4a70b1a891f3109e6af26a256b81e44be05ff66c9a8119faa9->enter($__internal_c693daed46e10a4a70b1a891f3109e6af26a256b81e44be05ff66c9a8119faa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c693daed46e10a4a70b1a891f3109e6af26a256b81e44be05ff66c9a8119faa9->leave($__internal_c693daed46e10a4a70b1a891f3109e6af26a256b81e44be05ff66c9a8119faa9_prof);

        
        $__internal_758c39929171cecd624ed9440de3b84b9a4836fdc4e92470b8c9c0d245a80df2->leave($__internal_758c39929171cecd624ed9440de3b84b9a4836fdc4e92470b8c9c0d245a80df2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/katzhu/test_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
