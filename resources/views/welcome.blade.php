<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-5">Laravel Ajax Vanilla JS</h1>
        <hr>
        <div class="card">
            <div class="card-header">
                User Management
            </div>
            <div class="card-body">
                <div class="card-title text-right">
                    <button id="btn-addUser" class="btn btn-primary">Add User</button>
                </div>
                <div class="table-responsive">
                    <table  id="table-users" class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script>

        function showUser(e)
        {
            console.log(e);
        }
        
        $(document).ready(function(){
            $('#table-users').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('api.users')}}",
                columns: [
                    {data:'id', name:'id'},
                    {data:'name', name:'name'},
                    {data:'email', name:'email'},
                    {data:'status', name:'status'},
                    {data:'action', name:'action', orderable:false, searchable:false}
                ]
            });
        });

        let btnShow = document.getElementById('btn-show');
        console.log(btnShow);
        if(btnShow)
        {
            btnShow.addEventListener('click', showUser);
        }
        

    </script>
  </body>
</html>