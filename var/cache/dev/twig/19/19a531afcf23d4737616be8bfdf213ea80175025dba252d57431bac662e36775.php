<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a38873ee44f18913cb03b07e3d2f776da8568d991adc0a1a7fd706f67c172dc1 extends Twig_Template
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
        $__internal_d2b55c5e64b290ccf82fee7b386aa61cbb2614aacb837787c35a4c35622a3319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b55c5e64b290ccf82fee7b386aa61cbb2614aacb837787c35a4c35622a3319->enter($__internal_d2b55c5e64b290ccf82fee7b386aa61cbb2614aacb837787c35a4c35622a3319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_5060aacc84253a5c45622b2969cfd74839e28f2d5bcb1b838131b18bfd049875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5060aacc84253a5c45622b2969cfd74839e28f2d5bcb1b838131b18bfd049875->enter($__internal_5060aacc84253a5c45622b2969cfd74839e28f2d5bcb1b838131b18bfd049875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d2b55c5e64b290ccf82fee7b386aa61cbb2614aacb837787c35a4c35622a3319->leave($__internal_d2b55c5e64b290ccf82fee7b386aa61cbb2614aacb837787c35a4c35622a3319_prof);

        
        $__internal_5060aacc84253a5c45622b2969cfd74839e28f2d5bcb1b838131b18bfd049875->leave($__internal_5060aacc84253a5c45622b2969cfd74839e28f2d5bcb1b838131b18bfd049875_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/katzhu/test_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}