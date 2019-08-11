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

/* item/index.html.twig */
class __TwigTemplate_bbdb6bbaeca01e816c4182ae7baefbca0494f0149d41fcc690520bfb4418fa90 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "item/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "item/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Items!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\" id=\"app\">
        ";
        // line 9
        echo "
          {{ test }}
        ";
        echo "
        <div class=\"d-flex flex-row justify-content-center mt-3 mb-2\">
            <div class=\"col-md-8\">
                <h1 class=\"text-center\">My awesome shopping list</h1>
                ";
        // line 38
        echo "
                <table class=\"table table-striped\">
                    <thead>
                    <th width=\"10%\">Position</th>
                    <th width=\"60%\">Item</th>
                    <th width=\"10%\">Quantity</th>
                    <th class=\"text-right\" width=\"20%\"></th>
                    </thead>
                    <tbody>

                    <tr v-for=\"(item , index) in items\" :key=\"item.id\">
                        <td>{{ index + 1 }}</td>
                        <td><input type=\"text\" class=\"form-control\" v-model=\"item.name\" @blur=\"updateItem(item)\"></td>
                        <td><input type=\"text\" class=\"form-control\" v-model=\"item.quantity\" @blur=\"updateItem(item)\"></td>
                        <td class=\"text-right\"><button class=\"btn btn-sm btn-danger\" @click=\"deleteItem(item)\">Delete</button>
                    </tr>

                    </tbody>
                </table>
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" v-model=\"newItem.name\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-primary\" type=\"button\" @click=\"addItem()\">Add new item</button>
                    </div>
                </div>
                ";
        echo "
                <h3>Instructions and setup: </h3>

                <p>Welcome to your shopping list! At the moment the list is static html, your task is to make it dynamic.</p>

                <p><strong>Coding environments</strong><br />
                    Use whichever editor you feel comfortable with. On the machine we've preinstalled VSCode, PyCharm, Geany, Emacs, Vim and Sublime.

                    No plugins have been added, so you'll need to set it up. Both Chromium and Firefox are installed.
                </p>

                <p><strong>Database</strong> <br />
                    There is a MySQL database set up already with access rights running on the machine. <br />
                <dl class=\"row\">
                    <dt class=\"col-md-6 text-right\">username:</dt>
                    <dd class=\"col-md-6\">user</dd>
                    <dt class=\"col-md-6 text-right\">password:</dt>
                    <dd class=\"col-md-6\">user</dd>
                    <dt class=\"col-md-6 text-right\">database:</dt>
                    <dd class=\"col-md-6\">shopping_list</dd>
                    <dt class=\"col-md-6 text-right\">port:</dt>
                    <dd class=\"col-md-6\">3306 </dd>
                    <dt class=\"col-md-6 text-right\">host:</dt>
                    <dt class=\"col-md-6\">localhost</dt>
                </dl>

                <div class=\"alert alert-info\">The columns in the database are listed as part of <a href=\"#task1\">Task 1</a>. You do not need to create any databases or modify any columns for this test.</div>
                </p>

                <p><strong>This file</strong><br />
                    This file is located in <strong>/home/user/Desktop/index.php</strong>. <br/><br/>

                    Feel free to modify it as desired. It is contained within a local git repo which you may use as you please. </br>

                    Add any new files or make changes however you feel appropriate. Apache and nginx is not installed, so you'll need to use the built in PHP server.

                </p>
                <p>php can be started with the command <pre>cd ~/Desktop && php -s localhost:8000</pre></p>


                <p><strong id=\"task1\">Task 1: Wire up the \"Add new item\" button above.</strong> <br/>
                    When clicked add a shopping item to the list. There is a table in the database named \"shopping_list_items\" containing the columns
                <ul>
                    <li>id: an integer auto-incremented</li>
                    <li>name: varchar(255) not null</li>
                    <li>quantity: unsigned integer</li>
                </ul>
                </p>

                <p><strong>Task 2: Sort the items alphabetically</strong><br />
                    Sort the items in the list alphabetically. Case-insensitive if possible. The number shown in the position column should be the item's placement
                    in the list. Starting at one.
                </p>

                <p><strong>Task 3: Wire up the delete buttons</strong><br />
                    When a user clicks the delete button, show a confirmation and if confirmed, delete that item from the database.
                </p>

                <p><strong>Task 4: Make the quantity column editable</strong><br />
                    Instead of just a number, make the quantity cells editable by adding an input.<br />
                    For each row, add a save button that will update the quantity for that row.
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "    <script>
      var app = new Vue({
        el: '#app',
        data: {
          message: 'Hello Vue!',
          items: [],
          newItem: {
            name: \"\",
            quantity: 1
          },
          test: null
        },
        mounted () {
          this.fetchItems()
        },
        methods: {
          fetchItems(){
            axios.get('http://localhost/api/item').then(response => (this.items = response.data))
          },
          addItem(){
            axios.post('http://localhost/api/item', this.newItem).then(response => (this.fetchItems()))
          },
          updateItem(item){
            axios.post(`http://localhost/api/item/\${item.id}`, item).then(response => (this.fetchItems()))
          },
          deleteItem(item){
            axios.post(`http://localhost/api/item/\${item.id}/delete`).then(response => (this.fetchItems()))
          }
        }
      })
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "item/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 105,  180 => 104,  82 => 38,  73 => 9,  70 => 6,  64 => 5,  52 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Items!{% endblock %}

{% block body %}
    <div class=\"container\" id=\"app\">
        {% verbatim %}
          {{ test }}
        {% endverbatim %}
        <div class=\"d-flex flex-row justify-content-center mt-3 mb-2\">
            <div class=\"col-md-8\">
                <h1 class=\"text-center\">My awesome shopping list</h1>
                {% verbatim %}
                <table class=\"table table-striped\">
                    <thead>
                    <th width=\"10%\">Position</th>
                    <th width=\"60%\">Item</th>
                    <th width=\"10%\">Quantity</th>
                    <th class=\"text-right\" width=\"20%\"></th>
                    </thead>
                    <tbody>

                    <tr v-for=\"(item , index) in items\" :key=\"item.id\">
                        <td>{{ index + 1 }}</td>
                        <td><input type=\"text\" class=\"form-control\" v-model=\"item.name\" @blur=\"updateItem(item)\"></td>
                        <td><input type=\"text\" class=\"form-control\" v-model=\"item.quantity\" @blur=\"updateItem(item)\"></td>
                        <td class=\"text-right\"><button class=\"btn btn-sm btn-danger\" @click=\"deleteItem(item)\">Delete</button>
                    </tr>

                    </tbody>
                </table>
                <div class=\"input-group mb-3\">
                    <input type=\"text\" class=\"form-control\" v-model=\"newItem.name\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-primary\" type=\"button\" @click=\"addItem()\">Add new item</button>
                    </div>
                </div>
                {% endverbatim %}
                <h3>Instructions and setup: </h3>

                <p>Welcome to your shopping list! At the moment the list is static html, your task is to make it dynamic.</p>

                <p><strong>Coding environments</strong><br />
                    Use whichever editor you feel comfortable with. On the machine we've preinstalled VSCode, PyCharm, Geany, Emacs, Vim and Sublime.

                    No plugins have been added, so you'll need to set it up. Both Chromium and Firefox are installed.
                </p>

                <p><strong>Database</strong> <br />
                    There is a MySQL database set up already with access rights running on the machine. <br />
                <dl class=\"row\">
                    <dt class=\"col-md-6 text-right\">username:</dt>
                    <dd class=\"col-md-6\">user</dd>
                    <dt class=\"col-md-6 text-right\">password:</dt>
                    <dd class=\"col-md-6\">user</dd>
                    <dt class=\"col-md-6 text-right\">database:</dt>
                    <dd class=\"col-md-6\">shopping_list</dd>
                    <dt class=\"col-md-6 text-right\">port:</dt>
                    <dd class=\"col-md-6\">3306 </dd>
                    <dt class=\"col-md-6 text-right\">host:</dt>
                    <dt class=\"col-md-6\">localhost</dt>
                </dl>

                <div class=\"alert alert-info\">The columns in the database are listed as part of <a href=\"#task1\">Task 1</a>. You do not need to create any databases or modify any columns for this test.</div>
                </p>

                <p><strong>This file</strong><br />
                    This file is located in <strong>/home/user/Desktop/index.php</strong>. <br/><br/>

                    Feel free to modify it as desired. It is contained within a local git repo which you may use as you please. </br>

                    Add any new files or make changes however you feel appropriate. Apache and nginx is not installed, so you'll need to use the built in PHP server.

                </p>
                <p>php can be started with the command <pre>cd ~/Desktop && php -s localhost:8000</pre></p>


                <p><strong id=\"task1\">Task 1: Wire up the \"Add new item\" button above.</strong> <br/>
                    When clicked add a shopping item to the list. There is a table in the database named \"shopping_list_items\" containing the columns
                <ul>
                    <li>id: an integer auto-incremented</li>
                    <li>name: varchar(255) not null</li>
                    <li>quantity: unsigned integer</li>
                </ul>
                </p>

                <p><strong>Task 2: Sort the items alphabetically</strong><br />
                    Sort the items in the list alphabetically. Case-insensitive if possible. The number shown in the position column should be the item's placement
                    in the list. Starting at one.
                </p>

                <p><strong>Task 3: Wire up the delete buttons</strong><br />
                    When a user clicks the delete button, show a confirmation and if confirmed, delete that item from the database.
                </p>

                <p><strong>Task 4: Make the quantity column editable</strong><br />
                    Instead of just a number, make the quantity cells editable by adding an input.<br />
                    For each row, add a save button that will update the quantity for that row.
                </p>
            </div>
        </div>
    </div>
{% endblock %}
    {% block javascripts %}
    <script>
      var app = new Vue({
        el: '#app',
        data: {
          message: 'Hello Vue!',
          items: [],
          newItem: {
            name: \"\",
            quantity: 1
          },
          test: null
        },
        mounted () {
          this.fetchItems()
        },
        methods: {
          fetchItems(){
            axios.get('http://localhost/api/item').then(response => (this.items = response.data))
          },
          addItem(){
            axios.post('http://localhost/api/item', this.newItem).then(response => (this.fetchItems()))
          },
          updateItem(item){
            axios.post(`http://localhost/api/item/\${item.id}`, item).then(response => (this.fetchItems()))
          },
          deleteItem(item){
            axios.post(`http://localhost/api/item/\${item.id}/delete`).then(response => (this.fetchItems()))
          }
        }
      })
    </script>
    {% endblock %}
", "item/index.html.twig", "/home/wwwroot/sf4/templates/item/index.html.twig");
    }
}
