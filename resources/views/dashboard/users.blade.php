@include('dashboard.components.navDashboard')

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
@include('dashboard.components.sidebarDashboard')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <!-- end sidbar -->
    <link rel="stylesheet" type="text/css" href="../assetsDashbord/css/style.css">  

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h2 class="font-bold text-lg mb-10">User List</h2>
                        <form action="{{ route('filter.users') }}" method="GET">
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div>
                                    <label for="start_date" class="font-bold">Start Date:</label>
                                    <input type="date" name="start_date" class="form-input">
                                </div>
                                <div>
                                    <label for="end_date" class="font-bold">End Date:</label>
                                    <input type="date" name="end_date" class="form-input">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary mt-6">Filter</button>
                                </div>
                            </div>
                        </form>
                        <!-- start a table -->
                        <table id="example" class="table table-striped">

                            <!-- table head -->
                            <thead class="text-left">
                                <tr>
                                    <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">User Name</th>
                                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Email</th>
                                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Password
                                    </th>
                                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Btn</th>
                                </tr>
                            </thead>
                            <!-- end table head -->

                            <!-- table body -->
                            <tbody class="text-left">
                                <!-- item -->
                                @foreach($DataUser as $data)
                                <tr>
                                    <!-- name -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">
                                        {{$data['id']}} {{$data['name']}}</th>
                                    <!-- name -->

                                    <!-- product -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">
                                        {{$data['email']}}</th>
                                    <!-- product -->

                                    <!-- invoice -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">
                                        {{$data['password']}}</< /th>
                                        <!-- invoice -->

                                        <!-- status -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">btn</th>
                                    <!-- status -->

                                </tr>
                                @endforeach
                                <!-- item -->
                            </tbody>
                            <!-- end table body -->

                        </table>
                        <a class="btn btn-primary mt-6" href="{{ route('download.csv', ['data' => base64_encode(json_encode($DataUser))]) }}">Download Filtered CSV</a>

                        <!-- end a table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end content -->

</div>
<!-- end wrapper -->



<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="../assetsDashbord/js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>
<!-- end script -->

</body>

</html>