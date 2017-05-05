<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c786410722dd63162c3edf6f41273296bffb14a16f824fd7a0320cf1dc48520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c786410722dd63162c3edf6f41273296bffb14a16f824fd7a0320cf1dc48520->enter($__internal_9c786410722dd63162c3edf6f41273296bffb14a16f824fd7a0320cf1dc48520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7dc258ea60705111f15059e199f5545b6a70db93455607d2820fcd910d5ff4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc258ea60705111f15059e199f5545b6a70db93455607d2820fcd910d5ff4ae->enter($__internal_7dc258ea60705111f15059e199f5545b6a70db93455607d2820fcd910d5ff4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c786410722dd63162c3edf6f41273296bffb14a16f824fd7a0320cf1dc48520->leave($__internal_9c786410722dd63162c3edf6f41273296bffb14a16f824fd7a0320cf1dc48520_prof);

        
        $__internal_7dc258ea60705111f15059e199f5545b6a70db93455607d2820fcd910d5ff4ae->leave($__internal_7dc258ea60705111f15059e199f5545b6a70db93455607d2820fcd910d5ff4ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06be9c75c20d3e2e12a3521fa253cf6d3cc939a5c4a1a4b64495fa18d4715235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06be9c75c20d3e2e12a3521fa253cf6d3cc939a5c4a1a4b64495fa18d4715235->enter($__internal_06be9c75c20d3e2e12a3521fa253cf6d3cc939a5c4a1a4b64495fa18d4715235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8bc204f8a32039026bea83a4171b17075da6f3d91fbd87b023b4b64432c13c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc204f8a32039026bea83a4171b17075da6f3d91fbd87b023b4b64432c13c8f->enter($__internal_8bc204f8a32039026bea83a4171b17075da6f3d91fbd87b023b4b64432c13c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8bc204f8a32039026bea83a4171b17075da6f3d91fbd87b023b4b64432c13c8f->leave($__internal_8bc204f8a32039026bea83a4171b17075da6f3d91fbd87b023b4b64432c13c8f_prof);

        
        $__internal_06be9c75c20d3e2e12a3521fa253cf6d3cc939a5c4a1a4b64495fa18d4715235->leave($__internal_06be9c75c20d3e2e12a3521fa253cf6d3cc939a5c4a1a4b64495fa18d4715235_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72650318872ff53176718074c13f30bc1e4dc9ea8d91337a3b216cd177fda507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72650318872ff53176718074c13f30bc1e4dc9ea8d91337a3b216cd177fda507->enter($__internal_72650318872ff53176718074c13f30bc1e4dc9ea8d91337a3b216cd177fda507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bf9baa64d82e3752f46f6f902af61f0ce2e32c708938ea706f507990a865d87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9baa64d82e3752f46f6f902af61f0ce2e32c708938ea706f507990a865d87f->enter($__internal_bf9baa64d82e3752f46f6f902af61f0ce2e32c708938ea706f507990a865d87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf9baa64d82e3752f46f6f902af61f0ce2e32c708938ea706f507990a865d87f->leave($__internal_bf9baa64d82e3752f46f6f902af61f0ce2e32c708938ea706f507990a865d87f_prof);

        
        $__internal_72650318872ff53176718074c13f30bc1e4dc9ea8d91337a3b216cd177fda507->leave($__internal_72650318872ff53176718074c13f30bc1e4dc9ea8d91337a3b216cd177fda507_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93f459b84e1e6ccd6e2ff4301b91a1850dfc68b9bb8486fbcce8bc386b8f38b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f459b84e1e6ccd6e2ff4301b91a1850dfc68b9bb8486fbcce8bc386b8f38b7->enter($__internal_93f459b84e1e6ccd6e2ff4301b91a1850dfc68b9bb8486fbcce8bc386b8f38b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0fb4bde7a1d8f08af2f8b312103600d62baa92b1004de56dd63b88e99b77f257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb4bde7a1d8f08af2f8b312103600d62baa92b1004de56dd63b88e99b77f257->enter($__internal_0fb4bde7a1d8f08af2f8b312103600d62baa92b1004de56dd63b88e99b77f257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0fb4bde7a1d8f08af2f8b312103600d62baa92b1004de56dd63b88e99b77f257->leave($__internal_0fb4bde7a1d8f08af2f8b312103600d62baa92b1004de56dd63b88e99b77f257_prof);

        
        $__internal_93f459b84e1e6ccd6e2ff4301b91a1850dfc68b9bb8486fbcce8bc386b8f38b7->leave($__internal_93f459b84e1e6ccd6e2ff4301b91a1850dfc68b9bb8486fbcce8bc386b8f38b7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/katzhu/test_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
