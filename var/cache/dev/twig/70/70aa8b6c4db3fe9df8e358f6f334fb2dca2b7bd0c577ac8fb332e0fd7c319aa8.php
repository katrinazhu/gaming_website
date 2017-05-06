<?php

/* security/base.html.twig */
class __TwigTemplate_223a953599e4eb7fe66f1b451cb6568c0462dd291aa6135f8505f938780cebc9 extends Twig_Template
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
        $__internal_a74d5436a6a0623d885bed52988a07bb9de454ff0ab6b1203783944ed96d7e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74d5436a6a0623d885bed52988a07bb9de454ff0ab6b1203783944ed96d7e4d->enter($__internal_a74d5436a6a0623d885bed52988a07bb9de454ff0ab6b1203783944ed96d7e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/base.html.twig"));

        $__internal_dcc6968f6fbbbfa9d4666171123f06ea79b56f7055172d17dcfaffc152131310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc6968f6fbbbfa9d4666171123f06ea79b56f7055172d17dcfaffc152131310->enter($__internal_dcc6968f6fbbbfa9d4666171123f06ea79b56f7055172d17dcfaffc152131310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "

</html>";
        
        $__internal_a74d5436a6a0623d885bed52988a07bb9de454ff0ab6b1203783944ed96d7e4d->leave($__internal_a74d5436a6a0623d885bed52988a07bb9de454ff0ab6b1203783944ed96d7e4d_prof);

        
        $__internal_dcc6968f6fbbbfa9d4666171123f06ea79b56f7055172d17dcfaffc152131310->leave($__internal_dcc6968f6fbbbfa9d4666171123f06ea79b56f7055172d17dcfaffc152131310_prof);

    }

    public function getTemplateName()
    {
        return "security/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
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
{{name}}

</html>", "security/base.html.twig", "/Users/katzhu/gaming_website/app/Resources/views/security/base.html.twig");
    }
}
