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
        $__internal_78a8886b8cdcd40cd6fddfd35e40622e6e61d971c2fefdfa49de712b981bdf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a8886b8cdcd40cd6fddfd35e40622e6e61d971c2fefdfa49de712b981bdf19->enter($__internal_78a8886b8cdcd40cd6fddfd35e40622e6e61d971c2fefdfa49de712b981bdf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_fd466d9351b7183c737d64236cff36e0fd47b19c96597377432f948d11ca09d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd466d9351b7183c737d64236cff36e0fd47b19c96597377432f948d11ca09d4->enter($__internal_fd466d9351b7183c737d64236cff36e0fd47b19c96597377432f948d11ca09d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 3
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 5
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 17
        echo "
    <button type=\"submit\">login</button>
</form>
";
        
        $__internal_78a8886b8cdcd40cd6fddfd35e40622e6e61d971c2fefdfa49de712b981bdf19->leave($__internal_78a8886b8cdcd40cd6fddfd35e40622e6e61d971c2fefdfa49de712b981bdf19_prof);

        
        $__internal_fd466d9351b7183c737d64236cff36e0fd47b19c96597377432f948d11ca09d4->leave($__internal_fd466d9351b7183c737d64236cff36e0fd47b19c96597377432f948d11ca09d4_prof);

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
        return array (  50 => 17,  42 => 7,  36 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>
", "security/login.html.twig", "/Users/katzhu/test_project/app/Resources/views/security/login.html.twig");
    }
}
