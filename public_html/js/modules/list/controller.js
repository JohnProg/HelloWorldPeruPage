function listController($scope, listFactory, $filter, listUrls){

    /*Static*/
    $scope.listUrl = listUrls['dataUrl'];
    $scope.statusPage = true;

    if($scope.listUrl.length > 0) {
        $scope.statusPage = false;
    }

    /* List */

    $scope.init = function () {
        listFactory.getData($scope.listUrl).then(function(response){
            $scope.items = response;
        });
    };

    $scope.$watch('items', function(newValue, oldValue) {
        if (newValue != oldValue){
            $('.load-search').attr('style','display:none;');
            $scope.items = newValue;
        }
        if (newValue)
            $scope.search('');
    }, true);

    $scope.replaceUrl = function(url, option) {
        url = url.replace("0", option);
        return url;
    };


    $scope.delete =  function(id, name){

        $scope.item_delete= {
            'id':id,
            'name':name
        };
        $('#myModal').modal('show');
    }
    /* Pagination */

    $scope.reverse = false;
    $scope.filteredItems = [];
    $scope.groupedItems = [];
    $scope.itemsPerPage = 5;
    $scope.pagedItems = [];
    $scope.currentPage = 0;
    $scope.remember_page = false;
    $scope.query = [];
    $scope.option = [];

    var searchMatch = function (haystack, needle) {
        if (!needle) {
            return true;
        }
        return haystack.toLowerCase().indexOf(needle.toLowerCase()) !== -1;
    };

    // init the filtered items

    $scope.search = function (opcion) {
        var indice = 0;
        var criterio=new Array();
        var campo=new Array();

        for(var i=0;i<$scope.query.length;i++)
        {
            if($scope.query[i] !=undefined ){
                if($scope.option[i]!=undefined){
                    criterio[indice] = $scope.query[i];
                    campo[indice] = $scope.option[i];
                    indice++;
                } else {
                    $scope.option[i] = opcion;
                    criterio[indice] = $scope.query[i];
                    campo[indice] = $scope.option[i];
                    indice++;
                }
            }
        }
        $scope.filtered = $scope.items;
        $.each(criterio, function(index, value) {
            $scope.find = value;
            $scope.index = index;
            $scope.remember_page = $scope.currentPage;
            $scope.filtered = $filter('filter')($scope.filtered, function (item) {
                for(var attr in item) {
                    if(attr==campo[$scope.index] || campo[$scope.index]=='all'){
                        if($scope.query==""){
                            return true;
                        }
                        var attr_type = typeof(item[attr]);
                        if (attr_type == 'string') {
                            if (searchMatch(item[attr], $scope.find))
                                return true;
                        }
                    }
                    else if(opcion=='' || $scope.find=="") {
                        return true;
                    }
                }
                return false;
            });
            // take care of the sorting order
            if ($scope.remember_page !== false) {
                $scope.currentPage = $scope.remember_page;
                $scope.remember_page = false;
            } else {
                $scope.currentPage = 0;
            }
        });
        $scope.filteredItems = $scope.filtered;
        // now group by pages
        $scope.groupToPages();
    };

    // calculate page in place
    $scope.groupToPages = function () {
        $scope.pagedItems = [];
        for (var i = 0; i < $scope.filteredItems.length; i++) {

            if (i % $scope.itemsPerPage === 0) {
                $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)] = [ $scope.filteredItems[i] ];
            } else {
                $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)].push($scope.filteredItems[i]);
            }
        }
    };

    $scope.range = function (start, end) {
        var ret = [];
        if (!end) {
            end = start;
            start = 0;
        }
        for (var i = start; i < end; i++) {
            ret.push(i);
        }
        return ret;
    };

    $scope.prevPage = function () {
        if ($scope.currentPage > 0) {
            $scope.currentPage--;
        }
    };

    $scope.nextPage = function () {
        if ($scope.currentPage < $scope.pagedItems.length - 1) {
            $scope.currentPage++;
        }
    };

    $scope.setPage = function () {
        $scope.currentPage = this.n;
    };

    $scope.handleClick = function(msg) {
        listFactory.broadcastItem(msg);
    };


}