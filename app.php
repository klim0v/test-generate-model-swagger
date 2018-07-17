<?php

require_once __DIR__ . '/vendor/autoload.php';

/*$schemaData = json_decode(<<<'JSON'
{
    "type": "object",
    "properties": {
        "id": {"type": "integer"},
        "name": {"type": "string"},
        "parent": {"$ref": "#"},
        "children": {"type": "array", "items": {"$ref": "#"}},
        "info": {"$ref": "#/definitions/info"}
    },
    "definitions": {
        "info": {
            "type": "object",
            "properties": {
                "lastName": {"type": "string"},
                "birthDate": {"type": "string", "format": "date-time"},
                "options": {"$ref": "#/definitions/options"}
            }
        },
        "options": {
            "type": "object",
            "properties": {
                "rememberSession": {"type": "boolean"},
                "allowNotifications": {"type": "boolean"}
            }
        }
    }
}
JSON
);*/

$schemaData = json_decode(file_get_contents('http://api.deworkacy.ru/api/dwy/site/v2/docs/json-schema'), true);


$schemaData = array_merge($schemaData, [
    'properties' => [
        'child' => [
            '$ref' => '#/definitions/MainPageResponse'
        ]
    ]
]);

$schemaData = json_decode(json_encode($schemaData));

$swaggerSchema = \Swaggest\JsonSchema\Schema::import($schemaData);

$appPath = realpath(__DIR__ . '/app');

$appNs = 'app';

$app = new \Swaggest\PhpCodeBuilder\App\PhpApp();
$app->setNamespaceRoot($appNs, '.');

$builder = new \Swaggest\PhpCodeBuilder\JsonSchema\PhpBuilder();
$builder->buildSetters = true;
$builder->makeEnumConstants = true;

$builder->classCreatedHook = new \Swaggest\PhpCodeBuilder\JsonSchema\ClassHookCallback(
    function (\Swaggest\PhpCodeBuilder\PhpClass $class, string $path, \Swaggest\JsonSchema\Schema $schema) use ($app, $appNs) {
        $desc = '';
        if ($schema->title) {
            $desc = $schema->title;
        }
        if ($schema->description) {
            $desc .= "\n" . $schema->description;
        }
        if ($fromRefs = $schema->getFromRefs()) {
            $desc .= "\nBuilt from " . implode("\n" . ' <- ', $fromRefs);
        }


        if ($schema->paths !== null) {
            foreach ($schema->paths as $pathInfo) {
                print_r($pathInfo);
            }
        }
        die;

        $class->setDescription(trim($desc));

        $class->setNamespace($appNs);
        if ('#' === $path) {
            $class->setName('Root'); // Class name for root schema
        } elseif (strpos($path, '#/definitions/') === 0) {
            $class->setName(\Swaggest\PhpCodeBuilder\PhpCode::makePhpClassName(
                substr($path, strlen('#/definitions/'))));
        }
        $app->addClass($class);
    }
);

$builder->getType($swaggerSchema);
$app->clearOldFiles($appPath);
$app->store($appPath);