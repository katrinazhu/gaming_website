<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
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
        $__internal_9857a974af1240ee8f2ba2c5aa8b57b290d5d6dd290efe3f38cad041115e3f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9857a974af1240ee8f2ba2c5aa8b57b290d5d6dd290efe3f38cad041115e3f3a->enter($__internal_9857a974af1240ee8f2ba2c5aa8b57b290d5d6dd290efe3f38cad041115e3f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_22f0a7d1f1fcf9e6139458f7a74cca1d10e4dddc58db9aeb20a9508a54131d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f0a7d1f1fcf9e6139458f7a74cca1d10e4dddc58db9aeb20a9508a54131d8f->enter($__internal_22f0a7d1f1fcf9e6139458f7a74cca1d10e4dddc58db9aeb20a9508a54131d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9857a974af1240ee8f2ba2c5aa8b57b290d5d6dd290efe3f38cad041115e3f3a->leave($__internal_9857a974af1240ee8f2ba2c5aa8b57b290d5d6dd290efe3f38cad041115e3f3a_prof);

        
        $__internal_22f0a7d1f1fcf9e6139458f7a74cca1d10e4dddc58db9aeb20a9508a54131d8f->leave($__internal_22f0a7d1f1fcf9e6139458f7a74cca1d10e4dddc58db9aeb20a9508a54131d8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25aa19104d6a8f60a0dedb8a310ef57aeabbf3b34c899d8c859490abb9f6f991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25aa19104d6a8f60a0dedb8a310ef57aeabbf3b34c899d8c859490abb9f6f991->enter($__internal_25aa19104d6a8f60a0dedb8a310ef57aeabbf3b34c899d8c859490abb9f6f991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d86c3a1ebb9ef5c8818bbd044f7a5df23fe425a80027bb27736b715f693cfe80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86c3a1ebb9ef5c8818bbd044f7a5df23fe425a80027bb27736b715f693cfe80->enter($__internal_d86c3a1ebb9ef5c8818bbd044f7a5df23fe425a80027bb27736b715f693cfe80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d86c3a1ebb9ef5c8818bbd044f7a5df23fe425a80027bb27736b715f693cfe80->leave($__internal_d86c3a1ebb9ef5c8818bbd044f7a5df23fe425a80027bb27736b715f693cfe80_prof);

        
        $__internal_25aa19104d6a8f60a0dedb8a310ef57aeabbf3b34c899d8c859490abb9f6f991->leave($__internal_25aa19104d6a8f60a0dedb8a310ef57aeabbf3b34c899d8c859490abb9f6f991_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0c075dc96e41300acb90713b4156791d3bb4404b7a5bd6a93f153ab0adb933b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c075dc96e41300acb90713b4156791d3bb4404b7a5bd6a93f153ab0adb933b->enter($__internal_d0c075dc96e41300acb90713b4156791d3bb4404b7a5bd6a93f153ab0adb933b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_608350b7ae06da75a238eec57a1633d0f8733af5fa4d5e1baa5abfa88d9ba2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608350b7ae06da75a238eec57a1633d0f8733af5fa4d5e1baa5abfa88d9ba2c5->enter($__internal_608350b7ae06da75a238eec57a1633d0f8733af5fa4d5e1baa5abfa88d9ba2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_608350b7ae06da75a238eec57a1633d0f8733af5fa4d5e1baa5abfa88d9ba2c5->leave($__internal_608350b7ae06da75a238eec57a1633d0f8733af5fa4d5e1baa5abfa88d9ba2c5_prof);

        
        $__internal_d0c075dc96e41300acb90713b4156791d3bb4404b7a5bd6a93f153ab0adb933b->leave($__internal_d0c075dc96e41300acb90713b4156791d3bb4404b7a5bd6a93f153ab0adb933b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_12146298432079573949f5fe17a1d9c933f9efb0b72a49bf0e377f6ede926a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12146298432079573949f5fe17a1d9c933f9efb0b72a49bf0e377f6ede926a1d->enter($__internal_12146298432079573949f5fe17a1d9c933f9efb0b72a49bf0e377f6ede926a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ceea9e056e3015b681c1005cc7e99db1f71ca7e63d28733e84803c47bb2f37f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceea9e056e3015b681c1005cc7e99db1f71ca7e63d28733e84803c47bb2f37f0->enter($__internal_ceea9e056e3015b681c1005cc7e99db1f71ca7e63d28733e84803c47bb2f37f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ceea9e056e3015b681c1005cc7e99db1f71ca7e63d28733e84803c47bb2f37f0->leave($__internal_ceea9e056e3015b681c1005cc7e99db1f71ca7e63d28733e84803c47bb2f37f0_prof);

        
        $__internal_12146298432079573949f5fe17a1d9c933f9efb0b72a49bf0e377f6ede926a1d->leave($__internal_12146298432079573949f5fe17a1d9c933f9efb0b72a49bf0e377f6ede926a1d_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/katzhu/test_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
