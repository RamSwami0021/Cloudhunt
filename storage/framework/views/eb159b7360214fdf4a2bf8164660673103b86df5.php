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
                <form action="blogDashboard" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group m-2">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control mt-2 mb-1" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter Title">
                        <small id="emailHelp" class="form-text text-muted">Fill your blog title here.</small>
                    </div>
                    <div class="form-group m-2">
                        <label for="exampleInputPassword1">User Name</label>
                        <input type="text" disabled name="user" class="form-control mt-2 mb-1"
                            id="exampleInputPassword1" value="<?php echo e(Session('name')); ?>" placeholder="User Name">
                        <small id="emailHelp" class="form-text text-muted">Fill your blog User Name here.</small>
                    </div>
                    <div class="form-group m-2">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control mt-2 mb-1" name="description" id="exampleFormControlTextarea1"
                            rows="3" aria-describedby="emailHelp" placeholder="Enter Description"></textarea>
                        <small id="emailHelp" class="form-text text-muted">Fill your blog Description here.</small>
                    </div>
                    <div class="form-group m-2 mb-4">
                        <label for="exampleFormControlFile1">Image Upload</label> </br>
                        <input type="file" name="img" class="form-control-file mt-2 mb-1" id="exampleFormControlFile1">
                    </div>
                    <button type="submit" class="btn btn-primary m-2 mt-2 mb-1">Submit</button>
                </form>
            </div>
        </div>
        <div class="card m-2 mt-4">
            <div class="card-body">
                <h2 class="font-bold text-lg mb-10">Blog List</h2>
                <table class="table-fixed w-full">
                    <thead class="text-left">
                        <tr>
                            <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">Title</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Description</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Date</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">User</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Btn</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        <?php $__currentLoopData = $DataBlog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left"><?php echo e($data['id']); ?>

                                <?php echo e($data['title']); ?></th>
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">
                                <?php echo e($data['description']); ?></th>
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right"><?php echo e($data['date']); ?>

                            </th>
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right"><?php echo e($data['user']); ?>

                            </th>
                            <th class="w-1/4 pl-5 text-xs font-extrabold text-right">
                                <a href="/editBlog/<?php echo e($data['id']); ?>" type="button" class="mb-2 btn btn-primary">
                                    Edit
                                </a>
                                <a href="/deleteBlog/<?php echo e($data['id']); ?>" type="button" class="mt-2 btn btn-danger">
                                    Delete
                                </a>
                            </th>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="../assetsDashbord/js/scripts.js"></script>

<!-- end script -->

</body>

</html>

<style>
/* The Modal (background) */
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>

<script>
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script><?php /**PATH /Users/ramswami/Desktop/Projects/website/resources/views/dashboard/blogDashboard.blade.php ENDPATH**/ ?>