<?php $__env->startSection('title' ,'Home'); ?>
    

<?php $__env->startSection('content'); ?>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <ul class="timeline">
      <li>
         <!-- begin timeline-time -->
         <div class="timeline-time">
            <span class="date">today</span>
            <span class="time">04:20</span>
         </div>
         <!-- end timeline-time -->
         <!-- begin timeline-icon -->
         <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
         </div>
         <!-- end timeline-icon -->
         <!-- begin timeline-body -->
         <div class="timeline-body">
            <div class="timeline-header">
               <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></span>
               <span class="username"><a href="javascript:;">John Smith</a> <small></small></span>
            </div>
            <div class="timeline-content">
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
                  Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
               </p>
                              

               <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
               
            </div>
            <div class="timeline-likes">
               <div class="stats-right">
                  
                 <a href="#"> <span class="stats-text">21 Comments</span> </a> 
               </div>
               <div class="stats">
                  <span class="fa-stack fa-fw stats-icon">
                  <i class="fa fa-circle fa-stack-2x text-danger"></i>
                  <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                  </span>
                  <span class="fa-stack fa-fw stats-icon">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                  </span>
                  <span class="stats-total">4.3k</span>
               </div>
            </div>
            <div class="timeline-footer">
               <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
               <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
            </div>
            <div class="timeline-comment-box">
               <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar6.png"></div>
               <div class="input">
                  <form action="">
                     <div class="input-group" style="width: 90%">
                        <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                        <span class="input-group-btn p-l-10">
                        <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                        </span>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- end timeline-body -->
      </li>

      
   </ul>
</div>

<style type="text/css">

</style>

<script type="text/javascript">

</script>
</body>
</html>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\facebook\resources\views/home.blade.php ENDPATH**/ ?>