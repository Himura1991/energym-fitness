<?php

/* EnergymPageBundle:Default:horarios.html.twig */
class __TwigTemplate_f21492dec04f33234f31d3cf2c1632c075ebffe33d6558e6b3014c05881216fa extends Twig_Template
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
        $__internal_9b9b05352bdd7bb9c161f61f58cba7482874b02d52339115a6d875a821747403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9b05352bdd7bb9c161f61f58cba7482874b02d52339115a6d875a821747403->enter($__internal_9b9b05352bdd7bb9c161f61f58cba7482874b02d52339115a6d875a821747403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnergymPageBundle:Default:horarios.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta charset=\"utf-8\"
    <title>Acerca de</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/estilos.css\">
</head>
<body style=\"background-color:#000\">
<header>
    <section class=\"logo\">
        <img src=\"img/logo3.png\"/>
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"acerca\">Acerca de</a></li>
                        <li><a href=\"horarios\">Horarios</a></li>
                        <li><a href=\"contacto\">Contacto</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </section>
    <main>
        <table class=\"table table-bordered\">
            <thead>
            <tr>
                <th>Horarios</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>jueves</th>
                <th>Viernes</th>
                <th>Sabado</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendario"]) ? $context["calendario"] : $this->getContext($context, "calendario")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 56
            echo "                <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "horario", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "lunes", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "martes", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "miercoles", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "jueves", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "viernes", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "sabado", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </tbody>
        </table>
  </main>
    <footer class=\"footer\">
        <div>
            <img src=\"img/logomf2.png\">

        </div>


    </footer>

</body>
<script src=\"js/jquery.min.js\"></script>
<script src=\"js/bootstrap.js\"></script>
</html>";
        
        $__internal_9b9b05352bdd7bb9c161f61f58cba7482874b02d52339115a6d875a821747403->leave($__internal_9b9b05352bdd7bb9c161f61f58cba7482874b02d52339115a6d875a821747403_prof);

    }

    public function getTemplateName()
    {
        return "EnergymPageBundle:Default:horarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  126 => 63,  122 => 62,  118 => 61,  114 => 60,  110 => 59,  106 => 58,  102 => 57,  95 => 56,  78 => 55,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta charset=\"utf-8\"
    <title>Acerca de</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/estilos.css\">
</head>
<body style=\"background-color:#000\">
<header>
    <section class=\"logo\">
        <img src=\"img/logo3.png\"/>
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"acerca\">Acerca de</a></li>
                        <li><a href=\"horarios\">Horarios</a></li>
                        <li><a href=\"contacto\">Contacto</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </section>
    <main>
        <table class=\"table table-bordered\">
            <thead>
            <tr>
                <th>Horarios</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>jueves</th>
                <th>Viernes</th>
                <th>Sabado</th>
            </tr>
            </thead>
            <tbody>
            {% for article in calendario %}
                <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
                    <td>{{ article.horario }}</td>
                    <td>{{ article.lunes }}</td>
                    <td>{{ article.martes }}</td>
                    <td>{{ article.miercoles}}</td>
                    <td>{{ article.jueves }}</td>
                    <td>{{ article.viernes }}</td>
                    <td>{{ article.sabado }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
  </main>
    <footer class=\"footer\">
        <div>
            <img src=\"img/logomf2.png\">

        </div>


    </footer>

</body>
<script src=\"js/jquery.min.js\"></script>
<script src=\"js/bootstrap.js\"></script>
</html>";
    }
}
