<?php

/* base.html.twig */
class __TwigTemplate_5243e67711bac2fc0c14b6ec06976c49537ac5c99c8f4cd130d64480f977da94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c2a07082a96c027a102032ad0a3f554c7750e8aa3879218e662b2f3c2050d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2a07082a96c027a102032ad0a3f554c7750e8aa3879218e662b2f3c2050d4f->enter($__internal_9c2a07082a96c027a102032ad0a3f554c7750e8aa3879218e662b2f3c2050d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cc828605d8f66e1e1fe7e5b6044e105fbef6f38b63bd9d2cf5403b1bdf5a395f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc828605d8f66e1e1fe7e5b6044e105fbef6f38b63bd9d2cf5403b1bdf5a395f->enter($__internal_cc828605d8f66e1e1fe7e5b6044e105fbef6f38b63bd9d2cf5403b1bdf5a395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9c2a07082a96c027a102032ad0a3f554c7750e8aa3879218e662b2f3c2050d4f->leave($__internal_9c2a07082a96c027a102032ad0a3f554c7750e8aa3879218e662b2f3c2050d4f_prof);

        
        $__internal_cc828605d8f66e1e1fe7e5b6044e105fbef6f38b63bd9d2cf5403b1bdf5a395f->leave($__internal_cc828605d8f66e1e1fe7e5b6044e105fbef6f38b63bd9d2cf5403b1bdf5a395f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_624a991b6c81a526232e5626fb35ec3b8200101bcc52e005b17347dd488f3312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624a991b6c81a526232e5626fb35ec3b8200101bcc52e005b17347dd488f3312->enter($__internal_624a991b6c81a526232e5626fb35ec3b8200101bcc52e005b17347dd488f3312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3716cb2b5e12ce6847703e12174b3cd0489fe6b1c3208d63f2f3afe9dd06b160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3716cb2b5e12ce6847703e12174b3cd0489fe6b1c3208d63f2f3afe9dd06b160->enter($__internal_3716cb2b5e12ce6847703e12174b3cd0489fe6b1c3208d63f2f3afe9dd06b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3716cb2b5e12ce6847703e12174b3cd0489fe6b1c3208d63f2f3afe9dd06b160->leave($__internal_3716cb2b5e12ce6847703e12174b3cd0489fe6b1c3208d63f2f3afe9dd06b160_prof);

        
        $__internal_624a991b6c81a526232e5626fb35ec3b8200101bcc52e005b17347dd488f3312->leave($__internal_624a991b6c81a526232e5626fb35ec3b8200101bcc52e005b17347dd488f3312_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b6ba3aada59f97004b812285ffd000cd90244ac1c7b0af2ab5f14a0172ca9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6ba3aada59f97004b812285ffd000cd90244ac1c7b0af2ab5f14a0172ca9cf->enter($__internal_0b6ba3aada59f97004b812285ffd000cd90244ac1c7b0af2ab5f14a0172ca9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6870b92e7bd549b24dc48f1794197b1e9688a8304b27ed6361bfe8f01338e89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6870b92e7bd549b24dc48f1794197b1e9688a8304b27ed6361bfe8f01338e89d->enter($__internal_6870b92e7bd549b24dc48f1794197b1e9688a8304b27ed6361bfe8f01338e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6870b92e7bd549b24dc48f1794197b1e9688a8304b27ed6361bfe8f01338e89d->leave($__internal_6870b92e7bd549b24dc48f1794197b1e9688a8304b27ed6361bfe8f01338e89d_prof);

        
        $__internal_0b6ba3aada59f97004b812285ffd000cd90244ac1c7b0af2ab5f14a0172ca9cf->leave($__internal_0b6ba3aada59f97004b812285ffd000cd90244ac1c7b0af2ab5f14a0172ca9cf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8628ece196477d2d477340dd782ec8d91c5fec63f0cbe132e8be53f1c49aecbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8628ece196477d2d477340dd782ec8d91c5fec63f0cbe132e8be53f1c49aecbe->enter($__internal_8628ece196477d2d477340dd782ec8d91c5fec63f0cbe132e8be53f1c49aecbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_845c3454e58ba8fee7316f107d36060b23bdf744f43d2893eb86947dd26b3d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845c3454e58ba8fee7316f107d36060b23bdf744f43d2893eb86947dd26b3d8d->enter($__internal_845c3454e58ba8fee7316f107d36060b23bdf744f43d2893eb86947dd26b3d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_845c3454e58ba8fee7316f107d36060b23bdf744f43d2893eb86947dd26b3d8d->leave($__internal_845c3454e58ba8fee7316f107d36060b23bdf744f43d2893eb86947dd26b3d8d_prof);

        
        $__internal_8628ece196477d2d477340dd782ec8d91c5fec63f0cbe132e8be53f1c49aecbe->leave($__internal_8628ece196477d2d477340dd782ec8d91c5fec63f0cbe132e8be53f1c49aecbe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aea7e97152b0505c04ad00362972dd7ae062566751d1ac8da9c574073597e784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea7e97152b0505c04ad00362972dd7ae062566751d1ac8da9c574073597e784->enter($__internal_aea7e97152b0505c04ad00362972dd7ae062566751d1ac8da9c574073597e784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a5364612b11580e43c27c707cdc4a8cbb0e7fdd9227ca96b1e7ddd10de55c6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5364612b11580e43c27c707cdc4a8cbb0e7fdd9227ca96b1e7ddd10de55c6b3->enter($__internal_a5364612b11580e43c27c707cdc4a8cbb0e7fdd9227ca96b1e7ddd10de55c6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a5364612b11580e43c27c707cdc4a8cbb0e7fdd9227ca96b1e7ddd10de55c6b3->leave($__internal_a5364612b11580e43c27c707cdc4a8cbb0e7fdd9227ca96b1e7ddd10de55c6b3_prof);

        
        $__internal_aea7e97152b0505c04ad00362972dd7ae062566751d1ac8da9c574073597e784->leave($__internal_aea7e97152b0505c04ad00362972dd7ae062566751d1ac8da9c574073597e784_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/katzhu/test_project/app/Resources/views/base.html.twig");
    }
}
