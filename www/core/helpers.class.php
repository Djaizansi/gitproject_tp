<?php
class helpers
{
    public static function getUrl($controller, $action)
    {
        $listOfRoutes = yaml_parse_file("routes.yml");
        foreach ($listOfRoutes as $url=>$route) {
            if ($route["controller"] == $controller && $route["action"]==$action) {
                //Permet de voir si l'élément controller dans $route équivaut à $controller
                //Passer en paramètre. Idem pour Action
                return $url;
            }
        }

        die("Aucune correspondance pour la route");
    }
}
