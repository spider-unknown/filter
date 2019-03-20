<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('bootstrap-4.3.1/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>
<header>
    <div class="container">
        <div class="row bg-light">
            <div class="col-sm-4">
                <h2>Мои Задачи</h2>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="searchModal">Поиск</label>
                    <input type="search" id="searchModal" class="form-control" placeholder="Фильтр + поиск"
                           data-toggle="modal" data-target="#myModal">
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Search</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="myForm">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Roles</label>
                                                    <input type="text" class="form-control" name="role">
                                                </div>
                                            </div>
                                            <div class="col-6">

                                                <div class="form-group">
                                                    <label>In Process</label>
                                                    <select name="in_process" class="form-control">
                                                        <option value="0">all</option>
                                                        <option value="false">not in process</option>
                                                        <option value="1">in process</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Task</label>
                                                    <input type="text" class="form-control" name="task">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Completed</label>
                                                    <select name="completed" class="form-control">
                                                        <option value="0">all</option>
                                                        <option value="false">Not Completed</option>
                                                        <option value="1">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Director</label>
                                                    <input type="text" class="form-control" name="director">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Responsible</label>
                                                    <input type="text" class="form-control" name="responsible">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Expire Date</label>
                                                    <input type="date" class="form-control" name="expire_date">
                                                </div>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="closeBtn" class="btn btn-default" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-primary float-right">Print</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">Задачи</div>
        <div class="card-body">
            <table class="table table-responsive table-hover">
                <thead>
                <tr id="thead">
                    <th>Name</th>
                </tr>
                <tbody id="tbody">
                {{--@foreach($tasks as $task)--}}
                {{--<tr>--}}
                {{--<td>{{$task->task}}</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $("#myForm").on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "/index",
            data: $("#myForm").serialize(),
            success: function (resp) {
                var tbody = $("#tbody");
                var thead = $("#thead");
                thead.empty();
                tbody.empty();
                var theadFilled = false;
                resp.forEach(function (element) {
                    var tr = document.createElement("tr");
                    for (var key in element) {
                        if (!theadFilled) {
                            var th = document.createElement("th");
                            th.innerHTML = key;
                            thead.append(th);
                        }
                        var td = document.createElement("td");
                        td.innerHTML = element[key];
                        tr.append(td);
                    }
                    theadFilled = true;
                    tbody.append(tr);
                });
                $("#myForm").trigger("reset");
                $("#closeBtn").click();
            },
            error: function (err) {
                alert("Error occured! Report system administrator!");
            }
        });
    });

    $("#myForm").submit();
</script>
<script src="{{asset('bootstrap-4.3.1/js/bootstrap.js')}}"></script>

</body>
</html>