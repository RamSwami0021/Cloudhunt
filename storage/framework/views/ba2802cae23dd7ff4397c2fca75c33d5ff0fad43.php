<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<?php echo $__env->make('dashboard.components.navDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
    <?php echo $__env->make('dashboard.components.sidebarDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end sidbar -->

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="card">
            <div class="card-body">
                <h2 class="font-bold text-lg mb-10">SignIn</h2>
                <form action="signin" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group m-2">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" name="name" class="form-control mt-2 mb-1" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter User Name">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your user name with anyone
                            else.</small>
                    </div>
                    <div class="form-group m-2">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control mt-2 mb-1" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group m-2">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control mt-2 mb-1" id="exampleInputPassword1"
                            placeholder="Password">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your Password with anyone
                            else.</small>
                    </div>
                    <button type="submit" class="btn btn-primary m-2 mt-2 mb-1">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end content -->

</div>
<!-- end wrapper -->



<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="../assetsDashbord/js/scripts.js"></script>
<!-- end script -->

</body>

</html><?php /**PATH /Users/ramswami/Desktop/Projects/website/resources/views/dashboard/signin.blade.php ENDPATH**/ ?>