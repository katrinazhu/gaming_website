<?php

/* security/login.html.twig */
class __TwigTemplate_ad0b2ea34cfe4dfe446dc7597f97689c0f933c3a40f37b75cdbe314f9e5aab06 extends Twig_Template
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
        $__internal_aa8fa9b0ae0b8d4802fd4c58e5f416b830f30d2ac8372120d14fee19d3188930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8fa9b0ae0b8d4802fd4c58e5f416b830f30d2ac8372120d14fee19d3188930->enter($__internal_aa8fa9b0ae0b8d4802fd4c58e5f416b830f30d2ac8372120d14fee19d3188930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_75aebf684ca5ab31076f77c8b960168d11ab729b477345ad0d0569ce05ae5d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75aebf684ca5ab31076f77c8b960168d11ab729b477345ad0d0569ce05ae5d4f->enter($__internal_75aebf684ca5ab31076f77c8b960168d11ab729b477345ad0d0569ce05ae5d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
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

        .form-basic .form-row > label span{
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

        .form-row button{
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
        .form-row button:hover{
            background-color:  white;
            color: #6caee0;
        }
        .asText{
            background:none;
            border:none;
            margin:0;
            padding:0;
            cursor:pointer;
            color: #5F5F5F;
            font: bold 14px sans-serif;
            text-align: center;
        }
        .asText:hover{
            color: #6caee0;
        }
    </style>
</head>
<body>
    <div class=\"main-content\">
        ";
        // line 121
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 122
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 124
        echo "        <form class=\"form-basic\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
            <div class=\"form-title-row\">
                <h1>Log In</h1>
            </div>

            <div class=\"form-row\">
                <label for=\"username\">
                    <span>Username</span>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                </label>
            </div>

            <div class=\"form-row\">
                <label for=\"password\">
                    <span>Password</span>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </label>
            </div>

            ";
        // line 148
        echo "            <div class=\"form-row\">
                <button type=\"submit\">Log In</button>
            </div>
        </form>
        <form class=\"form-basic\" action=\" ";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo " \" method=\"post\">
                <button class=\"asText\" type=\"submit\">Don't have an account?</button>
        </form>
    </div>
</body>
</html>";
        
        $__internal_aa8fa9b0ae0b8d4802fd4c58e5f416b830f30d2ac8372120d14fee19d3188930->leave($__internal_aa8fa9b0ae0b8d4802fd4c58e5f416b830f30d2ac8372120d14fee19d3188930_prof);

        
        $__internal_75aebf684ca5ab31076f77c8b960168d11ab729b477345ad0d0569ce05ae5d4f->leave($__internal_75aebf684ca5ab31076f77c8b960168d11ab729b477345ad0d0569ce05ae5d4f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 152,  181 => 148,  167 => 132,  155 => 124,  149 => 122,  147 => 121,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
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

        .form-basic .form-row > label span{
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

        .form-row button{
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
        .form-row button:hover{
            background-color:  white;
            color: #6caee0;
        }
        .asText{
            background:none;
            border:none;
            margin:0;
            padding:0;
            cursor:pointer;
            color: #5F5F5F;
            font: bold 14px sans-serif;
            text-align: center;
        }
        .asText:hover{
            color: #6caee0;
        }
    </style>
</head>
<body>
    <div class=\"main-content\">
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <form class=\"form-basic\" action=\"{{ path('login') }}\" method=\"post\">
            <div class=\"form-title-row\">
                <h1>Log In</h1>
            </div>

            <div class=\"form-row\">
                <label for=\"username\">
                    <span>Username</span>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
                </label>
            </div>

            <div class=\"form-row\">
                <label for=\"password\">
                    <span>Password</span>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </label>
            </div>

            {#
                If you want to control the URL the user
                is redirected to on success (more details below)
                <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
            #}
            <div class=\"form-row\">
                <button type=\"submit\">Log In</button>
            </div>
        </form>
        <form class=\"form-basic\" action=\" {{path('register')}} \" method=\"post\">
                <button class=\"asText\" type=\"submit\">Don't have an account?</button>
        </form>
    </div>
</body>
</html>", "security/login.html.twig", "/Users/katzhu/gaming_website/app/Resources/views/security/login.html.twig");
    }
}
