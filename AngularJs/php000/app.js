var angularTodo = angular.module('lostsysApp', []);

function mainController($scope, $http) {
    $scope.names = [ ];

    $http.get('model.php')
            // angular interpreta errores http o no .. y en data está el contenido html. que puede ser un string json.
            .success(function(data) {
                    $scope.names = eval(data); // toma la respuesta entera de model.php que siempre deja names: +strin_json
                    console.log(data)
                })
            .error(function(data) {
                    console.log('Error: ' + data);
            });
    // Si se agrega un nombre.. de index.php en datos $scope.nom y en $scope.telefon se realiz un post en formato json a model.php
    // con los siguientes parámetros
    //    ->  op:"append"
    //    ->  nom: $scope.nom
    //    ->  telefon : $scope.telefon
    $scope.addNom = function() {
        $http.post('model.php', { op: 'append', nom: $scope.nom, telefon: $scope.telefon } )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data)
                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });

        $scope.nom="";
        $scope.telefon="";
        }

    $scope.delNom = function( nom ) {
        if ( confirm("Seguro?") ) {
            $http.post('model.php', { op: 'delete', nom: nom } )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data)
                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });
            }
        }

    }
