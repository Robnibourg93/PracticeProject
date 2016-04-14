<div class="content padded">
	
    <div class="row">
    
    	<div class="col-lg-6">
        
        	<!-- Top Bar -->
            <div class="top-bar">
            	<span class="pull-left"><a href="#" class="ajax-project-close btn btn-default btn-sm btn-pull-up"><i class="fa fa-times icon-before"></i>Close</a></span>
                <h6 class="pull-right text-muted short">Project Details</h6>
            </div>
  
  			<div class="long">
                <h2 class="short">Social Media App</h2>
                <span class="text-muted">webdesign / webdevelopment</span>
            </div>
            
            <div class="row">
            
            	<div class="col-lg-6">
                	<h5>General Info</h5>
                    <p>Aliquam eleifend justo vitae augue pharetra, ac pellentesque tellus elementum. </p>
                </div>
                
                <div class="col-lg-6">
                	<h5>Project Details</h5>
                    <p>Aenean mollis malesuada libero ac vestibulum. Vivamus viverra sagittis neque ut iaculis. In hac habitasse platea dictumst. Nulla facilisi.</p>
                </div>
                
                <div class="col-lg-12">
                	<h5>Results</h5>
                    <p>Aenean mollis malesuada libero ac vestibulum. Vivamus viverra sagittis neque ut iaculis. In hac habitasse platea dictumst. Nulla facilisi. Pellentesque molestie dignissim tortor, quis pellentesque neque aliquet eu. Phasellus dignissim hendrerit diam, non ultrices lorem commodo eu. In id odio velit. </p>
                    <p><a href="#" class="btn btn-primary">Online version</a> <a href="#" class="btn btn-default">I need similar stuff!</a></p>
                </div>
            
            </div>
        
        </div>
        
        <div class="col-lg-6">
        
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/portfolio/project_06.jpg" alt="" />
              </div>
              <div class="item">
                <img src="img/portfolio/project_02.jpg" alt="" />
              </div>
              <div class="item">
                <img src="img/portfolio/project_05.jpg" alt="" />
              </div>
            </div>
          
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            
          </div>
        
        </div>
        
    </div>
    
</div>

<!-- Scripts -->
<script>
$(document).ready(function (){
	
  // Ajax Project Close	
	
  function closeContent() {
	  $('.project-content').delay(100).slideUp(1000,function() { $('.project-loader').show(0); $('.project-loader .logo-loader').show(0); $.waypoints('refresh') });
	  $('html, body').animate({scrollTop:$('#portfolio').position().top },600); 
  }
	
  $('.ajax-project-close').click(function() {
	  closeContent();
  });
  
});
</script>