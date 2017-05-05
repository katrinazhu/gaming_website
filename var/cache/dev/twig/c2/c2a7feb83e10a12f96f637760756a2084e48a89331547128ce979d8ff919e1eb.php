<?php

/* registration/register.html.twig */
class __TwigTemplate_05398f0f3ccf2b52b855fd98d4ab1eb3efa6857a2e0630d4e2d767166a7e0a5d extends Twig_Template
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
        $__internal_ceeaa762445a30a40aa7d1e60bf70bde479a877159b6e60a0db678ac67e34c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceeaa762445a30a40aa7d1e60bf70bde479a877159b6e60a0db678ac67e34c08->enter($__internal_ceeaa762445a30a40aa7d1e60bf70bde479a877159b6e60a0db678ac67e34c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_2e083aa7169124dfe141a1918608ca7b5efa9b12b871aa3c5b4e352328cbcf79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e083aa7169124dfe141a1918608ca7b5efa9b12b871aa3c5b4e352328cbcf79->enter($__internal_2e083aa7169124dfe141a1918608ca7b5efa9b12b871aa3c5b4e352328cbcf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\">Register!</button>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_ceeaa762445a30a40aa7d1e60bf70bde479a877159b6e60a0db678ac67e34c08->leave($__internal_ceeaa762445a30a40aa7d1e60bf70bde479a877159b6e60a0db678ac67e34c08_prof);

        
        $__internal_2e083aa7169124dfe141a1918608ca7b5efa9b12b871aa3c5b4e352328cbcf79->leave($__internal_2e083aa7169124dfe141a1918608ca7b5efa9b12b871aa3c5b4e352328cbcf79_prof);

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
        return array (  50 => 10,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/registration/register.html.twig #}

{{ form_start(form) }}
    {{ form_row(form.username) }}
    {{ form_row(form.email) }}
    {{ form_row(form.plainPassword.first) }}
    {{ form_row(form.plainPassword.second) }}

    <button type=\"submit\">Register!</button>
{{ form_end(form) }}", "registration/register.html.twig", "/Users/katzhu/test_project/app/Resources/views/registration/register.html.twig");
    }
}
