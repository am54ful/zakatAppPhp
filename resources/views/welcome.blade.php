<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage - App Zakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/laravel-2752139-2284956.png">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col bg-primary pt-3 pb-4 mx-auto">
            <h2 class="text-center text-white ">Zakat Pahang Data Entry</h2>
            <input id="file" type="file" accept=".txt" style="display:none;" />
            <div class="d-grid gap-1 col-1 mx-auto">
                <input type="button" value="Upload" class="btn btn-warning " onclick="document.getElementById('file').click();" />
            </div>
            <div id="progress" class="d-grid gap-1 col-3 mx-auto pt-3 hide-me">
                <p class="text-center text-white fs-4">Please wait</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (count($users) > 0)
                <h2 style="text-align: center" class="text-black-50">Zakat Records Pahang's Residentials'</h2>
                <div style="display: flex; justify-content: flex-end">
                    {{ $users->links() }}
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td scope="col">ID</td>
                                <td scope="col">IC Number</td>
                                <td scope="col">Name</td>
                                <td scope="col">Zakat Type</td>
                                <td scope="col" class="fix-extra-space">Deduction Amount (RM)</td>
                                <td scope="col">District Code</td>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->ic_number }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ sprintf("%02d", $user->zakat_type) }} - {{ array_search(sprintf("%02d", $user->zakat_type),$zakatType) }}</td>
                            <td class="float-end ">{{ number_format($user->deduct_amt,2) }}</td>
                            <td>{{ sprintf("%02d", $user->district_code) }} - {{ array_search(sprintf("%02d", $user->district_code),$dist_code) }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @elseif (sizeof($users) === 0)
                    <div class="jumbotron bg-danger text-center pt-5 pb-5">
                        <h1 class="display-4 text-white">No Data</h1>
                        <p class="lead text-white">Please input file to begin</p>
                    </div>
                 @endif
            </div>
        </div>
</div>
</body>
<style type="text/css">
.hide-me{
    display: none!important;
}
.show-me{
    display: grid!important;
}
.fix-extra-space{
    white-space: nowrap!important;
    width: 1%!important;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $('#file').on("change", function(){
        $("#progress").removeClass("hide-me").addClass("show-me");
        let file = document.getElementById("file").files[0];
        var formData = new FormData();
        formData.append('file', file);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "user/store",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data, textStatus, request) {
                if (request.status === 200) {
                    location.reload();
                }
            },
            error: function (e) {
                alert('Something went wrong. Refer support for help.');
            }
        });
    });
</script>
</html>
