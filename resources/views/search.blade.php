<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Interview</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div classs="form-group">
            <input type="text" id="search" name="search" placeholder="Search" class="form-control" />
        </div>
        <div id="stock_info"></div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
    <script type="text/javascript">
        var route = "{{ url('autocomplete') }}";
        var info_path = "{{ url('stockinfo') }}";

        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data, datum, name) {
                    return process(data);
                });
            },
            updater:function (item) {
                var stock  = JSON.parse(JSON.stringify(item));
                var stock_id = JSON.stringify(stock['id']);
                $.ajax({
                    url : info_path,
                    type: "GET",
                    data : {'stock_id':stock_id },
                    success: function(data, textStatus, jqXHR)
                    {
                        $('#stock_info').html(data);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                
                    }
                });
                return item;
            }
        });
    </script>

</body>

</html>