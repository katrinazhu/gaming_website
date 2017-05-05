<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5753cb81390dbf98df373f2c32240b3ab0fba3ea0921a661f7e5ce0fdfaa9650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5753cb81390dbf98df373f2c32240b3ab0fba3ea0921a661f7e5ce0fdfaa9650->enter($__internal_5753cb81390dbf98df373f2c32240b3ab0fba3ea0921a661f7e5ce0fdfaa9650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f378326ce2f287d093a4d4602715f9d589f5cfc505ebb504b4b11913846d0c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f378326ce2f287d093a4d4602715f9d589f5cfc505ebb504b4b11913846d0c71->enter($__internal_f378326ce2f287d093a4d4602715f9d589f5cfc505ebb504b4b11913846d0c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5753cb81390dbf98df373f2c32240b3ab0fba3ea0921a661f7e5ce0fdfaa9650->leave($__internal_5753cb81390dbf98df373f2c32240b3ab0fba3ea0921a661f7e5ce0fdfaa9650_prof);

        
        $__internal_f378326ce2f287d093a4d4602715f9d589f5cfc505ebb504b4b11913846d0c71->leave($__internal_f378326ce2f287d093a4d4602715f9d589f5cfc505ebb504b4b11913846d0c71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5023637c19135b9e7d16c2f73a421752b3fe6507f2363f7c89c7d3b569e2bdfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5023637c19135b9e7d16c2f73a421752b3fe6507f2363f7c89c7d3b569e2bdfa->enter($__internal_5023637c19135b9e7d16c2f73a421752b3fe6507f2363f7c89c7d3b569e2bdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c504952b08bccdb4e4be34062b6c042df524ee2c534d59a9d8e54d5da1f3f4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c504952b08bccdb4e4be34062b6c042df524ee2c534d59a9d8e54d5da1f3f4cb->enter($__internal_c504952b08bccdb4e4be34062b6c042df524ee2c534d59a9d8e54d5da1f3f4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c504952b08bccdb4e4be34062b6c042df524ee2c534d59a9d8e54d5da1f3f4cb->leave($__internal_c504952b08bccdb4e4be34062b6c042df524ee2c534d59a9d8e54d5da1f3f4cb_prof);

        
        $__internal_5023637c19135b9e7d16c2f73a421752b3fe6507f2363f7c89c7d3b569e2bdfa->leave($__internal_5023637c19135b9e7d16c2f73a421752b3fe6507f2363f7c89c7d3b569e2bdfa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c49f0c502f74f7a9cd0d3a865d95abf184785588499861a492ff40a9dd859544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49f0c502f74f7a9cd0d3a865d95abf184785588499861a492ff40a9dd859544->enter($__internal_c49f0c502f74f7a9cd0d3a865d95abf184785588499861a492ff40a9dd859544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cff8d6642f5abeb50d378464e1cecad09dd688d48d7f0c3eb5579538c72f2e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff8d6642f5abeb50d378464e1cecad09dd688d48d7f0c3eb5579538c72f2e97->enter($__internal_cff8d6642f5abeb50d378464e1cecad09dd688d48d7f0c3eb5579538c72f2e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cff8d6642f5abeb50d378464e1cecad09dd688d48d7f0c3eb5579538c72f2e97->leave($__internal_cff8d6642f5abeb50d378464e1cecad09dd688d48d7f0c3eb5579538c72f2e97_prof);

        
        $__internal_c49f0c502f74f7a9cd0d3a865d95abf184785588499861a492ff40a9dd859544->leave($__internal_c49f0c502f74f7a9cd0d3a865d95abf184785588499861a492ff40a9dd859544_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08064b8f5d5420cf4836ee98bb2431d6bae6a3e3612c77fa5959ceda6000da0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08064b8f5d5420cf4836ee98bb2431d6bae6a3e3612c77fa5959ceda6000da0d->enter($__internal_08064b8f5d5420cf4836ee98bb2431d6bae6a3e3612c77fa5959ceda6000da0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0004be828c4db4a069bd862b9794113f90abe0c982a2f32a653d3df01775a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0004be828c4db4a069bd862b9794113f90abe0c982a2f32a653d3df01775a63->enter($__internal_e0004be828c4db4a069bd862b9794113f90abe0c982a2f32a653d3df01775a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e0004be828c4db4a069bd862b9794113f90abe0c982a2f32a653d3df01775a63->leave($__internal_e0004be828c4db4a069bd862b9794113f90abe0c982a2f32a653d3df01775a63_prof);

        
        $__internal_08064b8f5d5420cf4836ee98bb2431d6bae6a3e3612c77fa5959ceda6000da0d->leave($__internal_08064b8f5d5420cf4836ee98bb2431d6bae6a3e3612c77fa5959ceda6000da0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/katzhu/test_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
