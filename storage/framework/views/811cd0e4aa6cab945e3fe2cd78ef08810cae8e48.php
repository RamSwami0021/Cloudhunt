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
                <h2 class="font-bold text-lg mb-10">Contact Us</h2>

                <!-- start a table -->
                <table class="table-fixed w-full">

                    <!-- table head -->
                    <thead class="text-left">
                        <tr>
                            <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">User Name</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Email</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Phone Number</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Message</th>
                            <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Btn</th>
                        </tr>
                    </thead>
                    <!-- end table head -->

                    <!-- table body -->
                    <tbody class="text-left">
                        <!-- item -->
                        <?php $__currentLoopData = $DataContact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <!-- name -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left"><?php echo e($data['id']); ?> <?php echo e($data['name']); ?></th>
                            <!-- name -->

                            <!-- product -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right"><?php echo e($data['email']); ?></th>
                            <!-- product -->

                            <!-- invoice -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right"><?php echo e($data['phone']); ?></</th>
                            <!-- invoice -->

                            <!-- price -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right"><?php echo e($data['message']); ?></</th>
                            <!-- price -->

                            <!-- status -->
                            <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">btn</th>
                            <!-- status -->

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- item -->
                    </tbody>
                    <!-- end table body -->

                </table>
                <!-- end a table -->
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

</html><?php /**PATH /Users/ramswami/Desktop/Projects/website/resources/views/dashboard/contactDashboard.blade.php ENDPATH**/ ?>