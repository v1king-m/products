    <?php

    $act = "testAction:/test:v1mProdBundle:test.html.twig";
    $newact = parseActions($act);
    foreach ($newact as $i => $action) {
        writeln(substr($action['name'], 0, -6));
        // writeln($value['name']);
    }

    function parseActions($actions)
    {
        if (is_array($actions)) {
            return $actions;
        }

        $newActions = array();

        foreach (explode(' ', $actions) as $action) {
            writeln($action);
            $data = explode(':', $action);
            // name
            if (!isset($data[0])) {
                throw new \InvalidArgumentException('An action must have a name');
            }
            $name = array_shift($data);
            // writeln($name);

            // route
            $route = (isset($data[0]) && '' != $data[0]) ? array_shift($data) : '/'.substr($name, 0, -6);
            // if ($route) {
            //     $placeholders = $this->getPlaceholdersFromRoute($route);
            // } else {
            //     $placeholders = array();
            // }
            // writeln($route);

            // template
            $template = (0 < count($data) && '' != $data[0]) ? implode(':', $data) : 'default';
            // writeln($template);

            $newActions[$name] = array(
                'name'         => $name,
                'route'        => $route,
                // 'placeholders' => $placeholders,
                'template'     => $template,
            );
            // writeln($newActions[$name]['name']);
        }
                                       
        return $newActions;
    }
function writeln($str)
{
    echo($str."\n");
    return;
}