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
        $__internal_504129cd222a14b54da2412580dc8139bb73e3c365c52b76db26fd166ae7d37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504129cd222a14b54da2412580dc8139bb73e3c365c52b76db26fd166ae7d37a->enter($__internal_504129cd222a14b54da2412580dc8139bb73e3c365c52b76db26fd166ae7d37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_8e742a2f1c40746c14236009a61fa9994176b882b385d77fda8d24bf2c76ec81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e742a2f1c40746c14236009a61fa9994176b882b385d77fda8d24bf2c76ec81->enter($__internal_8e742a2f1c40746c14236009a61fa9994176b882b385d77fda8d24bf2c76ec81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
    <style type=\"text/css\">
                html{
            background-color: #f3f3f3;
        }

        .form-basic{
            max-width: 640px;
            margin: 0 auto;
            padding: 55px;
            box-sizing: border-box;

            background-color:  #ffffff;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);

            font: bold 14px sans-serif;
            text-align: center;
        }

        .form-basic .form-row{
            text-align: left;
            margin-bottom: 22px;
        }

        .form-basic .form-title-row{
            text-align: center;
            margin-bottom: 55px;
        }

        /* The form title */

        .form-basic h1{
            display: inline-block;
            box-sizing: border-box;
            color:  #4c565e;
            font-size: 24px;
            padding: 0 10px 15px;
            border-bottom: 2px solid #6caee0;
            margin: 0;
        }

        .form-basic .form-row label {
            display: inline-block;
            box-sizing: border-box;
            color: #5F5F5F;
            width: 180px;
            text-align: right;
            vertical-align: top;
            padding: 12px 25px;
        }

        .form-basic input{
            color:  #5f5f5f;
            box-sizing: border-box;
            width: 240px;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
            padding: 12px;
            border: 1px solid #dbdbdb;
        }

        .form-basic select{
            background-color: #ffffff;
            color:  #5f5f5f;
            box-sizing: border-box;
            max-width: 240px;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
            padding: 12px 8px;
            border: 1px solid #dbdbdb;
        }

        .form-basic textarea{
            color:  #5f5f5f;
            box-sizing: border-box;
            width: 240px;
            height: 80px;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
            font: normal 13px sans-serif;
            padding: 12px;
            border: 1px solid #dbdbdb;
            resize: vertical;
        }

        .register{
            display: block;
            border-radius: 2px;
            background-color:  #6caee0;
            color: #ffffff;
            font-weight: bold;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
            padding: 14px 22px;
            border: 0;
            margin: 40px 183px 0;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor:pointer;
        }
        .register:hover{
            background-color:  white;
            color: #6caee0;
        }
    </style>
</head>
<body>
\t<div class=\"form-basic\">
\t<div class=\"form-title-row\">
        <h1>Register</h1>
     </div>
\t";
        // line 112
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form-row\">
\t    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-row\">
\t    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-row\">
\t    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-row\">
\t    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
\t</div>
\t    <button class=\"register\" type=\"submit\">Register</button>
\t";
        // line 126
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</body>
</html>";
        
        $__internal_504129cd222a14b54da2412580dc8139bb73e3c365c52b76db26fd166ae7d37a->leave($__internal_504129cd222a14b54da2412580dc8139bb73e3c365c52b76db26fd166ae7d37a_prof);

        
        $__internal_8e742a2f1c40746c14236009a61fa9994176b882b385d77fda8d24bf2c76ec81->leave($__internal_8e742a2f1c40746c14236009a61fa9994176b882b385d77fda8d24bf2c76ec81_prof);

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
        return array (  166 => 126,  160 => 123,  154 => 120,  148 => 117,  142 => 114,  137 => 112,  25 => 2,);
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
<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
    <style type=\"text/css\">
                html{
            background-color: #f3f3f3;
        }

        .form-basic{
            max-width: 640px;
            margin: 0 auto;
            padding: 55px;
            box-sizing: border-box;

            background-color:  #ffffff;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);

            font: bold 14px sans-serif;
            text-align: center;
        }

        .form-basic .form-row{
            text-align: left;
            margin-bottom: 22px;
        }

        .form-basic .form-title-row{
            text-align: center;
            margin-bottom: 55px;
        }

        /* The form title */

        .form-basic h1{
            display: inline-block;
            box-sizing: border-box;
            color:  #4c565e;
            font-size: 24px;
            padding: 0 10px 15px;
            border-bottom: 2px solid #6caee0;
            margin: 0;
        }

        .form-basic .form-row label {
            display: inline-block;
            box-sizing: border-box;
            color: #5F5F5F;
            width: 180px;
            text-align: right;
            vertical-align: top;
            padding: 12px 25px;
        }

        .form-basic input{
            color:  #5f5f5f;
            box-sizing: border-box;
            width: 240px;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
            padding: 12px;
            border: 1px solid #dbdbdb;
        }

        .form-basic select{
            background-color: #ffffff;
            color:  #5f5f5f;
            box-sizing: border-box;
            max-width: 240px;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
            padding: 12px 8px;
            border: 1px solid #dbdbdb;
        }

        .form-basic textarea{
            color:  #5f5f5f;
            box-sizing: border-box;
            width: 240px;
            height: 80px;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
            font: normal 13px sans-serif;
            padding: 12px;
            border: 1px solid #dbdbdb;
            resize: vertical;
        }

        .register{
            display: block;
            border-radius: 2px;
            background-color:  #6caee0;
            color: #ffffff;
            font-weight: bold;
            box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
            padding: 14px 22px;
            border: 0;
            margin: 40px 183px 0;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor:pointer;
        }
        .register:hover{
            background-color:  white;
            color: #6caee0;
        }
    </style>
</head>
<body>
\t<div class=\"form-basic\">
\t<div class=\"form-title-row\">
        <h1>Register</h1>
     </div>
\t{{ form_start(form) }}
\t<div class=\"form-row\">
\t    {{ form_row(form.username) }}
\t</div>
\t<div class=\"form-row\">
\t    {{ form_row(form.email) }}
\t</div>
\t<div class=\"form-row\">
\t    {{ form_row(form.plainPassword.first) }}
\t</div>
\t<div class=\"form-row\">
\t    {{ form_row(form.plainPassword.second) }}
\t</div>
\t    <button class=\"register\" type=\"submit\">Register</button>
\t{{ form_end(form) }}
\t</div>
</body>
</html>", "registration/register.html.twig", "/Users/katzhu/gaming_website/app/Resources/views/registration/register.html.twig");
    }
}
