<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* test1.results.html.twig */
class __TwigTemplate_67bb2dd142a3cdc6a48ecfd0718902594a83262bf0255f30b2ceb30ca5db8b0d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test1.results.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test1.results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
        <ul>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "surname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "idNumber", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "dob", []), "html", null, true);
            echo "</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t</ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "<script>
var form = document.getElementById('test1Form');

// Append the form status
var formStatus = document.createElement('div');
formStatus.setAttribute('class', 'form-status alert');
form.appendChild(formStatus);

form.onsubmit = function (e) {
\t// Stop the regular form submission
\te.preventDefault();

\tvar data = {};
\tfor (var i = 0, ii = form.length; i < ii; ++i) {
\t\tvar input = form[i];
\t\tif (input.name) {
\t\t\tdata[input.name] = input.value;
\t\t}
\t}

\t// Construct an HTTP request
\tvar xhr = new XMLHttpRequest();
\txhr.open(form.method, form.action, true);
\txhr.setRequestHeader('Accept', 'application/json; charset=utf-8');
\txhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');

\t// Send the collected data as JSON
\txhr.send(JSON.stringify(data));

\t// Callback function
\txhr.onloadend = function (response) {
\t\tif (response.target.status === 0) {

\t\t\t// Failed XmlHttpRequest should be considered an undefined error.
\t\t\tformStatus.className += ' alert-danger';
\t\t\tformStatus.innerHTML = form.dataset.formError.message;

\t\t} else if (response.target.status === 400) {

\t\t\t// Bad Request
\t\t\tformStatus.className += ' alert-danger';
            console.log(response.target.response);
\t\t\tformStatus.innerHTML = JSON.parse(response.target.response).message;

\t\t} else if (response.target.status === 200) {

\t\t\t// Success
\t\t\tformStatus.className += ' alert-success';
\t\t\tformStatus.innerHTML = form.dataset.formSuccess;

\t\t}
\t};
};
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test1.results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  89 => 12,  80 => 9,  65 => 7,  61 => 6,  57 => 4,  51 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"container\">
        <ul>
\t\t{% for person in people %}
\t\t\t<li>{{ person.name }} {{ person.surname }} {{ person.idNumber }} {{ person.dob }}</li>
\t\t\t{% endfor %}
\t\t</ul>
</div>
{% endblock %}
{% block javascripts %}
<script>
var form = document.getElementById('test1Form');

// Append the form status
var formStatus = document.createElement('div');
formStatus.setAttribute('class', 'form-status alert');
form.appendChild(formStatus);

form.onsubmit = function (e) {
\t// Stop the regular form submission
\te.preventDefault();

\tvar data = {};
\tfor (var i = 0, ii = form.length; i < ii; ++i) {
\t\tvar input = form[i];
\t\tif (input.name) {
\t\t\tdata[input.name] = input.value;
\t\t}
\t}

\t// Construct an HTTP request
\tvar xhr = new XMLHttpRequest();
\txhr.open(form.method, form.action, true);
\txhr.setRequestHeader('Accept', 'application/json; charset=utf-8');
\txhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');

\t// Send the collected data as JSON
\txhr.send(JSON.stringify(data));

\t// Callback function
\txhr.onloadend = function (response) {
\t\tif (response.target.status === 0) {

\t\t\t// Failed XmlHttpRequest should be considered an undefined error.
\t\t\tformStatus.className += ' alert-danger';
\t\t\tformStatus.innerHTML = form.dataset.formError.message;

\t\t} else if (response.target.status === 400) {

\t\t\t// Bad Request
\t\t\tformStatus.className += ' alert-danger';
            console.log(response.target.response);
\t\t\tformStatus.innerHTML = JSON.parse(response.target.response).message;

\t\t} else if (response.target.status === 200) {

\t\t\t// Success
\t\t\tformStatus.className += ' alert-success';
\t\t\tformStatus.innerHTML = form.dataset.formSuccess;

\t\t}
\t};
};
</script>
{% endblock %}
", "test1.results.html.twig", "/home/wwwroot/sf4/templates/test1.results.html.twig");
    }
}
