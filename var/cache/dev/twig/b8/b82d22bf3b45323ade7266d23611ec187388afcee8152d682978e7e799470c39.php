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

/* test1.html.twig */
class __TwigTemplate_8dc4792702a0a6cda22bf9b33d4b001d95a5a41575ce9522167000c5f4052a4a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test1.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test1.html.twig"));

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
        <h1>Test 1</h1>
        <form id=\"test1Form\" method=\"POST\" action=\"/api/test1\">
            <div class=\"form-group\">
                <label for=\"name\">Name</label>
                <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"surname\">Surname</label>
                <input type=\"text\" class=\"form-control\" name=\"surname\" id=\"surname\" placeholder=\"Surname\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"id_number\">Id Number</label>
                <input type=\"text\" class=\"form-control\" name=\"id_number\" id=\"id_number\" placeholder=\"Id number\" maxlength=\"13\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"dob\">Date of Birth</label>
                <input type=\"text\" class=\"form-control\" name=\"dob\" id=\"dob\" placeholder=\"dd/mm/YYYY\" required>
            </div>
            <div class=\"form-group\">
                <button class=\"btn btn-primary btn-block\" type=\"submit\">Post</button>
            </div>
        </form>
            <div class=\"form-group\">
                <button class=\"btn btn-danger btn-block\" id=\"cancelBtn\" >Cancel</button>
            </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "<script>
var form = document.getElementById('test1Form');
var cancelButton = document.getElementById('cancelBtn');


// Append the form status
var formStatus = document.createElement('div');
formStatus.setAttribute('class', 'form-status alert');
form.appendChild(formStatus);
cancelButton.onclick = function(e) {
\tdocument.getElementById('name').value = '';
\tdocument.getElementById('surname').value = '';
\tdocument.getElementById('id_number').value = '';
\tdocument.getElementById('dob').value = '';
\tformStatus.setAttribute('class', 'form-status alert');
\tformStatus.innerHTML = '';
} 
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
\t\t\tformStatus.innerHTML = JSON.parse(response.target.response).message;

\t\t} else if (response.target.status === 400) {

\t\t\t// Bad Request
\t\t\tformStatus.className += ' alert-danger';
            console.log(response.target.response);
\t\t\tformStatus.innerHTML = JSON.parse(response.target.response).message;

\t\t} else if (response.target.status === 200) {

\t\t\t// Success
\t\t\tformStatus.className += ' alert-success';
\t\t\tformStatus.innerHTML = JSON.parse(response.target.response).message;

\t\t}
\t};
};
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  92 => 33,  57 => 4,  51 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"container\">
        <h1>Test 1</h1>
        <form id=\"test1Form\" method=\"POST\" action=\"/api/test1\">
            <div class=\"form-group\">
                <label for=\"name\">Name</label>
                <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Name\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"surname\">Surname</label>
                <input type=\"text\" class=\"form-control\" name=\"surname\" id=\"surname\" placeholder=\"Surname\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"id_number\">Id Number</label>
                <input type=\"text\" class=\"form-control\" name=\"id_number\" id=\"id_number\" placeholder=\"Id number\" maxlength=\"13\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"dob\">Date of Birth</label>
                <input type=\"text\" class=\"form-control\" name=\"dob\" id=\"dob\" placeholder=\"dd/mm/YYYY\" required>
            </div>
            <div class=\"form-group\">
                <button class=\"btn btn-primary btn-block\" type=\"submit\">Post</button>
            </div>
        </form>
            <div class=\"form-group\">
                <button class=\"btn btn-danger btn-block\" id=\"cancelBtn\" >Cancel</button>
            </div>

</div>
{% endblock %}
{% block javascripts %}
<script>
var form = document.getElementById('test1Form');
var cancelButton = document.getElementById('cancelBtn');


// Append the form status
var formStatus = document.createElement('div');
formStatus.setAttribute('class', 'form-status alert');
form.appendChild(formStatus);
cancelButton.onclick = function(e) {
\tdocument.getElementById('name').value = '';
\tdocument.getElementById('surname').value = '';
\tdocument.getElementById('id_number').value = '';
\tdocument.getElementById('dob').value = '';
\tformStatus.setAttribute('class', 'form-status alert');
\tformStatus.innerHTML = '';
} 
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
\t\t\tformStatus.innerHTML = JSON.parse(response.target.response).message;

\t\t} else if (response.target.status === 400) {

\t\t\t// Bad Request
\t\t\tformStatus.className += ' alert-danger';
            console.log(response.target.response);
\t\t\tformStatus.innerHTML = JSON.parse(response.target.response).message;

\t\t} else if (response.target.status === 200) {

\t\t\t// Success
\t\t\tformStatus.className += ' alert-success';
\t\t\tformStatus.innerHTML = JSON.parse(response.target.response).message;

\t\t}
\t};
};
</script>
{% endblock %}
", "test1.html.twig", "/home/wwwroot/sf4/templates/test1.html.twig");
    }
}
