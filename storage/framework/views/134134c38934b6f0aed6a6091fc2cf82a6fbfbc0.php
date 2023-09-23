<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<?php echo $__env->make('dashboard.components.navDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

    <!-- start sidebar -->
    <?php echo $__env->make('dashboard.components.sidebarDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end sidbar -->

    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="card m-2">
            <div class="card-body">
                <h2 class="font-bold text-lg mb-10">Blog Form</h2>
                <form action="submitBlog" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($blog['id']); ?>" name="id" class="form-control mt-2 mb-1"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                    <div class="form-group m-2">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="<?php echo e($blog['title']); ?>" name="title" class="form-control mt-2 mb-1"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                        <small id="emailHelp" class="form-text text-muted">Fill your blog title here.</small>
                    </div>
                    <div class="form-group m-2">
                        <label for="exampleInputPassword1">User Name</label>
                        <input type="text" value="<?php echo e($blog['user']); ?>" disabled name="user" class="form-control mt-2 mb-1"
                            placeholder="User Name">
                        <small id="emailHelp" class="form-text text-muted">Fill your blog User Name here.</small>
                    </div>
                    <div class="form-group m-2">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control mt-2 mb-1" name="description" id="exampleFormControlTextarea1"
                            rows="3" aria-describedby="emailHelp" placeholder="Enter Description"><?php echo e($blog['description']); ?></textarea>

                        <small id="emailHelp" class="form-text text-muted">Fill your blog Description here.</small>
                    </div>
                    <div class="form-group m-2 mb-4">
                    </div>
                    <button type="submit" class="btn btn-primary m-2 mt-2 mb-1">Save Chenges</button>
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

</html><?php /**PATH /Users/ramswami/Desktop/Projects/website/resources/views/dashboard/editBlog.blade.php ENDPATH**/ ?>