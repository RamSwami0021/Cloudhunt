
@include('dashboard.components.navDashboard')

<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
    <!-- start sidebar -->
    @include('dashboard.components.sidebarDashboard')
  <!-- end sidbar -->

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16">
    content here
  </div>
  <!-- end content -->

</div>
<!-- end wrapper --> 

  

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="../assetsDashbord/js/scripts.js"></script>
<!-- end script -->

</body>
</html>
